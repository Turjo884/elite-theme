<?php get_header(); ?>

    <!-- :::::::::: Page Banner Section Start :::::::: -->
    <section class="blog-bg background-img">
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Blog Theme</h2>
                    <!-- Page Heading Breadcrumb Start -->
                    <nav class="page-breadcrumb-item">
                        <ol>
                            <li><a href="index.html">Home <i class="fa fa-angle-double-right"></i></a></li>
                            <!-- Active Breadcrumb -->
                            <li class="active">Blog</li>
                        </ol>
                    </nav>
                    <!-- Page Heading Breadcrumb End -->
                </div>
                  
            </div>
            <!-- Row End -->
        </div>
    </section>
    <!-- ::::::::::: Page Banner Section End ::::::::: -->



    <!-- :::::::::: Blog With Right Sidebar Start :::::::: -->
    <section>
        <div class="container">
            <div class="row">
                <!-- Blog Posts Start -->
                <div class="col-md-8">

                <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                           ?> 
                         
                            <!-- Single Item Blog Post Start -->
                            <div class="blog-post <?php post_class(); ?>">
                                <!-- Blog Banner Image -->
                                <div class="blog-banner">
                                    <a href="#">
                                        <?php 
                                            if( has_post_thumbnail()){
                                                the_post_thumbnail();
                                            }
                                        ?>
                                        <!-- Post Category Names -->
                                        <div class="blog-category-name">
                                            <h6>Technology</h6>
                                        </div>
                                    </a>
                                </div>
                                <!-- Blog Title and Description -->
                                <div class="blog-description">
                                    <a href="<?php the_permalink();?>">
                                        <h3 class="post-title"><?php echo the_title();?></h3>
                                    </a>
                                    <p><?php
                                    
                                        if( !is_single() ){
                                            the_excerpt();
                                        }
                                        else{
                                            the_content();
                                        }
                                    
                                    ?></p>
                                    <!-- Blog Info, Date and Author -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="blog-info">
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i><?php echo get_the_date();?></li>
                                                    <li><i class="fa fa-user"></i><?php echo get_the_author();?></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md-4 read-more-btn">
                                            <button type="button" class="btn-main">Read More <i class="fa fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item Blog Post End -->

                            <?php
                        endwhile; 
                    endif; 
                ?>

                </div>

                <?php get_sidebar(); ?>
               
            </div>
        </div>
    </section>
    <!-- ::::::::::: Blog With Right Sidebar End ::::::::: -->
    
<?php get_footer(); ?>