<?php
/**
 * IBPC Canada — Membership Configuration
 */

return [
    'individual' => [
        'id' => 'individual',
        'label' => 'Individual Membership',
        'amount_cents' => 25000,
        'currency' => 'cad',
        'description' => 'Standard annual membership for individuals.'
    ],
    'corporate' => [
        'id' => 'corporate',
        'label' => 'Corporate Membership',
        'amount_cents' => 50000,
        'currency' => 'cad',
        'description' => 'Annual membership for businesses and organizations.'
    ],
    'young_professional' => [
        'id' => 'young_professional',
        'label' => 'Young Professional',
        'amount_cents' => 0,
        'currency' => 'cad',
        'description' => 'Discounted rate for professionals under 35.'
    ],
    'women_entrepreneur' => [
        'id' => 'women_entrepreneur',
        'label' => 'Women Entrepreneur',
        'amount_cents' => 15000,
        'currency' => 'cad',
        'description' => 'Special rate supporting women-led businesses.'
    ],
];
