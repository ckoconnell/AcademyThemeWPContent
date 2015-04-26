<?php
/*
 Template Name: Academy Getting Here Page
 */
?>

<?php get_header(); ?>

<div id="content">

    <div class="pageContent">
        <div class="pageHead gettingherePage">
            <h1>Getting Here</h1>
        </div>
        <div class="introWrap">
            <p>Intro, Link to Venue Map, Contact Info, Accommodations, external tourism links, driving times table, </p>
        </div>
        <div style="clear:both;"></div>
        <div class="googleMapWrap">
            <?php echo do_shortcode('[mapsmarker layer="1"]'); ?>
        </div>
        <div style="clear:both;"></div>
        <div class="listingWrap">

        </div>

    </div>

    <div style="clear:both;"></div>
</div>
<?php get_footer(); ?>
</div>