<?php

include 'header.php';
include 'footer.php';
include 'functions/functions.php';

?>

<!doctype html>
<html>
<head>
    
    <title>African Black Soap</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Damion|Happy+Monkey|Pacifico" rel="stylesheet">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- PayPal BEGIN -->
      <script>
          ;(function(a,t,o,m,s){a[m]=a[m]||[];a[m].push({t:new Date().getTime(),event:'snippetRun'});var f=t.getElementsByTagName(o)[0],e=t.createElement(o),d=m!=='paypalDDL'?'&m='+m:'';e.async=!0;e.src='https://www.paypal.com/tagmanager/pptm.js?id='+s+d;f.parentNode.insertBefore(e,f);})(window,document,'script','paypalDDL','d31f7794-cf90-4f46-b1f6-2b3aebbbb37a');
        </script>
      <!-- PayPal END -->
      <style>
         .bg-mb-rp{
            background:url(img/bg.jpg) no-repeat center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .nesbmail1{
            display:none;
            color: white;
            text-shadow: 3px 3px 9px #000;
        }
        @media(max-width: 700px){
            .bg-mb-rp{
                background:url(img/bg-mini.jpg);
            }
            .text1{
            font-size: 28px;
        }
        .text2{
            font-size: 10px;
            margin-left:60px;
        }
        .numnum{
            margin-left:120px;
        }
        .nesbmail1{
            display: block;
            text-align: center;
        }
        }
      </style>
</head>
<body lang="en" >
    
   <!-- Navigation Bar -->
        <?php mainHeader() ?>
    
           <div class="row body">
               <div class="col-sm-12 comfortaa"align="center" style="padding-top: 15px;">
                <h2 class="large-header">Raw Black Soap</h2>
                 <br>  <h2 class="large-header">Natural and 100% Organic Soaps</h2>
               </div>
           </div>
           
           <!--Slide show Starts here:-->
           
 
           
           <div class="row body">
             <div class="col-sm-2"></div>
              <div class="slideshow col-sm-8"style="background-color:white; height:380px;">
                <figure>
                    <img src="img/blacksoap-slidehsow.jpg"/>
                    <figcaption>Natural and 100% Organic Soap</figcaption> 
                    </figure>

                    <figure>
                        <img src="img/blacksoap-slideshow2.jpg"/>
                        <figcaption>100% Raw Grade A, Black Soap</figcaption> 
                    </figure>


                    <figure>
                        <img src="img/blacksoap-slideshow3.jpg"/>
                        <figcaption>Raw Black Soap</figcaption> 
                    </figure>

                  <!--
                  
                  THESE BUTTONS ARE TEMPORARLY DISABLED, THEY ARE NEST AND PREV BUTTONS FOR THE SLIDE SHOW.
                  <span class="prev"></span>
                  <span class="next"></span>-->
                  
            </div>
            <div class="col-sm-2"></div>  
           </div>
           
     
           
           <!-- Slide show ends here-->
           
           <!-- products-->
           <div class="row body"style="padding-top: 20px;">
                  <!-- Products-->
                  <?php 
                            $proCat = 3;
                            $size = 3;
                            getPro($proCat, $size); 
                        ?>
                   
            </div>
            <div class="row body">
            <br> <br>
            </div>
           <!-- footer-->
           <?php mainFooter()?>
       <!-- end footer-->
       
       
       
       
        </div>
    </div>
    
    <!-- Javascript for sldieshow -->
    <script>
    
                // click or touchstart
        var clk =((document.ontouchstart!==null)?'click':'touchstart'),
        counter = 0, 
        // all figures
        figures = document.querySelectorAll('.slideshow figure'),
        // make slice
        items = Array.prototype.slice.call(figures);

        // add class show first element
        // good for php loop
        items[0].classList.add('show');

        // auto on click stop this
        var auto = setInterval(function(){
            counter++;
          _current(items);
        },5000);


        // add click events to prev & next buttons 
        _('.next').addEventListener(clk, function(){
          counter++;
          _current(items);
          clearInterval(auto);
        });
        _('.prev').addEventListener(clk, function(){
          counter--;
          _current(items);
          clearInterval(auto);
        });



        /*
         *  short queryselector function
         * -------------------------------------------------------*/
        function _(el){
          return document.querySelector(el);
        }
        /*
         *  current function
         * -------------------------------------------------------*/
        function _current(elem){
          var numItems = elem.length,
              itemToShow = Math.abs(counter%numItems);
          Array.prototype.forEach.call(elem,function(obj,index){
            obj.classList.remove('show');
          })
          elem[itemToShow].classList.add('show');  
        }


    </script>
    
    <!-- Slide show ends herte:-->
        <script src="main.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>

</html>