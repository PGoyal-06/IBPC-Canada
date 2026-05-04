<?php
/**
 * IBPC Canada — Member Event Registrations API
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

// Mock Registrations Data
$registrations = [
    [
        'id' => 'reg-101',
        'eventId' => 'evt-1',
        'eventTitle' => 'Canada-India Tech Summit 2026',
        'eventUrl' => '/event-detail?id=1',
        'eventStart' => '2026-10-15T09:00:00Z',
        'eventEnd' => '2026-10-15T17:00:00Z',
        'location' => 'Metro Toronto Convention Centre',
        'ticketType' => 'Member Ticket',
        'ticketPrice' => 25.00,
        'currency' => 'CAD',
        'status' => 'registered',
        'isPast' => false
    ],
    [
        'id' => 'reg-102',
        'eventId' => 'evt-2',
        'eventTitle' => 'Healthcare Investment Forum',
        'eventUrl' => '/event-detail?id=2',
        'eventStart' => '2026-11-05T10:00:00Z',
        'eventEnd' => '2026-11-05T12:00:00Z',
        'location' => 'Online (Zoom)',
        'ticketType' => 'General Admission',
        'ticketPrice' => 0.00,
        'currency' => 'CAD',
        'status' => 'pending',
        'isPast' => false
    ],
    [
        'id' => 'reg-103',
        'eventId' => 'evt-50',
        'eventTitle' => 'Annual General Meeting 2025',
        'eventUrl' => null,
        'eventStart' => '2025-05-10T14:00:00Z',
        'eventEnd' => '2025-05-10T16:00:00Z',
        'location' => 'IBPC Canada Head Office',
        'ticketType' => 'Member Ticket',
        'ticketPrice' => 0.00,
        'currency' => 'CAD',
        'status' => 'completed',
        'isPast' => true
    ],
    [
        'id' => 'reg-104',
        'eventId' => 'evt-48',
        'eventTitle' => 'Diwali Gala Dinner 2024',
        'eventUrl' => null,
        'eventStart' => '2024-11-12T18:30:00Z',
        'eventEnd' => '2024-11-12T23:00:00Z',
        'location' => 'Fairmont Royal York, Toronto',
        'ticketType' => 'Member + Guest',
        'ticketPrice' => 150.00,
        'currency' => 'CAD',
        'status' => 'completed',
        'isPast' => true
    ],
    [
        'id' => 'reg-105',
        'eventId' => 'evt-3',
        'eventTitle' => 'Networking Lunch: Real Estate Insights',
        'eventUrl' => '/event-detail?id=3',
        'eventStart' => '2026-12-05T12:00:00Z',
        'eventEnd' => '2026-12-05T14:00:00Z',
        'location' => 'Sheraton Centre Toronto',
        'ticketType' => 'Member Ticket',
        'ticketPrice' => 35.00,
        'currency' => 'CAD',
        'status' => 'waitlisted',
        'isPast' => false
    ]
];

header('Content-Type: application/json');
echo json_encode($registrations);
