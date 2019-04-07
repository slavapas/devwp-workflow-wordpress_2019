<?php
/**
 * Template Name: My Home Page
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package devWP
 */
?>
<?php get_header(); ?>
<div id="content" class="site-content">
    <!-- Main Slider -->
    <?php echo "Slider"; ?>
    <div class="main-slider row">
        <img class="main_slider__img" src="http://placehold.it/1350x550" alt="">
    </div>
    <!-- Content -->
    <!-- Welcome Section -->
    <div class="section">
        <div class="welcome-message container">
            <div class="row">
                <div class="col-md-6">
                    <img class="welcome-meesage__img" src="http://placehold.it/550x550" alt="">
                </div>
                <div class="col-md-6">
                    <div class="section-title_small">NATURAL STONE AND TILES SUPPLIES</div>
                    <h3 class="section-title_big left">Welcome to Stonecrest</h3>
                    <p class="section-content">Stonecrest, a small family run business has grown to be a big family made
                        of those who share the same passion and vision for the industry. Our unique approach and
                        excellence in customer service has now made us become one of the top choices for natural stone
                        and tiles supplies in the UK.</p>
                    <div class="about-us_button">About Us</div>
                </div>
            </div>
            <!--// end row -->
        </div> <!-- // end welcome-message-->
    </div> <!-- // end section -->
    <div class="section container">
        <div class="tile-collection container">
            <h3 class="section-title_big">Our Tile Collection</h3>
            <p class="section-content_narrow">Thousands of choices available in ceramic, porcelain, and natural stone
                options. Browse through our many options and find the best quality tiles, many that are exclusive only
                to Stonecrest.
        </div>
        <div class="tile-collection-img row">
            <div class="col-md-6">
                <a href="/"><img src="http://lorempixel.com/g/400/200/" alt=""></a>
            </div>
            <div class="col-md-6">
                <a href="/"><img src="http://lorempixel.com/g/400/200/" alt=""></a>
            </div>
        </div>
        <div class="tile-collection-img row">
            <div class="col-md-6">
                <a href="/"><img src="http://lorempixel.com/g/400/200/" alt=""></a>
            </div>
            <div class="col-md-6">
                <a href="/"><img src="http://lorempixel.com/g/400/200/" alt=""></a>
            </div>
        </div>
        <div class="tile-collection-img row">
            <div class="col-md-6">
                <a href="/"><img src="http://lorempixel.com/g/400/200/" alt=""></a>
            </div>
            <div class="col-md-6">
                <a href="/"><img src="http://lorempixel.com/g/400/200/" alt=""></a>
            </div>
        </div>
        <div class="tile-collection-img row">
            <div class="col-md-6">
                <a href="/"><img src="http://lorempixel.com/g/400/200/" alt=""></a>
            </div>
            <div class="col-md-6">
                <a href="/"><img src="http://lorempixel.com/g/400/200/" alt=""></a>
            </div>
        </div>
    </div>
    <!--// end row -->
</div> <!-- // end tile-collection-->

<!-- TILES OF YOUR CHOICE -->
<div class="section">
    <div class="tile-choice">
        <div class="container">
            <div class="col-lg-6">
                <div class="section-title_small">
                    TILES OF YOUR CHOICE
                </div>
                <h3 class="section-title_big left">B massive selection of tiles from across the globe with next day
                    delivery
                </h3>
                <div class="section-content_slim">Having established strong bonds with tile and natural stone
                    manufacturers from all around the world, we are able to offer endless choices of exclusive ranges to
                    our customers.
                    <br>
                    As Stonecrest we pride to be able to hold over 100,000m2 of stock at our very own warehouse base in
                    Colchester covering 65,000ft of land, giving us the advantage of offering next day delivery service
                    to meet our client’s deadlines as quickly as they need.</div>
            </div>
        </div>
    </div>
</div>

<!-- FEATURE PRODUCTS -->
<div class="section">
    <div class="feature-bg">
        1
    </div>
    <div class="feature-descriptons container">
        <div class="feature-descriptons-row row">
            <h3 class="feature-descriptons_title col-6">
                Feature Description
            </h3>
        </div>
    </div>
    3
    <div class="feature-gallery">

    </div>
</div>


<?php get_sidebar();?>
<?php get_footer();?>