<?php


/* 
important 
 Plugin Name: Plugin slider
 Description: un plugin permettant d'afficher un slider de photo sur les pages
 Version: 0.0.1
 Author: Francois
 Licence: free 

*/

     wp_enqueue_script("slider_script", plugin_dir_url("./")."/slider/script.js", array( "jquery" ));


//actions hooks

add_action("init","create_slider");


function create_slider(){

    register_post_type( "slider", [

        "label"         =>  "photo",
        "description"   =>  "photo pour slider",
        "show_in_menu"  =>   true,
        "public"        =>   true,
        "menu_icon"     =>  "dashicons-admin-collapse",
        "menu_position" => 2,
        "supports"      =>[
            "title",
            "editor",
            "revisions",
            "thumbnail"
        ]
    ]);

     add_shortcode("slider","display_shortcode");
     
     function display_shortcode(){
       
         $slider= new WP_Query([
             "post_type" =>"slider"
         ]);
          
         $slider_html="<div id='slider'>";
            if($slider->have_posts()){
                while($slider->have_posts()){
                    $slider->the_post();
                     $slider_html.="<div class='simple-foto'>";
                   
                     $slider_html.=get_the_post_thumbnail(null,'medium');
                     $slider_html.="</div >";
                }
            }
             $slider_html.="</div>";
        return  $slider_html;
     }
}


