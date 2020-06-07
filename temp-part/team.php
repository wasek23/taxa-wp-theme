<!-- Customize Global Variable -->
<?php global $taxa; ?>

<section class="team_area section_gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <p><?php echo $taxa['team_section_description']; ?></p>
                    <h1><?php echo $taxa['team_section_title']; ?></h1>
                    <span class="title-widget-bg"></span>
                </div>
            </div>
        </div>
        <div class="row team_inner">
            
            <?php
                $team_member_posts = new WP_Query(array(
                    'post_type' => 'team-member',
                    'posts_per_page' => 4,
                    'order' => 'DSC'
                ));
                
                if($team_member_posts -> have_posts()) :
                    while($team_member_posts -> have_posts()) : $team_member_posts -> the_post();

                    $team_member_role = get_post_meta(get_the_ID(), 'team_member_role', true);
            ?>
                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <?php the_post_thumbnail('team_member_post_thumb', array('class' => 'img-fluid w-100')); ?>
                            <div class="hover">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo $team_member_role; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                    endwhile;
                endif;
            ?>
            
        </div>
    </div>
</section>