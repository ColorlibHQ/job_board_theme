<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package job_board
 */

get_header();
$count = 0;
if( have_posts() ) {
    while( have_posts() ) : the_post();
    $comapny_name = ! empty( job_board_meta( 'comapny_name') ) ? job_board_meta( 'comapny_name') : '';
    $company_phone = ! empty( job_board_meta( 'company_phone') ) ? job_board_meta( 'company_phone') : '';
    $company_email = ! empty( job_board_meta( 'company_email') ) ? job_board_meta( 'company_email') : '';
    $job_location = ! empty( job_board_meta( 'job_location') ) ? job_board_meta( 'job_location') : '';
    $job_type = ! empty( job_board_meta( 'job_type') ) ? job_board_meta( 'job_type') : '';
    $job_deadline = ! empty( job_board_meta( 'job_deadline') ) ? job_board_meta( 'job_deadline') : '';
    $job_vacancy = ! empty( job_board_meta( 'job_vacancy') ) ? job_board_meta( 'job_vacancy') : '';
    $job_salary = ! empty( job_board_meta( 'job_salary') ) ? job_board_meta( 'job_salary') : '';
    $job_apply_form_shortcode = ! empty( job_board_meta( 'job_apply_form_shortcode') ) ? job_board_meta( 'job_apply_form_shortcode') : '';
    $author_img = get_avatar( absint( get_the_author_meta( 'ID' ) ), 48 );
    ?>

    <div class="job_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <?php
                                    if ( $author_img ) {
                                        echo '
                                        <div class="thumb">
                                            '.wp_kses_post( $author_img ).'
                                        </div>
                                        ';
                                    }
                                ?>
                                <div class="jobs_conetent">
                                    <h4><?php the_title()?></h4>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> <?php echo $job_location?></p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> <?php echo $job_type == 1 ? 'Part-Time' : 'Full-Time'?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                    <?php the_content()?>
                    </div>
                    <div class="apply_job_form white-bg">
                        <h4>Apply for the job</h4>
                        <?php echo do_shortcode($job_apply_form_shortcode)?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="job_sumary">
                        <div class="summery_header">
                            <h3>Job Summery</h3>
                        </div>
                        <div class="job_content">
                            <ul>
                                <li>Published on: <span><?php echo $job_deadline?></span></li>
                                <li>Vacancy: <span><?php echo $job_vacancy?></span></li>
                                <li>Salary: <span><?php echo $job_salary?></span></li>
                                <li>Location: <span><?php echo $job_location?></span></li>
                                <li>Job Nature: <span> <?php echo $job_type == 1 ? 'Part-Time' : 'Full-Time';?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="share_wrap d-flex">
                        <span>Share at:</span>
                        <?php echo job_board_social_sharing_buttons()?>
                    </div>
                    <div class="job_location_wrap">
                        <div class="job_lok_inner">
                            <?php
                                $args = array(
                                    'width'        => '100%',
                                    'height'       => '250px',
                                    'zoom'         => 14,
                                    'marker'       => true,
                                    // 'marker_icon'  => 'https://url_to_icon.png',
                                    'marker_title' => __('Click me for details', 'job_board'),
                                    'info_window'  => '
                                    <div class="listingo_map_popup">
                                        <h3>'.$comapny_name.'</h3>
                                        <p>'.$job_location.'</p>
                                        <ul>
                                            <li> <i class="fa fa-phone"></i>
                                                '.$company_phone.'</li>
                                            <li><i class="fa fa-envelope"></i> '.$company_email.'</li>
                                        </ul>
                                    </div>
                                    ',
                                );
                                $job_map = rwmb_meta( '_job_board_job_map', $args );
                                echo $job_map;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    endwhile;
}

// Footer============
get_footer();