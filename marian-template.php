<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 *
 * Template Name: Listings Template
 */
 
 get_header();
?>

<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider single_listing  d-flex align-items-center slider_bg_1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10">
                    <div class="slider_text text-center justify-content-center">
                        <h3><?php the_title()?></h3>
                        <div class="search_form">
                            <form action="#">
                                <div class="row align-items-center">
                                    <div class="col-xl-5 col-md-4">
                                        <div class="input_field">
                                            <input type="text" placeholder="What are you finding?">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4">
                                        <div class="input_field location">
                                            <input type="text" placeholder="Location">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4">
                                        <div class="button_search">
                                            <button class="boxed-btn2" type="submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- explorer_europe start  -->
<div class="explorer_europe list_wrap">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="filter_wrap">
                    <h3 class="exp_title">Advanced Filter</h3>
                    <div class="filter_main_wrap">
                        <form class="advanced-filtering-form">
                            <div class="filter_inner">
                                <?php wp_nonce_field( 'search_prop_data_nonce' );?>
                                <div class="input_field">
                                    <input type="text" class="search-text" placeholder="What are you finding?" >
                                    <!-- <button class="submit_btn" type="submit"> <i class="fa fa-search"></i> </button> -->
                                </div>
                                <div class="input_field search-category">
                                    <select class="wide">
                                        <?php
                                            $taxonomies = marian_get_taxonomies();
                                            $counter = 0;
                                            foreach ( $taxonomies as $tax_id => $taxonomy ) {
                                                $counter++;
                                                if ( $counter == 1 ) {
                                                    echo "<option data-display='{$tax_id}'>{$taxonomy}</option>";
                                                } else {
                                                    echo "<option value='{$tax_id}'>{$taxonomy}</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="input_field search-location">
                                    <select class="wide">
                                        <?php
                                            $taxonomies = marian_get_taxonomies('listing_country');
                                            $counter = 0;
                                            foreach ( $taxonomies as $tax_id => $taxonomy ) {
                                                $counter++;
                                                if ( $counter == 1 ) {
                                                    echo "<option data-display='{$tax_id}'>{$taxonomy}</option>";
                                                } else {
                                                    echo "<option value='{$tax_id}'>{$taxonomy}</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <!-- <div class="input_field ">
                                    <div class="inner">
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                                            <label for="fruit1">Open Now</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit4" name="fruit-4" value="Strawberry">
                                            <label for="fruit4">Ratings</label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="input_field area-from">
                                    <select class="wide">
                                        <!-- <option data-display="Area (sq)">Area (sq)</option> -->
                                        <option value="500">500</option>
                                        <option value="1000">1000</option>
                                        <option value="2000">2000</option>
                                        <option value="2500">2500</option>
                                        <option value="3000">3000</option>
                                    </select>
                                </div>
                                <div class="input_field area-to">
                                    <select class="wide">
                                        <!-- <option data-display="Area (sq)">Area (sq)</option> -->
                                        <option value="500">500</option>
                                        <option value="1000">1000</option>
                                        <option value="2000">2000</option>
                                        <option value="2500">2500</option>
                                        <option value="3000">3000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="last_range">
                                <label for="amount">Price range:</label>
                                <div id="slider-range"></div>
                                <p>
                                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                </p>
                                <button class="boxed-btn2">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-8">
                <h3 class="exp_title">5432 Listings are available</h3>
                <div class="row all-listings-together"></div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page_nation text-center">
                            <ul>
                                <li>
                                    <a href="#">01</a>
                                </li>
                                <li>
                                    <a href="#">02</a>
                                </li>
                                <li>
                                    <a href="#">03</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="ti-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-xl-8 -->
        </div>
    </div>
</div>
<?php

	if( have_posts() ){
		while( have_posts() ){
			the_post();
			
			the_content();
		}
	}
 
 get_footer();
?>