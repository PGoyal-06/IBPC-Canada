<?php
/**
 * IBPC Canada — Member Profile API
 * Handles GET and POST (mocking PATCH) for member profile data.
 */
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

if (!isLoggedIn()) {
    header('Content-Type: application/json');
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

require_once __DIR__ . '/../includes/db.php';

$memberId = $_SESSION['member_id'];

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    try {
        $stmt = $pdo->prepare("SELECT * FROM members WHERE id = ? LIMIT 1");
        $stmt->execute([$memberId]);
        $m = $stmt->fetch();

        if (!$m) {
            http_response_code(404);
            echo json_encode(['error' => 'Member not found']);
            exit;
        }

        $membershipTiers = include __DIR__ . '/../config/membership.php';
        $levelLabel = isset($membershipTiers[$m['membership_type']]) ? $membershipTiers[$m['membership_type']]['label'] : 'Guest';

        $data = [
            'id' => $m['id'],
            'memberNumber' => 'IBPC-' . str_pad($m['id'], 5, '0', STR_PAD_LEFT),
            'membership' => [
                'status' => $m['membership_status'],
                'level' => $levelLabel,
                'memberSince' => $m['approved_at'] ? date('F j, Y', strtotime($m['approved_at'])) : null,
                'renewalDueOn' => $m['renewal_date'] ? date('F j, Y', strtotime($m['renewal_date'])) : null,
            ],
            'personal' => [
                'prefix' => $m['prefix'] ?? '',
                'firstName' => $m['first_name'] ?? '',
                'lastName' => $m['last_name'] ?? '',
                'email' => $m['email'],
                'cellPhone' => $m['cell_phone'] ?? '',
                'businessPhone' => $m['business_phone'] ?? '',
                'linkedInUrl' => $m['linkedin_url'] ?? '',
            ],
            'organization' => [
                'organizationName' => $m['organization_name'] ?? '',
                'position' => $m['position'] ?? '',
                'industry' => $m['industry'] ?? '',
                'website' => $m['website'] ?? '',
                'address' => $m['address'] ?? '',
            ],
            'additional' => [
                'chapter' => $m['chapter'] ?? 'Ontario',
                'howDidYouHearAboutUs' => $m['how_heard'] ?? '',
                'referredBy' => $m['referred_by'] ?? '',
            ]
        ];

        header('Content-Type: application/json');
        echo json_encode($data);
    } catch (PDOException $e) {
        error_log("Profile GET Error: " . $e->getMessage());
        http_response_code(500);
        echo json_encode(['error' => 'Server error']);
    }
    exit;
}

if ($method === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    if (!$input) {
        $input = $_POST;
    }

    // Basic Validation
    if (empty($input['personal']['firstName']) || empty($input['personal']['lastName'])) {
        header('Content-Type: application/json');
        http_response_code(400);
        echo json_encode(['error' => 'First name and Last name are required.']);
        exit;
    }

    try {
        $stmt = $pdo->prepare("UPDATE members SET 
            prefix = ?, 
            first_name = ?, 
            last_name = ?, 
            name = ?,
            cell_phone = ?, 
            business_phone = ?, 
            linkedin_url = ?, 
            organization_name = ?, 
            position = ?, 
            industry = ?, 
            website = ?, 
            address = ?, 
            chapter = ?, 
            how_heard = ?, 
            referred_by = ?,
            updated_at = NOW()
            WHERE id = ?");
        
        $fullName = trim($input['personal']['firstName'] . ' ' . $input['personal']['lastName']);
        
        $stmt->execute([
            $input['personal']['prefix'] ?? null,
            $input['personal']['firstName'],
            $input['personal']['lastName'],
            $fullName,
            $input['personal']['cellPhone'] ?? null,
            $input['personal']['businessPhone'] ?? null,
            $input['personal']['linkedInUrl'] ?? null,
            $input['organization']['organizationName'] ?? null,
            $input['organization']['position'] ?? null,
            $input['organization']['industry'] ?? null,
            $input['organization']['website'] ?? null,
            $input['organization']['address'] ?? null,
            $input['additional']['chapter'] ?? null,
            $input['additional']['howDidYouHearAboutUs'] ?? null,
            $input['additional']['referredBy'] ?? null,
            $memberId
        ]);

        // Update main session name too
        $_SESSION['member_name'] = $fullName;

        // Fetch fresh data to return
        $stmt = $pdo->prepare("SELECT * FROM members WHERE id = ? LIMIT 1");
        $stmt->execute([$memberId]);
        $m = $stmt->fetch();

        $membershipTiers = include __DIR__ . '/../config/membership.php';
        $levelLabel = isset($membershipTiers[$m['membership_type']]) ? $membershipTiers[$m['membership_type']]['label'] : 'Guest';

        $data = [
            'id' => $m['id'],
            'memberNumber' => 'IBPC-' . str_pad($m['id'], 5, '0', STR_PAD_LEFT),
            'membership' => [
                'status' => $m['membership_status'],
                'level' => $levelLabel,
                'memberSince' => $m['approved_at'] ? date('F j, Y', strtotime($m['approved_at'])) : null,
                'renewalDueOn' => $m['renewal_date'] ? date('F j, Y', strtotime($m['renewal_date'])) : null,
            ],
            'personal' => [
                'prefix' => $m['prefix'] ?? '',
                'firstName' => $m['first_name'] ?? '',
                'lastName' => $m['last_name'] ?? '',
                'email' => $m['email'],
                'cellPhone' => $m['cell_phone'] ?? '',
                'businessPhone' => $m['business_phone'] ?? '',
                'linkedInUrl' => $m['linkedin_url'] ?? '',
            ],
            'organization' => [
                'organizationName' => $m['organization_name'] ?? '',
                'position' => $m['position'] ?? '',
                'industry' => $m['industry'] ?? '',
                'website' => $m['website'] ?? '',
                'address' => $m['address'] ?? '',
            ],
            'additional' => [
                'chapter' => $m['chapter'] ?? 'Ontario',
                'howDidYouHearAboutUs' => $m['how_heard'] ?? '',
                'referredBy' => $m['referred_by'] ?? '',
            ]
        ];

        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'message' => 'Profile updated successfully', 'data' => $data]);
    } catch (PDOException $e) {
        error_log("Profile POST Error: " . $e->getMessage());
        http_response_code(500);
        echo json_encode(['error' => 'Failed to update profile']);
    }
    exit;
}

http_response_code(405);
echo json_encode(['error' => 'Method not allowed']);
