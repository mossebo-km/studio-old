<div class="col-xl-6 col-lg-12">
  <div class="sidebar-right">
    <!-- Here content for sidebar -->
    <h3 class="sidebar-title">Свежие новости<br> от компании Mossebo:</h3>

    <!-- Sidebar new's latest -->
    <ul class="sidebar-latest">
      <?php
        $recent_posts = wp_get_recent_posts([
                'numberposts'      => 10,
            ]);
        foreach($recent_posts as $post){
        echo '<li><a href="' . get_permalink($post["ID"]) . '" title="'.$post["post_title"].'" >' .   $post["post_title"].'</a> </li> ';
        } ?>
    </ul>

    <!-- Sidebar new's category -->
    <div class="sidebar-category">
      <h3>Рубрики</h3>
      <ul>
        <?php wp_list_categories(); ?>
      </ul>
    </div><!-- Sidebar new's category END -->

    <div class="sidebar-archive-link">
      <h3>Архив</h3>
      <ul>
        <?php wp_get_archives('type=monthly&limit=12'); ?>
      </ul>
    </div>

    <!-- Sidebar new's subscribe -->
    <div class="sidebar-subscribe">
      <h3>Подписаться на новости</h3>
      <form class="footer-subscribe" method="POST">
        <input class="subscribe-email-input" type="text" placeholder="Ваш e-mail">
        <button class="btn btn_1" type="submit">Подписаться</button>
      </form>
    </div>

  </div>
</div> <!-- Right sidebar END -->
