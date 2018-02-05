<?php


/* 
important 
 Plugin Name: Plugin popup
 Description: un plugin permettant d'afficher un popup 
 Version: 0.0.1
 Author: Francois
 Licence: free 

*/


wp_enqueue_style("popup_style", plugin_dir_url("./")."/popup/style.css");




add_shortcode("popup","display_shortcode_popup");
     
     function display_shortcode_popup($atts){
        
        $content=get_the_content();
         
        extract(shortcode_atts(array(
            'content' =>$content            
         ), $atts));

         
      
        
                      $popup_html="<div id='popup'>";
                      $popup_html.="<div class='simple-popup'>";
                      $popup_html.="<span class='close'>&times;</span>";
                      $popup_html.="<div class='content-popup'>$content</div>";
                      $popup_html.="</div>";
                      $popup_html.="</div>";
        
                      return  $popup_html;
       
     }



