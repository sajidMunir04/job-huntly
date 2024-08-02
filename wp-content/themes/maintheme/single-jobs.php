<head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>



<?php
    
    get_header();

?>

<body>
    <div class="job-detail-card">
    <?php
// Get the current post ID
$current_post_id = get_the_ID();

// Query for the custom post type with the correct permalink
$query = new WP_Query(array(
    'post_type' => 'jobs', // Replace with your custom post type name
    'posts_per_page' => 1, // Number of posts to display
    'p' => $current_post_id // Query by the current post ID
));

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Display the custom fields using ACF
        $job_details = get_field('salary_range');
        ?>
            <div class="job-detail-card-header">
                <img class="job-detail-card-logo" src="<?php echo get_field('company_logo'); ?>" />
            </div>
            <div class="job-detail-card-content">
                <h1 class="job-detail-card-title"><?php echo get_field('job_title'); ?></h1>
                <p class="job-detail-card-location"><?php echo get_field('job_location'); ?></p>
                <p class="job-detail-card-location">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
                <p class="job-detail-card-description"><?php echo get_field('job_description'); ?></p>
                <div class="job-detail-card-tags-container">
                    <p class="featured-job-tag job-tag-blue"><?php echo get_field('company_name'); ?></p>
                    <p class="featured-job-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>
                </div>
            </div>
            <a href="#" class="job-apply-button">Apply Now</a>
        <?php
    endwhile;
endif;

// Reset Post Data
wp_reset_postdata();
?>
    </div>
</body>
