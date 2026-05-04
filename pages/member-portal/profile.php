<?php
$pageTitle = 'My Profile — IBPC Canada';
$pageDescription = 'View and manage your IBPC Canada membership, contact, and business information.';
$isHomepage = false;

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../includes/functions.php';

requireLogin();

include __DIR__ . '/../../includes/header.php';

$memberName   = $_SESSION['member_name']  ?? 'Member';
$memberStatus = $_SESSION['member_status'] ?? 'active';

include __DIR__ . '/../../includes/portal-shell-open.php';
?>

<div id="profileApp" v-cloak>
  <div class="portal-header-actions" style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
      <h2 class="portal-heading">My Profile</h2>
      <p class="portal-subheading" style="margin-bottom: 0;">View and manage your IBPC Canada membership, contact, and business information.</p>
    </div>
    <div v-if="!loading">
      <button v-if="!isEditing" @click="enterEditMode" class="btn-1" style="padding: 8px 20px;">Edit Profile</button>
      <div v-else style="display: flex; gap: 10px;">
        <button @click="cancelEdit" class="btn-1" style="padding: 8px 20px; background: #888; border-color: #888;">Cancel</button>
        <button @click="saveProfile" class="btn-1" style="padding: 8px 20px;" :disabled="saving">
          {{ saving ? 'Saving...' : 'Save Changes' }}
        </button>
      </div>
    </div>
  </div>

  <div v-if="loading" style="padding: 100px 0; text-align: center; color: #888;">
    <div class="spinner" style="margin-bottom: 10px;"></div>
    Loading your profile...
  </div>

  <div v-else-if="loadError" class="portal-alert portal-alert--expired">
    <strong>Error:</strong> {{ loadError }}
    <button @click="fetchProfile" style="margin-left: 10px; background: none; border: none; text-decoration: underline; color: inherit; cursor: pointer;">Try again</button>
  </div>

  <div v-else class="row">
    <div class="col-lg-8">
      
      <!-- Membership Summary (only in view mode) -->
      <div v-if="!isEditing" class="portal-card" style="margin-bottom: 24px;">
        <h3 class="portal-card__title">Membership Summary</h3>
        <div class="portal-card__body">
          <div v-if="profile.membership.status === 'active'" class="portal-alert portal-alert--info" style="margin-bottom: 20px; background: #e8f5e9; border-color: #c8e6c9; color: #2e7d32;">
            Your membership is active and all benefits are available.
          </div>
          <div v-else-if="profile.membership.status === 'paid_pending_approval'" class="portal-alert portal-alert--pending" style="margin-bottom: 20px;">
            Thank you for your payment! Your membership is currently <strong>awaiting administrative approval</strong>. You will receive an email once your account is fully activated.
          </div>
          <div v-else-if="profile.membership.status === 'pending'" class="portal-alert portal-alert--pending" style="margin-bottom: 20px;">
            Your membership registration is pending approval from IBPC Canada.
          </div>
          <div v-else-if="profile.membership.status === 'expired'" class="portal-alert portal-alert--expired" style="margin-bottom: 20px;">
            Your membership has expired. Please renew to continue enjoying IBPC benefits.
          </div>

          <div class="profile-info-grid">
            <div class="profile-info-item">
              <label>Status</label>
              <div :class="'portal-status-badge portal-status-badge--' + profile.membership.status">{{ profile.membership.status.replace(/_/g, ' ') }}</div>
            </div>
            <div class="profile-info-item">
              <label>Member ID</label>
              <div>{{ profile.memberNumber || 'Assigned on approval' }}</div>
            </div>
            
            <!-- Only show these when approved -->
            <template v-if="profile.membership.status === 'active' || profile.membership.status === 'expired'">
              <div class="profile-info-item">
                <label>Membership Level</label>
                <div>{{ profile.membership.level || 'Not provided' }}</div>
              </div>
              <div class="profile-info-item">
                <label>Member Since</label>
                <div>{{ profile.membership.memberSince || 'Not available' }}</div>
              </div>
              <div class="profile-info-item">
                <label>Renewal Due</label>
                <div>{{ profile.membership.renewalDueOn || 'Not available' }}</div>
              </div>
            </template>
            <template v-else>
              <div class="profile-info-item" style="grid-column: span 3; margin-top: 10px; color: #888; font-style: italic; font-size: 13px;">
                Membership details (Level, Member Since, Renewal Date) will be displayed once your account is approved.
              </div>
            </template>
          </div>
        </div>
      </div>

      <!-- Personal Information -->
      <div class="portal-card" style="margin-bottom: 24px;">
        <h3 class="portal-card__title">Personal Information</h3>
        <div class="portal-card__body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Prefix</label>
                <div v-if="!isEditing" class="profile-view-val">{{ profile.personal.prefix || 'Not provided' }}</div>
                <select v-else v-model="profileEdit.personal.prefix" class="form-control">
                  <option value="">None</option>
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mrs.">Mrs.</option>
                  <option value="Dr.">Dr.</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>First Name <span v-if="isEditing" style="color: red;">*</span></label>
                <div v-if="!isEditing" class="profile-view-val">{{ profile.personal.firstName }}</div>
                <input v-else type="text" v-model="profileEdit.personal.firstName" class="form-control" :class="{'is-invalid': errors.firstName}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Last Name <span v-if="isEditing" style="color: red;">*</span></label>
                <div v-if="!isEditing" class="profile-view-val">{{ profile.personal.lastName }}</div>
                <input v-else type="text" v-model="profileEdit.personal.lastName" class="form-control" :class="{'is-invalid': errors.lastName}">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Email Address</label>
                <div class="profile-view-val" style="color: #888;">{{ profile.personal.email }}</div>
                <p v-if="isEditing" style="font-size: 11px; color: #999; margin-top: 5px;">Contact admin to change your email.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>LinkedIn Profile</label>
                <div v-if="!isEditing" class="profile-view-val">
                  <a v-if="profile.personal.linkedInUrl" :href="profile.personal.linkedInUrl" target="_blank" style="color: var(--color-primary); text-decoration: underline;">View Profile</a>
                  <span v-else>Not provided</span>
                </div>
                <input v-else type="text" v-model="profileEdit.personal.linkedInUrl" placeholder="https://linkedin.com/in/username" class="form-control">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Cell Phone</label>
                <div v-if="!isEditing" class="profile-view-val">{{ profile.personal.cellPhone || 'Not provided' }}</div>
                <input v-else type="text" v-model="profileEdit.personal.cellPhone" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Business Phone</label>
                <div v-if="!isEditing" class="profile-view-val">{{ profile.personal.businessPhone || 'Not provided' }}</div>
                <input v-else type="text" v-model="profileEdit.personal.businessPhone" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Business Information -->
      <div class="portal-card" style="margin-bottom: 24px;">
        <h3 class="portal-card__title">Business Information</h3>
        <div class="portal-card__body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Organization Name</label>
                <div v-if="!isEditing" class="profile-view-val">{{ profile.organization.organizationName || 'Not provided' }}</div>
                <input v-else type="text" v-model="profileEdit.organization.organizationName" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Position / Job Title</label>
                <div v-if="!isEditing" class="profile-view-val">{{ profile.organization.position || 'Not provided' }}</div>
                <input v-else type="text" v-model="profileEdit.organization.position" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Industry</label>
                <div v-if="!isEditing" class="profile-view-val">{{ profile.organization.industry || 'Not provided' }}</div>
                <input v-else type="text" v-model="profileEdit.organization.industry" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Company Website</label>
                <div v-if="!isEditing" class="profile-view-val">
                  <a v-if="profile.organization.website" :href="profile.organization.website" target="_blank" style="color: var(--color-primary); text-decoration: underline;">{{ profile.organization.website }}</a>
                  <span v-else>Not provided</span>
                </div>
                <input v-else type="text" v-model="profileEdit.organization.website" placeholder="https://example.com" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group" style="margin-bottom: 0;">
            <label>Business Address</label>
            <div v-if="!isEditing" class="profile-view-val">{{ profile.organization.address || 'Not provided' }}</div>
            <textarea v-else v-model="profileEdit.organization.address" rows="3" class="form-control"></textarea>
          </div>
        </div>
      </div>

      <!-- Additional Information -->
      <div class="portal-card">
        <h3 class="portal-card__title">Additional Information</h3>
        <div class="portal-card__body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Chapter / Region</label>
                <div v-if="!isEditing" class="profile-view-val">{{ profile.additional.chapter || 'Not provided' }}</div>
                <select v-else v-model="profileEdit.additional.chapter" class="form-control">
                  <option value="Ontario">Ontario</option>
                  <option value="British Columbia">British Columbia</option>
                  <option value="Quebec">Quebec</option>
                  <option value="Alberta">Alberta</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Referred By</label>
                <div v-if="!isEditing" class="profile-view-val">{{ profile.additional.referredBy || 'Not provided' }}</div>
                <input v-else type="text" v-model="profileEdit.additional.referredBy" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group" style="margin-bottom: 0;">
            <label>How did you hear about us?</label>
            <div v-if="!isEditing" class="profile-view-val">{{ profile.additional.howDidYouHearAboutUs || 'Not provided' }}</div>
            <input v-else type="text" v-model="profileEdit.additional.howDidYouHearAboutUs" class="form-control">
          </div>
        </div>
      </div>

    </div>

    <!-- Sidebar Info -->
    <div class="col-lg-4">
      <div class="portal-card" style="margin-bottom: 24px; background: var(--color-primary); color: #fff; border: none;">
        <div class="portal-card__body" style="text-align: center; padding: 40px 20px;">
          <div class="member-status-card__avatar" style="width: 80px; height: 80px; font-size: 32px; margin: 0 auto 16px; border: 4px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1);">
            {{ profile.personal.firstName ? profile.personal.firstName[0] : 'M' }}{{ profile.personal.lastName ? profile.personal.lastName[0] : '' }}
          </div>
          <h4 style="color: #fff; margin-bottom: 4px; text-transform: none;">{{ profile.personal.firstName || 'Member' }} {{ profile.personal.lastName || '' }}</h4>
          <p style="color: rgba(255,255,255,0.7); font-size: 13px; margin-bottom: 20px;">{{ profile.personal.email }}</p>
          <div :class="'portal-status-badge portal-status-badge--' + profile.membership.status" style="border: 1px solid rgba(255,255,255,0.3); background: rgba(255,255,255,0.1); color: #fff;">
            {{ profile.membership.status.toUpperCase() }}
          </div>
        </div>
      </div>
      
      <div v-if="!isEditing" class="portal-card">
        <div class="portal-card__body">
          <h4 style="font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: #999; margin-bottom: 15px;">Actions</h4>
          <ul class="portal-action-list">
            <li><a href="/renew-membership">Renew Membership</a></li>
            <li><a href="/api/logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Unsaved changes warning overlay (Custom) -->
  <div v-if="showLeaveWarning" class="modal-overlay">
    <div class="modal-content" style="max-width: 400px; text-align: center;">
      <h3 style="margin-bottom: 12px;">Unsaved Changes</h3>
      <p style="color: #666; margin-bottom: 24px;">You have unsaved changes. Leave without saving?</p>
      <div style="display: flex; gap: 12px; justify-content: center;">
        <button @click="showLeaveWarning = false" class="btn-1" style="background: #eee; border-color: #ddd; color: #333;">Stay on Page</button>
        <button @click="confirmLeave" class="btn-1" style="background: var(--color-accent-red); border-color: var(--color-accent-red);">Leave Anyway</button>
      </div>
    </div>
  </div>
</div>

<style>
.portal-card { background: var(--color-white); border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); }
.portal-card__title { font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: #999; padding: 18px 24px; border-bottom: 1px solid #f5f5f5; margin: 0; }
.portal-card__body { padding: 24px; }
.profile-view-val { font-size: 15px; color: var(--color-body); font-weight: 500; min-height: 22px; }
.form-group label { display: block; font-size: 12px; color: #888; margin-bottom: 6px; font-weight: 600; }
.form-group { margin-bottom: 20px; }
.form-control { width: 100%; border: 1px solid #ddd; border-radius: 4px; padding: 10px 14px; font-size: 14px; font-family: inherit; }
.form-control:focus { border-color: var(--color-primary); outline: none; }
.is-invalid { border-color: var(--color-accent-red) !important; }
.profile-info-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.profile-info-item label { display: block; font-size: 11px; text-transform: uppercase; color: #aaa; margin-bottom: 4px; }
.profile-info-item div { font-size: 14px; font-weight: 600; }
.portal-action-list { list-style: none; padding: 0; margin: 0; }
.portal-action-list li { margin-bottom: 10px; }
.portal-action-list li a { color: var(--color-primary); text-decoration: none; font-size: 14px; }
.portal-action-list li a:hover { text-decoration: underline; }

.modal-overlay { position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); display: flex; align-items: center; justify-content: center; z-index: 9999; }
.modal-content { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }

[v-cloak] { display: none; }
</style>

<!-- Load Vue.js for simple reactive UI -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
const { createApp, ref, reactive, computed, onMounted, onBeforeUnmount } = Vue;

createApp({
  setup() {
    const loading = ref(true);
    const saving = ref(false);
    const loadError = ref(null);
    const isEditing = ref(false);
    const showLeaveWarning = ref(false);
    
    const profile = reactive({
      membership: {},
      personal: {},
      organization: {},
      additional: {}
    });
    
    let originalProfileData = null;
    const profileEdit = reactive({
      personal: {},
      organization: {},
      additional: {}
    });

    const errors = reactive({
      firstName: false,
      lastName: false
    });

    const isDirty = computed(() => {
      if (!isEditing.value || !originalProfileData) return false;
      return JSON.stringify(profileEdit) !== JSON.stringify({
        personal: originalProfileData.personal,
        organization: originalProfileData.organization,
        additional: originalProfileData.additional
      });
    });

    const fetchProfile = async () => {
      loading.value = true;
      loadError.value = null;
      try {
        const res = await fetch('/api/profile.php');
        if (!res.ok) throw new Error('Failed to load profile');
        const data = await res.json();
        Object.assign(profile, data);
        originalProfileData = JSON.parse(JSON.stringify(data));
      } catch (err) {
        loadError.value = 'We could not load your profile. Please refresh the page or try again later.';
      } finally {
        loading.value = false;
      }
    };

    const enterEditMode = () => {
      profileEdit.personal = JSON.parse(JSON.stringify(profile.personal));
      profileEdit.organization = JSON.parse(JSON.stringify(profile.organization));
      profileEdit.additional = JSON.parse(JSON.stringify(profile.additional));
      isEditing.value = true;
    };

    const cancelEdit = () => {
      if (isDirty.value) {
        showLeaveWarning.value = true;
      } else {
        isEditing.value = false;
      }
    };

    const confirmLeave = () => {
      showLeaveWarning.value = false;
      isEditing.value = false;
    };

    const validate = () => {
      errors.firstName = !profileEdit.personal.firstName;
      errors.lastName = !profileEdit.personal.lastName;
      return !errors.firstName && !errors.lastName;
    };

    const saveProfile = async () => {
      if (!validate()) return;
      
      saving.value = true;
      try {
        const res = await fetch('/api/profile.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(profileEdit)
        });
        
        const result = await res.json();
        if (!res.ok) throw new Error(result.error || 'Failed to save');
        
        Object.assign(profile, result.data);
        originalProfileData = JSON.parse(JSON.stringify(result.data));
        isEditing.value = false;
        alert('Profile saved successfully!');
      } catch (err) {
        alert('Error saving profile: ' + err.message);
      } finally {
        saving.value = false;
      }
    };

    // Global beforeunload guard
    window.addEventListener('beforeunload', (e) => {
      if (isDirty.value) {
        e.preventDefault();
        e.returnValue = '';
      }
    });

    onMounted(fetchProfile);

    return {
      loading, saving, loadError, isEditing, profile, profileEdit, errors,
      enterEditMode, cancelEdit, saveProfile, fetchProfile, isDirty, showLeaveWarning, confirmLeave
    };
  }
}).mount('#profileApp');
</script>

<?php
include __DIR__ . '/../../includes/portal-shell-close.php';
include __DIR__ . '/../../includes/footer.php';
?>
