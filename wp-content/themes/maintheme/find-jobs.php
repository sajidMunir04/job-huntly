
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stylesheets/find-jobs.css">
</head>


<?php 

    // Template Name: find-jobs
    get_header();

?>
<body>
    <div id="searchform" class="find-jobs-search-section">
        <input id='searchquery' name="searchquery" class="jobs-search-input" type="text" placeholder="Enter search term"/>
        <select class="job-field-select">
            <option value="1" class="job-field-option">All</option>
            <option value="2">Design</option>
            <option value="3">Sales</option>
            <option value="4">Marketing</option>
            <option value="5">Finance</option>
            <option value="6">Technology</option>
            <option value="7">Engineering</option>
            <option value="8">Business</option>
            <option value="9">Human Resources</option>
        </select>
        <button onclick="sendData()" class="job-search-button">Search</button>
    </div>
    <script>
        function sendData() {
    const inputValue = document.getElementById('searchquery').value;

    fetch('process-search.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ input: inputValue })
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
    })
    .catch((error) => {
        console.error('Error:', error);
    });
}
    </script>
    <div class="job-lists-container" id="result">

<?php

$queryString = $_SERVER['QUERY_STRING'];

// Query for the custom post type with taxonomy filter
$query = new WP_Query(array(
    'post_type' => 'jobs', // Replace with your custom post type name
    'tax_query' => array(
        array(
            'taxonomy' => 'department', // Replace with your taxonomy name
            'field'    => 'slug', // or 'term_id'
            'terms'    => $queryString, // Replace with the actual term slug or term ID
        ),
    ),
));

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Display the custom fields using ACF
        $job_details = get_field('salary_range');
        ?>
        <div class="job-list-card" onclick="window.location.href='<?php echo get_permalink()?>'">
            <div class="job-list-card-header">
                <img class="job-list-card-logo" src="<?php echo get_field('company_logo') ?>"/>
            </div>
            <div class="job-list-card-content">
                <h1 class="job-list-card-title"><?php echo get_field('job_title')?></h1>
                <p class="job-list-card-location"><?php echo get_field('job_location'); ?></p>
            </div>
            <p class="job-list-card-location">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
            <div class="job-list-card-tags-container">
                    <p class="featured-job-tag job-tag-blue"><?php echo get_field('company_name'); ?></p>
                    <p class="featured-job-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>
            </div>
        </div>
        <?php
    endwhile;
endif;

// Reset Post Data
wp_reset_postdata();
?>

    </div>

</body>

</body>