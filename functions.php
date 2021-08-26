<?php
add_action('init', function(){

add_theme_support('title-tag');

add_theme_support( 'post-thumbnails' );

//メニューをサポート

register_nav_menus([

'global_nav'=>'グローバルナビゲーション',

]);

});


// カスタム投稿タイプの追加
function add_custom_post_type(){
    // 生徒
    register_post_type(
        'student', // 1.投稿タイプ名 
        array(   // 2.オプション 
            'label' => '生徒', // 投稿タイプの名前
            'public'        => true, // 利用する場合はtrueにする 
            'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
            'show_in_rest' => true, // グーテンベルクの採用
            'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array( // サポートする機能
                'title',
                'editor',
                'thumbnail'
            )
        )
    );
    // カスタマー分類（taxonomy）の追加
    register_taxonomy('blog_category', 'blog', [
        'label' => 'カテゴリー',
        'hierarchical' => true,
        'show_in_rest' => true,
        'exclude_from_search' => true,
    ]);
}


add_action('init', 'add_custom_post_type');

/*
アイキャッチ画像がなければ、標準画像を取得する
*/
function get_eycatch_with_default(){
    if (has_post_thumbnail()) :
        $id=get_post_thumbnail_id();
        $img=wp_get_attachment_image_src($id, 'large');
      else:
        $img=array(get_template_directory_uri() . '/img/noimg.png');
      endif;
      return $img;
}

// thumbnail画像取得
function get_thumbnail(){
    if (has_post_thumbnail()) :
        $thumbnail=get_the_post_thumbnail('thumbnail');
      else:
        $thumbnail=array(get_template_directory_uri() . '/img/noimg.png');
      endif;
      return $thumbnail;
}

// heightとwidthの自動挿入タグを削除
add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );
function remove_image_attribute( $html ){
$html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
$html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
return $html;
}


/*文字数の設定
------------------------------------------------------*/
function max_excerpt_length( $string, $maxLength) {
    $length = mb_strlen($string, 'UTF-8');
    if($length < $maxLength){
      return $string;
    } else {
      $string = mb_substr( $string , 0 , $maxLength, 'utf-8' );
      return $string.'・・・';
    }
  }
  
