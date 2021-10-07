<?php
  include('wpform-shortcode.php');

  add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_child_styles' );
  add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_child_scripts' );

  function twenty_twenty_one_child_styles(){
    wp_enqueue_style( 'google-fonts-child-style', 'https://fonts.googleapis.com/css2?family=Inter:wght@500;600&display=swap', false );
    wp_enqueue_style( 'bootstrap-child-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', false );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('twenty-twenty-one-style') );
    wp_enqueue_style( 'form-style', get_stylesheet_directory_uri() . '/style/style.css' );
  }


  function twenty_twenty_one_child_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/js.js', array('jquery'), null, true );

  }      		