<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 06.09.17
 * Time: 10:53
 * Template Name: Стрим
 */

get_header();

?>

<div style="
    position: absolute !important;
    left: 250px;
    top: 0;
    width:100vw;
    min-height: 100vh;
    z-index: 9;
">

</div>



<iframe src="https://player.twitch.tv/?volume=0.8&!muted&channel=mossebo"
        width="100%"
        height="100%"
        allowfullscreen="true"
        style="min-height: 100vh;">

</iframe>


<?php get_footer(); ?>
