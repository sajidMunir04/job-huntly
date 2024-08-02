
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>


<?php 

    // Template Name: browse-companies
    get_header();

?>
<body>
    <h1>This is browse companies page</h1>
    <div class="job-lists-container">

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