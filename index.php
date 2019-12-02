<?php

include 'header.php';
include 'footer.php';
include 'functions/functions.php';

?>

<!doctype html>
<html>
<head>
    
    <title>New England Shea Butter</title>
    
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
    <meta name="description" content="New England Shea Buttter, We Sell All Natural Raw African Shea Butter, Black Soap, AfterTheBath Q2000 moisturizer, All Natural Oils, Message Oil, and Much more!">
    <meta name="og:title" content="New England Shea Butter">
    <meta property="og:description" content="100% All Natural Shea Butter at its Finest, The best product for all
    your skins needs!">
    <meta property="og:image" content="https://nesheabutter.com/img/Shea.jpg">
    

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
<body lang="en">
        
        <!-- Navigation Bar -->
        <?php mainHeader() ?>

           <!-- Slide Show Start -->
           <div class="row body">
              <div class="slideshow">
                <figure>
                    <img src="img/argan1-2.jpg"/>
                    <figcaption>Shea Nuts</figcaption> 
                    </figure>

                    <figure>
                        <img src="img/Shea-Butter-Wallpaper-Free.jpeg"/>
                        <figcaption>100% Raw Grade A, Shea Butter</figcaption> 
                    </figure>


                    <figure>
                        <img src="img/Shea.jpg"/>
                        <figcaption>New England Shea Butter</figcaption> 
                    </figure>



                    <figure>
                        <img src="img/Karite_Tree.jpg"/>
                        <figcaption>Shea Tree(Karite Tree)</figcaption> 
                    </figure>

            
            
                  <!--
                  
                  THESE BUTTONS ARE TEMPORARLY DISABLED, THEY ARE NEST AND PREV BUTTONS FOR THE SLIDE SHOW.
                  <span class="prev"></span>
                  <span class="next"></span>-->
            </div>  
           </div>
           <!-- Slide Show End -->
           <!--Body(Content Start)-->
           <div class="row body">
               
               <h2 class="mainHeader"style="margin-top: 10px;margin-left: 10px;"><b>New England Shea Butter LLC.</b></h2>
               
           </div>
           
           <!-- products-->
           
               <div class="row body">
                    <?php 
                    $proCat = 1;
                    $size = 3;
                    getPro($proCat, $size); 
                    ?>
               </div>
               <!-- End Of products-->
               
               <!-- Shea Butter Description-->
               <div class="row body"style="padding-top: 40px;">
                   <div class="col-sm-4">
                       <img src="img/WhiteSheaButter.jpg" class="bigpic" width="220px" alt='New England Shea Butter LLC,.'/>
                   </div>
                   
                   <div class="col-sm-8 comfortaa"style="font-weight: bold;">
                       <br><span style="color: rgb(250, 237, 147); font-weight: bold; text-align: center; background-color: transparent;">
                           All international customers please call or send an email for precise shipping costs.
                       </span></p>
                       <h4>New England Shea Butter LLC.</h4><br>
                       <p><span style="color: rgb(250, 237, 147); font-weight: bold; text-align: center; background-color: transparent;">
                           Your source for 100% Pure Shea Butter Products!

                       </span>
                       <br><br><br>
                       Shea Butter is your skin's best friend. It closely resembles our body's natural oil which makes it more prone to get absorbed deep into all seven layers of our skin. It has natural medicinal properties and is naturally high in vitamins A, E, and F.  These properties aid in healing wounds, scars, stretch marks, blemishes, Eczema, and Psoriasis. It naturally repels insects and has 15 SPF to aid in sun protection.  
                       </p>
                   </div>
               </div><!-- Continue description on another line-->
               <div class="row body comfortaa"style="padding:0 0 10px 10px">
                   <p>Raw Shea Butter is naturally high in stigmasterol, which is an anti-inflammatory and aids in relieving joint pain, muscle pain and arthritic pain. Shea butter is an off-white or yellow fatty substance which obtained from the nuts of the shea tree from West Africa, typically used in cosmetic and natural skin care products. Full of all-natural vitamin A, 100 percent pure, unrefined, raw shea butter aids in numerous skin conditions such as blemishes and wrinkles, stretch mark prevention during pregnancy, muscle fatigue, dermatitis, and radiation treatments for certain medical problems.

                    Indeed, because raw shea butter is extremely moisturizing and very hydrating, when applied to the skin, it provides immediate softness and smoothness. But it has other proven benefits.<br>

                    The National Center for Biotechnology Information published a study indicating that shea nuts and shea fat (shea butter) constitute a significant source of anti-inflammatory and anti-tumor promoting compounds. Another study from the American Journal of Life Sciences claims that shea butter boosts collagen production, demonstrating anti-aging properties.<br>

                    Nutritional Background of Raw Shea Butter<br>
                    Raw shea butter is rich in stearic, oleic acids and benefit-rich vitamin E and vitamin A. The shea tree is used as a source of vegetable oil containing about 45–50 percent oleic acid, 30–41 percent stearic acid, 5–9 percent palmitic acid and 4–5 percent linoleic acid. The best shea butter is extracted using cold pressed methods without added chemicals or preservatives.
                    <br>
                    Shea butter is smooth in texture and does not liquify at room temperatures; however, it will soften in your hands, making it easy to apply. Containing vitamins A and E, it has relatively high amounts of saturated fatty acids (like MCT oil) when compared to other plant-sourced lipids, such as grape seed oil, olive oil and canola oil.<br>
                    <br>
                    Cosmeticsinfo.org reports that The Food and Drug Administration includes shea nut oil on its list of direct food substances affirmed at Generally Recognized as Safe (GRAS). While it is more common in beauty products, shea butter is often found in a variety of confections and chocolate as a cocoa butter substitute.<br>
                    <br>
                    The safety of raw shea butter and related forms has been assessed by the Cosmetic Ingredient Review (CIR) Expert Panel, and they note its popularity in cosmetics and personal care products as compared to many other oils with a total of 1,950 products, with 1,680 of those uses in leave-on formulations. They also note that “a recent survey of use concentrations for shea butter reports a maximum use concentration of 60 percent in leave-on products.”<br>
                    <br>
                    The Journal of Oleo Science reported that through its studies, shea nuts and shea fat (shea butter) was found to reduce inflammation. The studies also showed that shea butter contains a significant source of anti-tumor promoting compounds such as cinnamate esters, which also make up the health benefits of cinnamon.<br>
                    <br><br>

                    More benefits of Raw Shea Butter are listed at the bottom of this page.  </p>
               </div>
               <!--more description for shea butter-->
               <div class="row body"style="color: white; padding:0 0 10px 10px;">
                   <p><b>Additional Shea Butter Uses:</b></p>
               </div>
               <div class="row body" style="color: white; padding:0 0 10px 10px;">
                   <div class="col-sm-3"><ul>
                   <li>Psoriasis</li>
                        <li>Razor Burns</li>
                        <li>Dermatitis</li>
                        <li>Eczema</li>
                        <li>Cold Sores</li>
                        <li>Skin Allergies</li>
                        <li>Rosacea</li>
                        <li>Chapped Lips</li>
                       </ul>
                   </div>
                   <div class="col-sm-3">
                       <ul>
                           <li>Scleroderma</li>
                        <li>Age Marks </li>
                        <li>Dandruff</li>
                        <li>Livestock Teats</li>
                        <li>Stretch Marks</li>
                        <li>Scars & Wounds</li>
                        <li>Facial Rejuvenation</li>
                        <li>Athletes Foot</li>
                       </ul>
                   </div>
                   <div class="col-sm-3">
                      <ul>
                       <li>Diaper Rash</li>
                        <li>Sunburns</li>
                        <li>Nasal Congestion</li>
                        <li>Hemorrhoids</li>
                        <li>Windburn</li>
                        <li>Burns (Moderate) </li>
                        <li>Skin Cracks </li>
                        <li>Protects Leather Products</li>
                   </ul>
                   </div>
                   <div class="col-sm-3"></div>

               </div>
           <!-- footer-->
           <?php mainFooter();?>
       <!-- end footer-->
       
       
       
       
        </div>
        <!-- nothing should be outside of this-->
    </div>
       
           <script>
               /*
           window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar2");
        var sticky = navbar.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }*/
        </script>
        
        <script src="main.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>

</html>