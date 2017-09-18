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



<iframe src="https://player.twitch.tv/?volume=1.0&!muted&channel=mossebo"
        width="100%"
        height="100%"
        allowfullscreen="true"
        style="min-height: 100vh;">

</iframe>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'mCTa67oImJ';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<?php get_footer(); ?>
