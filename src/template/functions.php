<?php


define('SITE_TITLE', get_bloginfo('name'));
define('SITE_DESCRIPTION', get_bloginfo('description'));
define('SITE_CHARSET', get_bloginfo('charset'));
define('SITE_URL', get_bloginfo('url'));
define('THEME_DIR', get_template_directory_uri());

if ($_SERVER["SCRIPT_NAME"] == THEME_DIR . "functions.php") {
    die();
}

  // *----------------------------------------------------------------------- */
  // Подключаем стили и скрипты
function theme_files()
{
    // JQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', THEME_DIR . '/assets/js/app.js', array(), false, true);
    wp_enqueue_script('jquery');
    // JQuery-migrate
    wp_deregister_script('jquery-migrate');
    // Custom CSS
    wp_register_style('style-css', THEME_DIR . '/assets/css/app.css', array(), null, 'all');
    wp_enqueue_style('style-css');
}
add_action('wp_enqueue_scripts', 'theme_files');
  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  // Подключаем на определенных страницах YaApi и скрипт инициализации карты
  add_action('wp', 'add_my_script_contant_page_about_us');
  function add_my_script_contant_page_about_us() {
  	if ( is_front_page() || is_page( 37 ) || is_page( 39 ) || is_page( 979 ) ) {
      add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
    }
  }
  function my_scripts_method() {
  	wp_enqueue_script( 'test_test', '//api-maps.yandex.ru/2.1/?&lang=ru_RU', array(), false, true);
  }
  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  // Добавить полодержку меню
  // add_theme_support('menus');
  if(function_exists('register_nav_menus')){
  	register_nav_menus(
  		array( // создаём любое количество областей
  		  'main_menu' => 'Главное меню', // 'имя' => 'описание'
  		  'foot_menu' => 'Меню в футере'
  		)
  	);
  }
  // *----------------------------------------------------------------------- */



  // *----------------------------------------------------------------------- */
  // Добавить возможность задавать миниатюру к записи
  add_theme_support( 'post-thumbnails' );
  // *----------------------------------------------------------------------- */





  // *----------------------------------------------------------------------- */
  // Изменяем длину вывода цитаты для поста excerpt
  function new_excerpt_length($length) {
  	return 25;
  }
  // -- Изменяем вывод окончания у поста на '...'
  add_filter('excerpt_length', 'new_excerpt_length');
  add_filter('excerpt_more', function($more) {
  	return '...';
  });
  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  // Вывод пагинации
  $args_pagination = array(
    'prev_text'    => __('« Назад'),
    'next_text'    => __('Вперед »'),
  );
  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  // Добавляем ссылкам next/prev post class 'link-arrow'
  add_filter('next_post_link', 'post_link_attributes');
  add_filter('previous_post_link', 'post_link_attributes_left');
  function post_link_attributes($output) {
      $code = 'class="link-arrow"';
      return str_replace('<a href=', '<a '.$code.' href=', $output);
  }
  function post_link_attributes_left($output) {
      $code = 'class="link-arrow left-side"';
      return str_replace('<a href=', '<a '.$code.' href=', $output);
  }
  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  // Инициализируем тип записей "Портфолио"
  add_action( 'init', 'portfolio_post_type_init' );
  function portfolio_post_type_init() {
  	$labels = array(
  		'name'               => _x( 'Портфолио', 'post type general name', 'your-plugin-textdomain' ),
  		'singular_name'      => _x( 'Портфолио', 'post type singular name', 'your-plugin-textdomain' ),
  		'menu_name'          => _x( 'Портфолио', 'admin menu', 'your-plugin-textdomain' ),
  		'name_admin_bar'     => _x( 'Портфолио', 'add new on admin bar', 'your-plugin-textdomain' ),
  		'add_new'            => _x( 'Добавить новый проект', 'portfolio', 'your-plugin-textdomain' ),
  		'add_new_item'       => __( 'Добавить новый проект', 'your-plugin-textdomain' ),
  		'new_item'           => __( 'Новый проект', 'your-plugin-textdomain' ),
  		'edit_item'          => __( 'Редактировать проект', 'your-plugin-textdomain' ),
  		'view_item'          => __( 'Посмотреть проект', 'your-plugin-textdomain' ),
  		'all_items'          => __( 'Все проекты', 'your-plugin-textdomain' ),
  		'search_items'       => __( 'Поиск по портфолио', 'your-plugin-textdomain' ),
  		'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
  		'not_found'          => __( 'Пока не создано ни одного проекта.', 'your-plugin-textdomain' ),
  		'not_found_in_trash' => __( 'Корзина проектов пуста.', 'your-plugin-textdomain' )
  	);
  	$args_posrtfolio = array(
  		'labels'             => $labels,
      'description'        => __( 'Портфолио.', 'your-plugin-textdomain' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'portfolio' ),
  		'capability_type'    => 'post',
  		'has_archive'        => true,
  		'hierarchical'       => true,
  		'menu_position'      => 2,
      'menu_icon'           => 'dashicons-format-gallery',
  		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  	);
  	register_post_type( 'portfolio', $args_posrtfolio );
  }
  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  // Инициализируем тип записей "Вакансии"
  register_post_type( 'vacancies', array(
    'labels'               => array(
      'name'               => __( 'Вакансии' ),
      'singular_name'      => __( 'Вакансии' ),
      'menu_name'          => __( 'Вакансии' ),
      'name_admin_bar'     => __( 'vacancies' ),
      'add_new'            => __( 'Добавить новую вакансию' ),
      'add_new_item'       => __( 'Добавить новую вакансию' ),
      'new_item'           => __( 'Новая вакансия' ),
      'edit_item'          => __( 'Редактировать вакансию' ),
      'view_item'          => __( 'Посмотреть вакансию' ),
      'all_items'          => __( 'Все вакансии' ),
      'search_items'       => __( 'Поиск по вакансиям' ),
      'parent_item_colon'  => __( 'Вакансии:' ),
      'not_found'          => __( 'Пока не создано ни одной вакансии.' ),
      'not_found_in_trash' => __( 'Корзина вакансий пуста.'  )
    ),
    'description'        => __( 'Вакансии.' ),
    'public'             => true,
    'show_ui'            => true,
    'capability_type'    => 'post',
    'publicly_queryable' => true,
    'exclude_from_search'=> false,
    'menu_position'      => 3,
    'menu_icon'          => 'dashicons-groups',
    'hierarchical'       => true,
    '_builtin'           => false, // It's a custom post type, not built in!
    'rewrite'            => array( 'slug' => 'vacancie/%office%', 'with_front' => true ),
    'query_var'          => true,
    'supports'           => array( 'title' ),
  ) );

  // hook into the init action and call create_book_taxonomies when it fires
  add_action( 'init', 'create_vacancies_taxonomies', 0 );

  function create_vacancies_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
      'name'              => __( 'Офисы' ),
      'singular_name'     => __( 'Офисы' ),
      'search_items'      => __( 'Поиск офисов' ),
      'all_items'         => __( 'Все офисы' ),
      'parent_item'       => __( 'Parent Genre' ),
      'parent_item_colon' => __( 'Parent Genre:' ),
      'edit_item'         => __( 'Редактировать офис' ),
      'update_item'       => __( 'Обюновтиь офис' ),
      'add_new_item'      => __( 'Добавить новый офис' ),
      'new_item_name'     => __( 'Новое имя офиса' ),
      'menu_name'         => __( 'Офисы' ),
    );

    register_taxonomy( 'office', array( 'vacancies' ), array(
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => array( 'slug' => 'vacancie', 'with_front' => true ),
    ) );

  }

  /**
   * @link   http://wordpress.stackexchange.com/a/5313/1685
  */
  function vacancies_post_type_link( $link, $post ) {
    if ( $post->post_type === 'vacancies' ) {
      if ( $terms = get_the_terms( $post->ID, 'office' ) ) {
        $link = str_replace( '%office%', current( $terms )->slug, $link );
      }
    }
    return $link;
  }
  add_filter( 'post_type_link', 'vacancies_post_type_link', 10, 2 );

  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  // Инициализируем страницу опций
  if( function_exists('acf_add_options_page') ) {
    // __Добавляем родительскую страницу опций
    $parent = acf_add_options_page( array(
      'page_title'  =>   'Основные настройки',
      'menu_title'  =>   'Mossebo',
      'menu_slug'   =>   'mossebo',
      'capability'  =>   'edit_posts',
      'icon_url'    =>   '/wp-content/themes/mossebo/assets/images/icon/cropped-cropped-favicon-32x32.png', // Add this line and replace the second inverted commas with class of the icon you like
      'position'    =>    4,
		  'redirect' 	  =>    true
    ));
    // __Добавляем дочернию страницу опций для портфолио
    acf_add_options_sub_page( array(
      'page_title' 	=> 'Главная страница',
      'menu_title' 	=> 'Main page',
      'parent_slug' 	=> $parent['menu_slug'],
    ));
    // __Добавляем дочернию страницу опций
    acf_add_options_sub_page( array(
  		'page_title' 	=> 'Страница портфолио',
  		'menu_title' 	=> 'Portfolio',
  		'parent_slug' 	=> $parent['menu_slug'],
  	));
    // __Добавляем дочернию страницу опций для отзывов
    acf_add_options_sub_page( array(
  		'page_title' 	=> 'Отзывы',
  		'menu_title' 	=> 'Reviews',
  		'parent_slug' 	=> $parent['menu_slug'],
  	));
  }
  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  // Убираем не нужные поля в админке
  function remove_menus() {
    remove_menu_page( 'edit-comments.php' ); //Комментарии
    remove_menu_page( 'tools.php' );         //Инструменты
  }
  add_action( 'admin_menu', 'remove_menus' );
  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  // Добавляем img класс в editor
  function add_img_editor_post_class( $class, $id, $align, $size) {
    $class =  $class . ' img-post-gallary';
    return $class;
  }
  add_filter( 'get_image_tag_class', 'add_img_editor_post_class' );
  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  /**
   * Получает термин верхнего уровня, для указанного или текущего поста в цикле
   * @param  string          $taxonomy      Название таксономии
   * @param  integer/object  [$post_id = 0] ID или объект поста
   * @return string/wp_error Объект термина или false
   */
  function get_top_term( $taxonomy, $post_id = 0 ){
  	if( isset($post_id->ID) ) $post_id = $post_id->ID;
  	if( ! $post_id )          $post_id = get_the_ID();

  	$terms = get_the_terms( $post_id, $taxonomy );

  	if( ! $terms || is_wp_error($terms) ) return $terms;

  	// только первый
  	$term = array_shift( $terms );

  	// найдем ТОП
  	$parent_id = $term->parent;
  	while( $parent_id ){
  		$term = get_term_by( 'id', $parent_id, $term->taxonomy );
  		$parent_id = $term->parent;
  	}
  	return $term;
  }
  // *----------------------------------------------------------------------- */





  // *----------------------------------------------------------------------- */
  // Проверяем является ли категория дочерней.
  function has_Children( $cat_id ) {
    $children = get_terms(
      'office',
      array(
        'parent' => $cat_id
      )
    );

    if ( $children ) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }
  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  // templates
  require get_template_directory() . '/template/call-to-action.php';
  require get_template_directory() . '/template/feedback-form.php';
  require get_template_directory() . '/template/feedback-form-calc.php';
  // *----------------------------------------------------------------------- */




  // *----------------------------------------------------------------------- */
  // utm
    if ( isset( $_GET[ 'utm_source' ] ) && !isset( $_COOKIE[ 'utm_source' ] ) ) setcookie( 'utm_source', $_GET[ 'utm_source' ], time()+500000, '/' );
    if ( isset( $_GET[ 'utm_medium' ] ) && !isset( $_COOKIE[ 'utm_medium' ] ) ) setcookie( 'utm_medium', $_GET[ 'utm_medium' ], time()+500000, '/' );
    if ( isset( $_GET[ 'utm_campaign' ] ) && !isset( $_COOKIE[ 'utm_campaign' ] ) ) setcookie( 'utm_campaign', $_GET[ 'utm_campaign' ], time()+500000, '/' );
    if ( isset( $_GET[ 'utm_content' ] ) && !isset( $_COOKIE[ 'utm_content' ] ) ) setcookie( 'utm_content', $_GET[ 'utm_content' ], time()+500000, '/' );
    if ( isset( $_GET[ 'utm_term' ] ) && !isset( $_COOKIE[ 'utm_term' ] ) ) setcookie( 'utm_term', $_GET[ 'utm_term' ], time()+500000, '/' );
  // *----------------------------------------------------------------------- */

?>
