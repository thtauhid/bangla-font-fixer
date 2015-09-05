<?php
/*
Plugin Name: Bangla Font Fixer
Plugin URI: http://bhinno.net/Bangla-Font-Fixer
Description: বাংলা ফন্ট ভেঙে যাওয়ার সমস্যা থেকে পরিত্রাণ পান।
Author: Tasnimul Hasan Tauhid
Version: 1.0
Author URI: http://www.facebook.com/tht52
*/

//For custom font in wp_head and front page body

add_action('wp_head', 'wp_head_font');

function wp_head_font() {
  echo '<style>
    body, td, textarea, input, select {
      font-family: "Noto Sans Bengali", SolaimanLipi;
    } 
#wpadminbar #wp-admin-bar-my-sites a.ab-item, #wpadminbar #wp-admin-bar-site-name a.ab-item #wpadminbar .quicklinks .ab-empty-item, #wpadminbar .quicklinks a, #wpadminbar .shortlink-input{
      font-family: "Noto Sans Bengali", SolaimanLipi;
    } 
  </style>';
}

//For custom font in wp_admin

add_action('admin_head', 'admin_font');

function admin_font() {
  echo '<style>
    body, td, textarea, input, select {
      font-family: "Noto Sans Bengali", SolaimanLipi;
    } 
#wpadminbar #wp-admin-bar-my-sites a.ab-item, #wpadminbar #wp-admin-bar-site-name a.ab-item #wpadminbar .quicklinks .ab-empty-item, #wpadminbar .quicklinks a, #wpadminbar .shortlink-input{
      font-family: "Noto Sans Bengali", SolaimanLipi;
    } 
  </style>';
}

//For custom font in login page

add_action('login_head', 'login_font');

function login_font() {
  echo '<style>
p {font-family: "Noto Sans Bengali", SolaimanLipi;} 
  </style>';
}
