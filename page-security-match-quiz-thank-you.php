<?php
/*
Template Name: Security Match Thank You
*/

$companies = [
    'vivint' => [
        'name'         => 'Vivint',
        'logo'         => 'https://secureliving.com/wp-content/uploads/2026/02/vivint-logo.png',
        'score'        => 5,
        'rating_label' => 'Excellent',
        'stars'        => 5,
        'features'     => [
            '4k Outside Cameras',
            'Best smart home',
            'No contract options',
            'Professionally installed',
            '24/7 professional monitoring',
        ],
        'visit_url'    => 'http://t.vivint.com/?c=1829&lp=4',
        'phone'        => '833-606-2573',
        'banner'       => 'Best Outside Cameras',
        'disclaimer'   => null,
    ],
    'adt' => [
        'name'         => 'ADT',
        'logo'         => 'https://secureliving.com/wp-content/uploads/2026/02/adt-logo.png',
        'score'        => 5,
        'rating_label' => 'Excellent',
        'stars'        => 5,
        'features'     => [
            '145+ years of experience',
            '24/7 professional monitoring',
            'Smart home compatible',
            'Affordable camera systems',
        ],
        'visit_url'    => 'https://s24alarms.com/YHSE',
        'phone'        => '833-224-7221',
        'banner'       => 'Great for New Home Owners',
        'disclaimer'   => '*Req. system purchase with min. of $349 for DIY or $599 for pro install & pro monitoring plan starting at $24.99/mo. w/ 1 mo. min. w/DIY or $34.99 for 36 mo. w/pro install (early cancel fees). Not available for online orders. Terms & pricing below.',
    ],
    'simplisafe' => [
        'name'         => 'SimpliSafe',
        'logo'         => 'https://secureliving.com/wp-content/uploads/2026/02/simplisafe-logo.png',
        'score'        => 3.5,
        'rating_label' => 'Fair',
        'stars'        => 3.5,
        'features'     => [
            'No contracts required',
            'Easy DIY installation',
            'AI auto detect cameras',
        ],
        'visit_url'    => 'https://simplisafe.com/',
        'phone'        => '',
        'banner'       => '',
        'disclaimer'   => null,
    ],
    'brinks' => [
        'name'         => 'Brinks Home',
        'logo'         => 'https://secureliving.com/wp-content/uploads/2026/02/brinks-logo.png',
        'score'        => 4,
        'rating_label' => 'Good',
        'stars'        => 4,
        'features'     => [
            '24/7 professional monitoring',
            'Inside & Outside Cameras',
            'Real-time alerts',
        ],
        'visit_url'    => 'https://brinkshome.com/',
        'phone'        => '',
        'banner'       => '',
        'disclaimer'   => null,
    ],
    'cove' => [
        'name'         => 'Cove',
        'logo'         => 'http://secureliving.com/wp-content/uploads/2026/02/cove-logo.png',
        'score'        => 4.5,
        'rating_label' => 'Very Good',
        'stars'        => 4.5,
        'features'     => [
            'Most Affordable Equipment',
            'No contracts required',
            'Easy DIY installation',
            'Low monthly price',
        ],
        'visit_url'    => 'https://www.covetrack.com/2714DHQ/9ZBW6W/',
        'phone'        => '',
        'banner'       => 'Best DIY Option',
        'disclaimer'   => null,
    ],
];


// Get quiz answers from query params (passed by form-handler.php)
$cameras    = sanitize_text_field($_GET['cameras'] ?? '');
$monitoring = sanitize_text_field($_GET['monitoring'] ?? '');


// Determine ranking order based on quiz answers
if ($cameras === 'Yes') {
    $ranking_order = ['vivint', 'adt', 'cove', 'brinks', 'simplisafe'];
} else {
    $ranking_order = ['adt', 'vivint', 'cove', 'brinks', 'simplisafe'];
}

// Build sorted company list
$sorted_companies = [];
foreach ($ranking_order as $slug) {
    if (isset($companies[$slug])) {
        $sorted_companies[$slug] = $companies[$slug];
    }
}
?>

<?php get_template_part('partials/quiz-header'); ?>

<main class="quiz-page">
    <div class="call-specialist__overlay"></div>
    <div class="quiz-wrap-bg">
        <div class="quiz-wrap">
            <div class="quiz-thankyou">
                <div class="quiz-thankyou__inner">
                    <h1>Thank You! </h1>
                    <p>Below are our recommendations based on your answers. Security Specialists will be reaching out soon with more details.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Company Profile Cards -->
        <div class="company-profiles">
            <?php
            $rank = 1;
            foreach ($sorted_companies as $slug => $company) :
                if ($rank === 1) {
                    $company['banner'] = 'Our Top Recommendation for You';
                }
                include get_template_directory() . '/partials/company-card.php';
                $rank++;
            endforeach;
            ?>

            <div class="container">
                <i style="font-size: var(--text-xs);">** ADT Disclaimer Up to 15 sensors free for pre-wired homes or 6 sensors for non-wired homes. No substitutions allowed. Labor charges may apply. $99.00 customer installation charge. Basic plan requires phone line. 36-Month Monitoring Agreement required $45.99 per month ($1,655.64), 24-Month Monitoring Agreement required at $45.99 ($1,103.76) for California, including Quality Service Plan (QSP). Form of payment must be by credit card or electronic charge to your checking or savings account. Offer applies to homeowners only. Local permit fees may be required. Satisfactory credit history required. Certain restrictions apply. Offer valid for new Secure24 ADT Authorized Dealer customers only and not on purchases from ADT LLC. Other rate plans available. Cannot be combined with any other offer.</i>
            </div>
        </div>



    </div>
</main>

<?php get_template_part('partials/footer'); ?>