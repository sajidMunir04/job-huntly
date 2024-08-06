
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stylesheets/find-jobs.css">
</head>


<?php 

    // Template Name: find-jobs
    get_header();

?>
<body>
    <form method="get" id="searchform" class="find-jobs-search-section">
        <input name="input" class="jobs-search-input" type="text" placeholder="Enter search term"/>
        <select name="category" class="job-field-select">
            <option value="1">All</option>
            <option value="2">Design</option>
            <option value="3">Sales</option>
            <option value="4">Marketing</option>
            <option value="5">Finance</option>
            <option value="6">Technology</option>
            <option value="7">Engineering</option>
            <option value="8">Business</option>
            <option value="9">Human Resources</option>
        </select>
        <button type="submit" class="job-search-button">Search</button>
    </form>

    <script>
        document.getElementById('searchform').addEventListener('submit', async function(event) {
            event.preventDefault(); // Prevent the default form submission
            
            const formData = new FormData(this); // Create a FormData object from the form
            const form = event.target;
            const formData = new FormData(form);
            const params = new URLSearchParams(formData).toString();
            const newUrl = `${window.location.pathname}?${params}`;
        });
    </script>

    <div class="job-lists-container" id="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $keyword = isset($_GET['input']) ? htmlspecialchars($_GET['input']) : '';

            $category = isset($_GET['category']) ? intval($_GET['category']) : 1; // Default to "All" if not set

            // Adjust the WP_Query based on the category if needed
            $args = array(
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
            );

            if ($category !== 1) { // If category is not "All"
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'job_category',
                        'field'    => 'term_id',
                        'terms'    => $category,
                    )
                );
            }

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
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
                                <p class="featured-job-tag job-tag-blue"><?php echo get_field('job_requirement'); ?></p>
                                <p class="featured-job-tag job-tag-red"><?php echo get_field('job_seniority'); ?></p>
                            </div>
                        </div>
                    <?php
                endwhile;
            else :
                echo '<p>No jobs found.</p>';
            endif;

            wp_reset_postdata();
        }
        ?>
    </div>
</body>