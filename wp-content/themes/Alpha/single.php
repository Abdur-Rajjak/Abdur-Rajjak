<?php get_header(); ?>
<body <?php body_class(); ?> >

<?php get_template_part("hero"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 float-left">
                <div class="posts">

                        <?php 
                        while(have_posts()):
                            the_post(  );
                        ?>

                        <div class="post"  <?php post_class(); ?> >
                            <div class="container-fluid">
                                <div class="row">
               
                                    <div class="col-md-12">
                                        <h2 class="post-title">
                                            <?php the_title(); ?>
                                        </h2>
                                        <p class="">
                                            <strong><?php the_author(); ?></strong><br>
                                            <?php echo get_the_date(); ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                                <?php
                                                if(has_post_thumbnail()){
                                                    the_post_thumbnail("large", array("class"=>"img-fluid"));
                                                }
                                                the_content() ;
                                                next_post_link();
                                                echo "<br/>";
                                                previous_post_link();
                                                ?>
                                        </p>
                
                                    </div>
                                <?php

                                    /*if(comments_open()); */?><!--
                                    <div class="col-md-10 offset-md-1">
                                    <?php /*comments_template(); */?>
                                    </div>
                                --><?php  /*endif; */ ?>
             
                            </div>
                        </div>
                    </div>
                        <?php
                            endwhile;
                        ?>
    
                        <div class="container post-pagination">
                            <div class="row">
                                <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <?php 
                                        the_posts_pagination( array(
                                            "screen_reader_text"=>' ',
                                            "prev_text" => "New Posts",
                                            "next_text" => "Old Posts"
                                        ) );
                                        ?>
                                    </div>
                                
                                </div>
                            </div>

                            
                        </div>
        




                </div>
                <div class="col-md-4 float-right">
                    <?php  
                        if(is_active_sidebar("sidebar-1")){
                            dynamic_sidebar( "sidebar-1" );
                        }
                    ?>

                </div>
            </div>

        </div>
<?php get_footer(); ?>