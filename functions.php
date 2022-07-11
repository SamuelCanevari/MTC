<?php
require_once dirname(__FILE__). '/parts/functions/function_adicionar_perguntas.php';
require_once dirname(__FILE__). '/parts/functions/function_adicionar_video_relato.php';
require_once dirname(__FILE__). '/parts/functions/function_adicionar_modulo.php';
require_once dirname(__FILE__). '/parts/functions/function_adicionar_bonus.php';
require_once dirname(__FILE__). '/parts/functions/function_adicionar_planos.php';
require_once dirname(__FILE__). '/parts/functions/function_adicionar_cards_principais.php';
require_once dirname(__FILE__). '/parts/functions/function_principal.php';

require_once dirname(__FILE__). '/parts/functions/function_footer.php';



//Adicionando suportes ao tema
function theme_setup() {
    add_theme_support('title-tag');
    load_theme_textdomain('game', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'theme_setup');

//Removendo páginas não usadas da adminisração e fazendo redirect do dashboard
function remove_menus() {
    remove_menu_page('index.php');                  //Dashboard
    remove_menu_page('jetpack');                    //Jetpack* 
    remove_menu_page('edit.php');                   //Posts
//    remove_menu_page('upload.php');                 //Media
//    remove_menu_page('edit.php?post_type=page');    //Pages
    remove_menu_page('edit-comments.php');          //Comments
//    remove_menu_page('themes.php');                 //Appearance
//    remove_menu_page('plugins.php');                //Plugins
//   remove_menu_page('users.php');                  //Users
//    remove_menu_page('tools.php');                  //Tools
//    remove_menu_page('options-general.php');        //Settings
}

add_action('admin_menu', 'remove_menus');    
?>