<?php

    function mainFooter(){
        $footer = "
        <!-- footer-->
           
           <div class='row body'>
                   <div class='col-sm-5'>
                      
                       <a href='#'><img src='img/logo-facebook.png' class='icons' alt='Folllow us on Facebook'/></a>
                       <a href='#'><img src='img/twitter-logo.png' class='icons' alt='Folllow us on Twitter'/></a>
                       <a href='#'><img src='img/icon2.png' class='' alt='Network' width='22px' style='margin-left: 5px;'/></a>
                   </div>
                   <div class='col-sm-7'>
                       <div class='quote'>
                           <blockquote>
                               <span style='font-size: 18px; color:white;'><span style='font-size: 60px; color:forestgreen;font-family: happy-monkey'>“
                               </span> <i class='slogan'>A name you can trust at a price you can afford! </i><span style='font-size: 60px; color:forestgreen;font-family: happy-monkey'>”
                               </span></span>
                           </blockquote>
                       </div>
                   </div>
            </div>
       <!-- end footer-->";

       echo "$footer";
    }

?>