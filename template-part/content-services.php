<section class="services section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                                <img src="<?php echo get_theme_file_uri('images/handshake-man-woman-after-signing-business-contract-closeup.jpg');?>" class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">Services</h2>
                            </div>

                            <div class="row pt-lg-5">

                                <?php

                                // the query (for Post Loop)

                                    $args = array(
                                        'post_type' => 'customservice'
                                    );

                                    $the_query = new WP_Query( $args ); ?>

                                    <?php if ( $the_query->have_posts() ) : ?>

                                        <!-- pagination here -->

                                        <!-- the loop -->
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                        <!-- HTML Loop Code -->
                                        <div class="col-lg-6 col-12">
                                            <div class="services-thumb">
                                                <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                                    <h3 class="mb-0"><?php the_title(); ?></h3>

                                                    <div class="services-price-wrap ms-auto">
                                                        <?php
                                                            $postid = $the_query->post->ID;

                                                            $price = get_post_meta($postid, 'Price', true);
                                                        ?>
                                                        <p class="services-price-text mb-0"><?php echo $price; ?></p>
                                                        <div class="services-price-overlay"></div>
                                                    </div>
                                                </div>

                                                <p><?php the_content(); ?></p>

                                                <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                                <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                                    <?php
                                                        $postid = $the_query->post->ID;

                                                        $icon_class = get_post_meta($postid, 'icon_class_name', true);
                                                    ?>
                                                    <i class="<?php echo $icon_class; ?>"></i>
                                                </div>
                                            </div>
                                        </div>

                                            
                                        <?php endwhile; ?>
                                        <!-- end of the loop -->

                                        <!-- pagination here -->

                                        <?php wp_reset_postdata(); ?>

                                    <?php else : ?>
                                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                    <?php endif; 
                                // End the query (for Post Loop) 
                                
                                ?>

                                <!-- <div class="col-lg-6 col-12">
                                    <div class="services-thumb services-thumb-up">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Branding</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">$1,200</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>You can explore more CSS templates on TemplateMo website by browsing through different tags.</p>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-lightbulb"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Ecommerce</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">$3,600</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>If you need a customized ecommerce website for your business, feel free to discuss with me.</p>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-phone"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb services-thumb-up">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">SEO</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">$1,450</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>To list your website first on any search engine, we will work together. First Portfolio is one-page CSS Template for free download.</p>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-google"></i>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>