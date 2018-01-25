<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 06.09.17
 * Time: 10:53
 * Template Name: Интервью ОЗС
 */

get_header();

?>

<iframe width="100%"
        height="100%"
        style="height: 100vh;"
        src="https://www.youtube.com/embed/csSc5u3occs?rel=0&amp;showinfo=0"
        frameborder="0"
        allow="autoplay; encrypted-media"
        allowfullscreen
>

</iframe>
<div style="position: absolute; left: 50%;">
    <a href="<?php echo THEME_DIR; ?>/assets/mossebo.pdf"
       download
       class="btn btn_1 feedback-form-modal-thank-page__btn"
       style="
   position: absolute;
   bottom: 75px;
   left: -150px;
   z-index: 9999;
   font-size: 22px;
   display: block;
   width: 500px;
   letter-spacing: 5px;
   text-transform: uppercase;"
    >
        Скачать презентацию
    </a>
</div>


</main> <!-- Main container EMD -->


<!-- Menu BTN -->
<div id="nav-icon3">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<!-- Menu overlay -->
<div class="mobile-menu-overlay" data-overlay="close" style="display:none;"></div>

</div>

<!-- Back top -->
<div class="back-top"></div>


<?php wp_footer(); ?>

<?php get_template_part('template/cookie'); ?>
</div>

</body>
</html>
