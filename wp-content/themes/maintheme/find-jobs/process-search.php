<?php
if (true) {
    // Get the value of the input field
    $keyword = $_POST['searchquery'];

    // Sanitize the input to prevent XSS and other security issues
    $keyword = htmlspecialchars($keyword);

    // Now you can use the keyword in your query or other logic
    // For example, here is the modified query using the keyword
    $query = new WP_Query(array(
        'post_type' => 'jobs',
        'meta_query' => array(
            'relation' => 'OR',
            array(
                'key'     => 'job_title',
                'value'   => $keyword,
                'compare' => 'LIKE'
            ),
            array(
                'key'     => 'job_type',
                'value'   => $keyword,
                'compare' => 'LIKE'
            ),
            array(
                'key'     => 'job_requirement',
                'value'   => $keyword,
                'compare' => 'LIKE'
            )
        )
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
                        <p class="job-listing-info-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                        <p class="job-listing-info-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>
                        <p class="job-listing-info-tag job-tag-red"><?php echo get_field('job_type'); ?></p>
                    </div>
                </div>
                <a href="#" class="job-apply-button">Apply Now</a>
            <?php
        endwhile;
    endif;

    // Reset Post Data
    wp_reset_postdata();
}
?>