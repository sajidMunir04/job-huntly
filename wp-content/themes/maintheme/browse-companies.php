
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stylesheets/browse-companies.css">
</head>


<?php 

    // Template Name: browse-companies
    get_header();

?>
<body>

    <div class="job-lists-container">
        <div class="company-card">
            <div class="company-card-logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-icons/facebook.png"/>
            </div>
            <div class="company-card-content">
                <h1 class="company-name">Facebook</h1>
                <p>Connecting people worldwide</p>
                <div class="company-jobs-container">
                <?php

                        $queryString = $_SERVER['QUERY_STRING'];

                        // Query for the custom post type with taxonomy filter
                        $query = new WP_Query(array(
                            'post_type' => 'jobs', // Replace with your custom post type name
                            'meta_query' => array(
                                array(
                                    'key'     => 'company_name', // ACF field name
                                    'value'   => 'Facebook', // The value to match
                                    'compare' => '=', // Comparison operator
                                ),
                            ),
                        ));

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                // Display the custom fields using ACF
                                $job_details = get_field('salary_range');
                                ?>
                                <div class="company-card-job">
                                    <div class="company-card-job-header">
                                        <h2 class="company-card-title"><?php echo get_field('job_title')?></h2>
                                        <a class="company-card-button" href="<?php echo get_permalink()?>">View Job</a>
                                    </div>
                                    <div class="company-card-job-content">
                                        <p class="company-card-location"><?php echo get_field('job_location'); ?></p>
                                        <p class="company-card-salary">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
                                        <div class="company-card-tags-container">
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_type'); ?></p>
                                            <p class="company-card-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>    
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
        </div>
        <div class="company-card">
            <div class="company-card-logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-icons/discord.png"/>
            </div>
            <div class="company-card-content">
                <h1 class="company-name">Discord</h1>
                <p>Connecting people worldwide in nightly mode</p>
                <div class="company-jobs-container">
                <?php

                        $queryString = $_SERVER['QUERY_STRING'];

                        // Query for the custom post type with taxonomy filter
                        $query = new WP_Query(array(
                            'post_type' => 'jobs', // Replace with your custom post type name
                            'meta_query' => array(
                                array(
                                    'key'     => 'company_name', // ACF field name
                                    'value'   => 'Discord', // The value to match
                                    'compare' => '=', // Comparison operator
                                ),
                            ),
                        ));

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                // Display the custom fields using ACF
                                $job_details = get_field('salary_range');
                                ?>
                                <div class="company-card-job">
                                    <div class="company-card-job-header">
                                        <h2 class="company-card-title"><?php echo get_field('job_title')?></h2>
                                        <a class="company-card-button" href="<?php echo get_permalink()?>">View Job</a>
                                    </div>
                                    <div class="company-card-job-content">
                                        <p class="company-card-location"><?php echo get_field('job_location'); ?></p>
                                        <p class="company-card-salary">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
                                        <div class="company-card-tags-container">
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_type'); ?></p>
                                            <p class="company-card-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>    
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
        </div>
        <div class="company-card">
            <div class="company-card-logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-icons/google.png"/>
            </div>
            <div class="company-card-content">
                <h1 class="company-name">Google</h1>
                <p>Searching for people worldwide</p>
                <div class="company-jobs-container">
                <?php

                        $queryString = $_SERVER['QUERY_STRING'];

                        // Query for the custom post type with taxonomy filter
                        $query = new WP_Query(array(
                            'post_type' => 'jobs', // Replace with your custom post type name
                            'meta_query' => array(
                                array(
                                    'key'     => 'company_name', // ACF field name
                                    'value'   => 'Google', // The value to match
                                    'compare' => '=', // Comparison operator
                                ),
                            ),
                        ));

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                // Display the custom fields using ACF
                                $job_details = get_field('salary_range');
                                ?>
                                <div class="company-card-job">
                                    <div class="company-card-job-header">
                                        <h2 class="company-card-title"><?php echo get_field('job_title')?></h2>
                                        <a class="company-card-button" href="<?php echo get_permalink()?>">View Job</a>
                                    </div>
                                    <div class="company-card-job-content">
                                        <p class="company-card-location"><?php echo get_field('job_location'); ?></p>
                                        <p class="company-card-salary">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
                                        <div class="company-card-tags-container">
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_type'); ?></p>
                                            <p class="company-card-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>    
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
        </div>
        <div class="company-card">
            <div class="company-card-logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-icons/ibm.png"/>
            </div>
            <div class="company-card-content">
                <h1 class="company-name">IBM</h1>
                <p>Helping People Worldwide</p>
                <div class="company-jobs-container">
                <?php

                        $queryString = $_SERVER['QUERY_STRING'];

                        // Query for the custom post type with taxonomy filter
                        $query = new WP_Query(array(
                            'post_type' => 'jobs', // Replace with your custom post type name
                            'meta_query' => array(
                                array(
                                    'key'     => 'company_name', // ACF field name
                                    'value'   => 'Facebook', // The value to match
                                    'compare' => '=', // Comparison operator
                                ),
                            ),
                        ));

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                // Display the custom fields using ACF
                                $job_details = get_field('salary_range');
                                ?>
                                <div class="company-card-job">
                                    <div class="company-card-job-header">
                                        <h2 class="company-card-title"><?php echo get_field('job_title')?></h2>
                                        <a class="company-card-button" href="<?php echo get_permalink()?>">View Job</a>
                                    </div>
                                    <div class="company-card-job-content">
                                        <p class="company-card-location"><?php echo get_field('job_location'); ?></p>
                                        <p class="company-card-salary">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
                                        <div class="company-card-tags-container">
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_type'); ?></p>
                                            <p class="company-card-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>    
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
        </div>
        <div class="company-card">
            <div class="company-card-logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-icons/microsoft.png"/>
            </div>
            <div class="company-card-content">
                <h1 class="company-name">Microsoft</h1>
                <p>Building Software for people worldwide</p>
                <div class="company-jobs-container">
                <?php

                        $queryString = $_SERVER['QUERY_STRING'];

                        // Query for the custom post type with taxonomy filter
                        $query = new WP_Query(array(
                            'post_type' => 'jobs', // Replace with your custom post type name
                            'meta_query' => array(
                                array(
                                    'key'     => 'company_name', // ACF field name
                                    'value'   => 'Microsoft', // The value to match
                                    'compare' => '=', // Comparison operator
                                ),
                            ),
                        ));

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                // Display the custom fields using ACF
                                $job_details = get_field('salary_range');
                                ?>
                                <div class="company-card-job">
                                    <div class="company-card-job-header">
                                        <h2 class="company-card-title"><?php echo get_field('job_title')?></h2>
                                        <a class="company-card-button" href="<?php echo get_permalink()?>">View Job</a>
                                    </div>
                                    <div class="company-card-job-content">
                                        <p class="company-card-location"><?php echo get_field('job_location'); ?></p>
                                        <p class="company-card-salary">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
                                        <div class="company-card-tags-container">
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_type'); ?></p>
                                            <p class="company-card-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>    
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                        else:
                            echo "<p>No Jobs Found</p>";
                        
                        endif;

                        // Reset Post Data
                        wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
        <div class="company-card">
            <div class="company-card-logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-icons/reddit.png"/>
            </div>
            <div class="company-card-content">
                <h1 class="company-name">Reddit</h1>
                <p>Forums for everyone</p>
                <div class="company-jobs-container">
                <?php

                        $queryString = $_SERVER['QUERY_STRING'];

                        // Query for the custom post type with taxonomy filter
                        $query = new WP_Query(array(
                            'post_type' => 'jobs', // Replace with your custom post type name
                            'meta_query' => array(
                                array(
                                    'key'     => 'company_name', // ACF field name
                                    'value'   => 'Reddit', // The value to match
                                    'compare' => '=', // Comparison operator
                                ),
                            ),
                        ));

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                // Display the custom fields using ACF
                                $job_details = get_field('salary_range');
                                ?>
                                <div class="company-card-job">
                                    <div class="company-card-job-header">
                                        <h2 class="company-card-title"><?php echo get_field('job_title')?></h2>
                                        <a class="company-card-button" href="<?php echo get_permalink()?>">View Job</a>
                                    </div>
                                    <div class="company-card-job-content">
                                        <p class="company-card-location"><?php echo get_field('job_location'); ?></p>
                                        <p class="company-card-salary">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
                                        <div class="company-card-tags-container">
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_type'); ?></p>
                                            <p class="company-card-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>    
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
        </div>
        <div class="company-card">
            <div class="company-card-logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-icons/skype.png"/>
            </div>
            <div class="company-card-content">
                <h1 class="company-name">Facebook</h1>
                <p>Connecting people worldwide</p>
                <div class="company-jobs-container">
                <?php

                        $queryString = $_SERVER['QUERY_STRING'];

                        // Query for the custom post type with taxonomy filter
                        $query = new WP_Query(array(
                            'post_type' => 'jobs', // Replace with your custom post type name
                            'meta_query' => array(
                                array(
                                    'key'     => 'company_name', // ACF field name
                                    'value'   => 'Skype', // The value to match
                                    'compare' => '=', // Comparison operator
                                ),
                            ),
                        ));

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                // Display the custom fields using ACF
                                $job_details = get_field('salary_range');
                                ?>
                                <div class="company-card-job">
                                    <div class="company-card-job-header">
                                        <h2 class="company-card-title"><?php echo get_field('job_title')?></h2>
                                        <a class="company-card-button" href="<?php echo get_permalink()?>">View Job</a>
                                    </div>
                                    <div class="company-card-job-content">
                                        <p class="company-card-location"><?php echo get_field('job_location'); ?></p>
                                        <p class="company-card-salary">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
                                        <div class="company-card-tags-container">
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_type'); ?></p>
                                            <p class="company-card-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>    
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
        </div>
        <div class="company-card">
            <div class="company-card-logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-icons/slack.png"/>
            </div>
            <div class="company-card-content">
                <h1 class="company-name">Slack</h1>
                <p>The chatbox for Teams</p>
                <div class="company-jobs-container">
                <?php

                        $queryString = $_SERVER['QUERY_STRING'];

                        // Query for the custom post type with taxonomy filter
                        $query = new WP_Query(array(
                            'post_type' => 'jobs', // Replace with your custom post type name
                            'meta_query' => array(
                                array(
                                    'key'     => 'company_name', // ACF field name
                                    'value'   => 'Slack', // The value to match
                                    'compare' => '=', // Comparison operator
                                ),
                            ),
                        ));

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                // Display the custom fields using ACF
                                $job_details = get_field('salary_range');
                                ?>
                                <div class="company-card-job">
                                    <div class="company-card-job-header">
                                        <h2 class="company-card-title"><?php echo get_field('job_title')?></h2>
                                        <a class="company-card-button" href="<?php echo get_permalink()?>">View Job</a>
                                    </div>
                                    <div class="company-card-job-content">
                                        <p class="company-card-location"><?php echo get_field('job_location'); ?></p>
                                        <p class="company-card-salary">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
                                        <div class="company-card-tags-container">
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_type'); ?></p>
                                            <p class="company-card-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>    
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
        </div>
        <div class="company-card">
            <div class="company-card-logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-icons/social.png"/>
            </div>
            <div class="company-card-content">
                <h1 class="company-name">Amazon</h1>
                <p>Business for everyone</p>
                <div class="company-jobs-container">
                <?php

                        $queryString = $_SERVER['QUERY_STRING'];

                        // Query for the custom post type with taxonomy filter
                        $query = new WP_Query(array(
                            'post_type' => 'jobs', // Replace with your custom post type name
                            'meta_query' => array(
                                array(
                                    'key'     => 'company_name', // ACF field name
                                    'value'   => 'Amazon', // The value to match
                                    'compare' => '=', // Comparison operator
                                ),
                            ),
                        ));

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                // Display the custom fields using ACF
                                $job_details = get_field('salary_range');
                                ?>
                                <div class="company-card-job">
                                    <div class="company-card-job-header">
                                        <h2 class="company-card-title"><?php echo get_field('job_title')?></h2>
                                        <a class="company-card-button" href="<?php echo get_permalink()?>">View Job</a>
                                    </div>
                                    <div class="company-card-job-content">
                                        <p class="company-card-location"><?php echo get_field('job_location'); ?></p>
                                        <p class="company-card-salary">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
                                        <div class="company-card-tags-container">
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_type'); ?></p>
                                            <p class="company-card-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>    
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
        </div>
        <div class="company-card">
            <div class="company-card-logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-icons/twitter.png"/>
            </div>
            <div class="company-card-content">
                <h1 class="company-name">Twitter</h1>
                <p>Freedom of Speech</p>
                <div class="company-jobs-container">
                <?php

                        $queryString = $_SERVER['QUERY_STRING'];

                        // Query for the custom post type with taxonomy filter
                        $query = new WP_Query(array(
                            'post_type' => 'jobs', // Replace with your custom post type name
                            'meta_query' => array(
                                array(
                                    'key'     => 'company_name', // ACF field name
                                    'value'   => 'Facebook', // The value to match
                                    'compare' => '=', // Comparison operator
                                ),
                            ),
                        ));

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                // Display the custom fields using ACF
                                $job_details = get_field('salary_range');
                                ?>
                                <div class="company-card-job">
                                    <div class="company-card-job-header">
                                        <h2 class="company-card-title"><?php echo get_field('job_title')?></h2>
                                        <a class="company-card-button" href="<?php echo get_permalink()?>">View Job</a>
                                    </div>
                                    <div class="company-card-job-content">
                                        <p class="company-card-location"><?php echo get_field('job_location'); ?></p>
                                        <p class="company-card-salary">$<?php echo $job_details['salary_min'] ?> - $<?php echo $job_details['salary_max']; ?></p>
                                        <div class="company-card-tags-container">
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                            <p class="company-card-tag job-tag-blue"><?php echo get_field('job_type'); ?></p>
                                            <p class="company-card-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>    
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
        </div>
    </div>

</body>