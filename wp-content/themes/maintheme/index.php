<?php
get_header();
?>


<main>
    <div class="main-banner">
        <div class="main-banner-content">
            <h1 class="main-banner-heading">Discover more than <span class="heading-blue">5000+ Jobs</span></h1>
            <p class="main-banner-paragraph">Great platform for the job seeker that searching for new
                career heights and passionate about startups.</p>
        </div>
        <div class="main-banner-picture">
            <img class="banner-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-image.png">
        </div>
        <div class="pattern-container">
        <img class="main-pattern" src="<?php echo get_template_directory_uri(); ?>/assets/images/pattern.png">
        </div>
    </div>
    <div class="clients-section">
        <h2 class="clients-section-heading">Companies that we helped grow</h2>
        <div class="clients-section-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/vodafone-logo.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/intel.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/tesla.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/amd-logo.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/talkit.png">
        </div>
    </div>
    <div class="job-categories-section">
        <div class="job-categories-section-header">
            <h3 class="job-categories-section-heading">Explore By <span class="blue-heading">Category</span></h3>
            <a href="<?php echo home_url(); ?>/find-jobs" class="job-categories-external-link">Show all jobs <span class="right-arrow">&#x279C;</span></a>
        </div>
        <div class="job-categories-section-content">
            <div class="job-category" onclick="window.location.href = '<?php echo site_url() ?>/departments?design'">
                <div class="job-category-icon-container">
                    <img class="job-category-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/design-category-icon.svg">
                </div>
                <div class="job-category-content">
                <h4 class="job-category-heading">Design</h4>
                <div class="job-category-info">
                    <p class="job-category-numbers">235 Jobs available</p>
                    <p class="job-category-arrow-link"></p>
                </div>
                </div>
            </div>
            <div class="job-category" onclick="window.location.href = '<?php echo site_url() ?>/departments?sales'">
                <div class="job-category-icon-container">
                    <img class="job-category-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sales-icon.svg">
                </div>
                <div class="job-category-content">
                <h4 class="job-category-heading">Sales</h4>
                <div class="job-category-info">
                    <p class="job-category-numbers">235 Jobs available</p>
                    <p class="job-category-arrow-link"></p>
                </div>
                </div>
            </div>
            <div class="job-category" onclick="window.location.href = '<?php echo site_url() ?>/departments?marketing'">
                <div class="job-category-icon-container">
                    <img class="job-category-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/marketing-icon.svg">
                </div>
                <div class="job-category-content">
                <h4 class="job-category-heading">Marketing</h4>
                <div class="job-category-info">
                    <p class="job-category-numbers">235 Jobs available</p>
                    <p class="job-category-arrow-link"></p>
                </div>
                </div>
            </div>
            <div class="job-category" onclick="window.location.href = '<?php echo site_url() ?>/departments?finance'">
                <div class="job-category-icon-container">
                    <img class="job-category-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/finance-icon.svg">
                </div>
                <div class="job-category-content">
                <h4 class="job-category-heading">Finance</h4>
                <div class="job-category-info">
                    <p class="job-category-numbers">235 Jobs available</p>
                    <p class="job-category-arrow-link"></p>
                </div>
                </div>
            </div>
            <div class="job-category" onclick="window.location.href = '<?php echo site_url() ?>/departments?technology'">
                <div class="job-category-icon-container">
                    <img class="job-category-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/technology-icon.svg">
                </div>
                <div class="job-category-content">
                <h4 class="job-category-heading">Technology</h4>
                <div class="job-category-info">
                    <p class="job-category-numbers">235 Jobs available</p>
                    <p class="job-category-arrow-link"></p>
                </div>
                </div>
            </div>
            <div class="job-category" onclick="window.location.href = '<?php echo site_url() ?>/departments?engineering'">
                <div class="job-category-icon-container">
                    <img class="job-category-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/engineering-icon.svg">
                </div>
                <div class="job-category-content">
                <h4 class="job-category-heading">Engineering</h4>
                <div class="job-category-info">
                    <p class="job-category-numbers">235 Jobs available</p>
                    <p class="job-category-arrow-link"></p>
                </div>
                </div>
            </div>
            <div class="job-category" onclick="window.location.href = '<?php echo site_url() ?>/departments?business'">
                <div class="job-category-icon-container">
                    <img class="job-category-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/business-icon.svg">
                </div>
                <div class="job-category-content">
                <h4 class="job-category-heading">Business</h4>
                <div class="job-category-info">
                    <p class="job-category-numbers">235 Jobs available</p>
                    <p class="job-category-arrow-link"></p>
                </div>
                </div>
            </div>
            <div class="job-category" onclick="window.location.href = '<?php echo site_url() ?>/departments?humanresources'">
                <div class="job-category-icon-container">
                    <img class="job-category-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/hr-icon.svg">
                </div>
                <div class="job-category-content">
                <h4 class="job-category-heading">Human Resources</h4>
                <div class="job-category-info">
                    <p class="job-category-numbers">235 Jobs available</p>
                    <p class="job-category-arrow-link"></p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-jobs-section">
        <div class="featured-jobs-section-header">
            <h5 class="featured-jobs-section-heading">Featured <span class="blue-heading">Jobs</span></h5>
            <a href="<?php echo home_url(); ?>/find-jobs" class="featured-jobs-section-external-link">Show all jobs <span class="right-arrow">&#x279C;</span></a>
        </div>
        <div class="featured-jobs-section-content">
            <?php
            // Query for the custom post type
            $query = new WP_Query(array(
                'post_type' => 'jobs', // Replace with your custom post type name
                'posts_per_page' => 8, // Number of posts to display
            ));

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    // Display the custom fields using ACF
                    ?>
                    <div class="featured-job-card" onclick="window.location.href='<?php echo get_permalink()?>'">
                        <div class="featured-job-card-header">
                            <img class="featured-job-card-logo" src="<?php echo get_field('company_logo') ?>"/>
                        </div>
                        <div class="featured-job-card-content">
                            <h6 class="featured-job-title"><?php echo get_field('job_title')?></h6>
                            <p class="featured-job-location"><?php echo get_field('job_location'); ?></p>
                            <p class="featured-job-description"><?php echo get_field('job_description'); ?></p>
                            <div class="featured-job-tags-container">
                                <p class="job-info-tag job-tag-blue"><?php echo get_field('job_type'); ?></p>
                                <p class="job-info-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;

            // Reset Post Data
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="latest-jobs-section">
        <div class="latest-jobs-section-header">
            <h6 class="latest-jobs-section-heading">Latest <span class="blue-heading">Jobs</span></h6>
            <a href="<?php echo home_url(); ?>/find-jobs" class="latest-jobs-section-external-link">Show All Jobs <span class="right-arrow">&#x279C;</span></a>
        </div>
        <div class="latest-jobs-section-content">
        <?php
            // Query for the custom post type
            $query = new WP_Query(array(
                'post_type' => 'jobs', // Replace with your custom post type name
                'posts_per_page' => 8, // Number of posts to display
            ));

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    // Display the custom fields using ACF
                    $job_url = get_field('job', get_the_ID());
                    ?>
                    <div class="latest-job-card" onclick="window.location.href='<?php echo get_permalink()?>'" >
                        <div class="latest-job-card-logo-container">
                            <img class="latest-job-card-logo" src="<?php echo get_field('company_logo') ?>"/>
                        </div>
                        <div class="latest-job-card-content">
                            <h6 class="latest-job-title"><?php echo get_field('job_title')?></h6>
                            <p class="latest-job-location"><?php echo get_field('job_location'); ?></p>
                            <div class="latest-job-tags-container">
                                <p class="job-info-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                <p class="job-info-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;

            // Reset Post Data
            wp_reset_postdata();
            ?>
        </div>
    </div>

</main>

    <?php
        get_footer();
    ?>
</body>