<?php
$pageTitle = 'My Event Registrations — IBPC Canada';
$pageDescription = 'View your upcoming and past IBPC Canada event registrations.';
$isHomepage = false;

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../includes/functions.php';

requireLogin();

include __DIR__ . '/../../includes/header.php';

$memberName   = $_SESSION['member_name']  ?? 'Member';
$memberStatus = $_SESSION['member_status'] ?? 'active';

include __DIR__ . '/../../includes/portal-shell-open.php';
?>

<div id="eventsApp" v-cloak>
  <div class="portal-header-actions" style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
      <h2 class="portal-heading">My Event Registrations</h2>
      <p class="portal-subheading" style="margin-bottom: 0;">View your upcoming and past IBPC Canada event registrations.</p>
    </div>
    <div>
      <a href="/upcoming-events" class="btn-1" style="padding: 8px 20px;">Browse Events</a>
    </div>
  </div>

  <!-- Filters -->
  <div class="portal-filters-bar" style="background: #fff; padding: 16px 20px; border-radius: 8px; border: 1px solid var(--color-card-border); margin-bottom: 24px; display: flex; align-items: center;">
    <div style="display: flex; gap: 12px; align-items: center;">
      <div class="filter-group" style="display: flex; gap: 8px;">
        <button 
          v-for="f in ['All', 'Upcoming', 'Past']" 
          :key="f"
          @click="filter = f"
          class="btn-filter"
          :class="{ active: filter === f }"
        >
          {{ f }}
        </button>
      </div>
    </div>
  </div>

  <!-- Content State: Coming Soon -->
  <div style="padding: 20px 0;">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>Upcoming and past IBPC Canada event registrations will be available once events are scheduled.</p>
    </div>
  </div>
</div>

<style>
.portal-table { width: 100%; border-collapse: collapse; }
.portal-table th { background: #f9f9f9; padding: 14px 20px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; color: #888; text-align: left; border-bottom: 1px solid #eee; }
.portal-table td { padding: 18px 20px; border-bottom: 1px solid #f5f5f5; vertical-align: top; }
.portal-table tr:last-child td { border-bottom: none; }
.portal-table tr.is-past td { opacity: 0.7; }
.portal-table tr:hover td { background: #fcfcfc; }

.portal-card.is-past { opacity: 0.8; background: #fafafa; }

.btn-filter { 
  background: transparent; border: 1px solid #ddd; border-radius: 4px; 
  padding: 6px 14px; font-size: 13px; font-weight: 600; color: #666; 
  cursor: pointer; transition: all 0.2s; 
}
.btn-filter:hover { border-color: #bbb; background: #f5f5f5; }
.btn-filter.active { background: var(--color-primary); border-color: var(--color-primary); color: #fff; }

.portal-card { background: var(--color-white); border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); }
.portal-card__body { padding: 20px; }

[v-cloak] { display: none; }
</style>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
const { createApp, ref, computed, onMounted } = Vue;

createApp({
  setup() {
    const loading = ref(true);
    const loadError = ref(null);
    const registrations = ref([]);
    const filter = ref('All');
    const search = ref('');

    const fetchRegistrations = async () => {
      loading.value = true;
      loadError.value = null;
      try {
        const res = await fetch('/api/my-events.php');
        if (!res.ok) throw new Error('Failed to load registrations');
        const data = await res.json();
        // Default sort: Upcoming soonest first, then past most recent first
        registrations.value = data.sort((a, b) => {
          if (a.isPast !== b.isPast) return a.isPast ? 1 : -1;
          const dateA = new Date(a.eventStart);
          const dateB = new Date(b.eventStart);
          return a.isPast ? dateB - dateA : dateA - dateB;
        });
      } catch (err) {
        loadError.value = 'We could not load your event registrations. Please try again later.';
      } finally {
        loading.value = false;
      }
    };

    const filteredRegistrations = computed(() => {
      return registrations.value.filter(reg => {
        const matchesFilter = 
          filter.value === 'All' || 
          (filter.value === 'Upcoming' && !reg.isPast) || 
          (filter.value === 'Past' && reg.isPast);
        
        const matchesSearch = reg.eventTitle.toLowerCase().includes(search.value.toLowerCase());
        
        return matchesFilter && matchesSearch;
      });
    });

    const formatDate = (dateStr) => {
      const date = new Date(dateStr);
      return new Intl.DateTimeFormat('en-CA', {
        month: 'long',
        day: 'numeric',
        year: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
        hour12: true,
        timeZoneName: 'short'
      }).format(date);
    };

    const formatPrice = (price, currency) => {
      if (price === 0) return 'Free';
      return new Intl.NumberFormat('en-CA', {
        style: 'currency',
        currency: currency || 'CAD'
      }).format(price);
    };

    onMounted(fetchRegistrations);

    return {
      loading, loadError, filter, search, filteredRegistrations,
      formatDate, formatPrice, fetchRegistrations
    };
  }
}).mount('#eventsApp');
</script>

<?php
include __DIR__ . '/../../includes/portal-shell-close.php';
include __DIR__ . '/../../includes/footer.php';
?>
