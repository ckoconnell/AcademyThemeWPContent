<?php
/*
 Template Name: Lorne Home
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(lorne); ?>
<!-- <div id="content">
div class="pageContent">
        <div class="pageHead funfreePage">
            <h1>Free & <br>Fun Events</h1>
        </div>
</div>
</div> -->

<div id="clinics">
    <div id="intro">
        <p>Three days of international speakers, educational seminars and clinics on topics related to climbing. This year's festival features clinics and workshops in the Squamish Valley as well as the Sea To Sky Gondola</p>
        <div class="clinicLinkWrap margRight margLeft">
            <div class="topBG" id="clinicsLink"></div>
            <p>Clinic Page Link</p>
            <a href="/clinics-workshops/">View Clinic Details</a>
        </div>
        <div class="clinicLinkWrap margRight">
            <div class="topBG" id="valleyLink"></div>
            <p>Valley Clinic Link</p>
            <a href="/clinics-workshops/">Valley Clinics</a>
        </div>
        <div class="clinicLinkWrap">
            <div class="topBG" id="seatoskyLink"></div>
            <p>Sea To Sky Clinic Link</p>
            <a href="/clinics-workshops/">Sea To Sky Clinics</a>
        </div>

        <!-- <a href="/clinics-workshops/">Register for Clinics &amp; Workshops</a> -->

    </div>
</div>
<div style="clear: both;"></div>
<div class="container930">

<div id="sunset">
    <h2><span>Sunset Speaker</span><br />&amp; Music Series</h2>
    <div class="content">
        <h3> </h3>
        <p>Open air evening of keynote speakers, films, and live music.</p>
        <a href="/sunset-speaker-music-series/">View Sea To Sky Program</a>
    </div>
    <div class="gradient"></div>
    <!-- <div id="gondola"></div> -->
</div>



<div id="trade" class="feature-sm">
    <div class="feature-image"></div>
    <div class="feature-content">
        <h3>Trade<br/>Fair</h3>
        <p>Demo gear from some of the leading vendors in climbing apparel, shoes and harnesses, and meet the people that bring you the products that lead you to push your limits, and explore the world.</p>
        <a href="/trade-fair-demo-gear/">View Trade Fair</a>
    </div>
</div>

<div id="free" class="feature-sm right">
    <div class="feature-image"></div>
    <div class="feature-content">
        <h3>Fun & <br/>Free Events</h3>
        <p>There are lots of ways to get involved with the festival that are completely free of charge to the general public. Check out the full list.</p>
        <a href="/fun-free-events/">View Free & Fun Events</a>
    </div>
</div>


<div class="pageContent" id="athletes">
    <!-- <h1>Athlete callouts go here</h1> -->

    <div class="athlete-container">
        <img src="http://localhost/climbingacademydev/wp-content/uploads/2015/04/athletes/1.jpg" />
        <div class="view-all-athletes">
            <p>We are excited to announce <that></that> an all-star line-up of world class athletes will be in attendance at this year’s festival.</p>
            <a href="/attending-athletes/">View All Bios</a>
        </div>
    </div>

    <div class="athlete-container">
        <img src="http://localhost/climbingacademydev/wp-content/uploads/2015/04/athletes/2.jpg" />
        <div class="athlete-bio">
            <h3>Brette Harrington</h3>
            <a href="/attending-athletes/#bretteHarrington">Read Bio</a>
        </div>
    </div>

    <div class="athlete-container">
        <img src="http://localhost/climbingacademydev/wp-content/uploads/2015/04/athletes/3.jpg" />
        <div class="athlete-bio">
            <h3>Jason Kruk</h3>
            <a href="/attending-athletes/#jasonKruk">Read Bio</a>
        </div>
    </div>

    <div class="athlete-container">
        <img src="http://localhost/climbingacademydev/wp-content/uploads/2015/04/athletes/4.jpg" />
        <div class="athlete-bio">
            <h3>Marc-Andre LeClerc</h3>
            <a href="/attending-athletes/#marcandreLeclerc">Read Bio</a>
        </div>
    </div>


    <div class="athlete-container">
        <img src="http://localhost/climbingacademydev/wp-content/uploads/2015/04/athletes/5.jpg" />
        <div class="athlete-bio">
            <h3>Jonathan Siegrist</h3>
            <a href="/attending-athletes/#jonathanSiegrist">Read Bio</a>
        </div>
    </div>

    <div class="athlete-container">
        <img src="http://localhost/climbingacademydev/wp-content/uploads/2015/04/athletes/6.jpg" />
        <div class="athlete-bio">
            <h3>Vikki Weldon</h3>
            <a href="/attending-athletes/#vikkiWeldon">Read Bio</a>
        </div>
    </div>

    <div class="athlete-container">
        <img src="http://localhost/climbingacademydev/wp-content/uploads/2015/04/athletes/10.jpg" />
        <div class="athlete-bio">
            <h3>Rob Pizem</h3>
            <a href="">Read Bio</a>
        </div>
    </div>

    <div class="athlete-container">
        <img src="http://localhost/climbingacademydev/wp-content/uploads/2015/04/athletes/9.jpg" />
        <div class="athlete-bio">
            <h3>Paul McSorley</h3>
            <a href="/attending-athletes/#paulMcSorley">Read Bio</a>
        </div>
    </div>
</div>


<div id="seminar" class="feature-sm">
    <div class="feature-image"></div>
    <div class="feature-content">
        <h3>Educational<br/>Seminars</h3>
        <p>Come join any of the free educational seminars on top of one of the most inspiring location in the sea to sky corridor.</p>
        <a href="/educational-seminars/">View Educational Seminars</a>
    </div>
</div>

<div id="hivezone" class="feature-sm right">
    <div class="feature-image"></div>
    <div class="feature-content">
        <h3>The Hive<br>Outside</h3>
        <p>Vancouver's premier indoor climbing venue will be creating a custom bouldering setup for the festival, hosting training and this year's dyno comp.</p>
        <a href="/the-hive-zone/">View Hive Outside</a>
    </div>
</div>
</div>
<div style="clear:both;"></div>


<?php get_footer(); ?>
