const $ = jQuery;

$(document).ready(function(){

    var $slider = $("#slider");
    var $popup = $("#popup");
    var $close =$(".close");

 
        $popup.show();
        $close.click(function(){
            $popup.hide();
                   
           });
         
    
   
  
     
      
    
    if( $slider.length > 0 ){


                //sliderd'slider
                
                $all_slider=$(".simple-foto");
                $current_slider= $all_slider.first();
                $all_slider.hide();
                $current_slider.show();


                setInterval(function(){
                    $current_slider.fadeOut(500,function(){

                        //prochain element
                        $current_slider=$current_slider.next();

                        //verifie que l'element existe
                        if($current_slider.length<1){
                            $current_slider=$all_slider.first();
                        }
                        $current_slider.fadeIn(500);

                    });
                },3000);
            }

});