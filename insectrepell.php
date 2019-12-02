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
    
           
           <div class="row body" style="padding-top: 30px;">
               <!-- Main Body Of the Page-->
               <div class="col-sm-6">
                   <div class="slideshow"style="max-height: 360px;">
                        <figure>
                            <img src="img/insect_repellent.jpg"/>
                            <figcaption>All Natural Insect Repellent</figcaption> 
                            </figure>

                            <figure>
                                <img src="img/insects.jpg"/>
                                <figcaption>NO DEET!</figcaption> 
                            </figure>


                            <figure>
                                <img src="img/mosquito.jpg"/>
                                <figcaption>No More Pesky Bugs!</figcaption> 
                            </figure>

            
            
                  <!--
                  
                  THESE BUTTONS ARE TEMPORARLY DISABLED, THEY ARE NEXT AND PREV BUTTONS FOR THE SLIDE SHOW.
                  <span class="prev"></span>
                  <span class="next"></span>-->
                    </div>
                    <div class="row" style="padding-top: 20px;">
                            <!-- Products-->
                            <?php 
                                $proCat = 7;
                                $size = 6;
                                getPro($proCat, $size); 
                            ?>  
                    </div>
               </div>
               <div class="col-sm-6" align="center">
                   <h2 class="medium-header whitesmoke">Exclusively at New England Shea Butter<br><br>100% "All Natural" Insect Repellent</h2>
                   <p class="comfortaa">A safe and effective way to repel bugs with a blend of essential oils proven to keep those pesky bugs away!!<br>
                                                        <br>
                                            Our "All Natural" Insect Repellent<br>  
                                            contains no chemicals!<br></p>
                    <h2 class="medium-header whitesmoke" style="text-transform: uppercase">no deet!</h2>
                    <p class="comfortaa">Say good riddance to mosquitoes, ticks, black flies, and other pesky bugs! One stick of our "ALL NATUARAL" repellent will last most adults one year. </p>
                    <br>
                    <p class="comfortaa"><b>Testimonial :</b><br><br>

            Jessi sent us this email about our natural repellent:<br><br>

            "Thank you so much for this  product!! I used it once at work and didn't think it worked because I was still bothered. However, yesterday and today I applied more to my arms, legs and neck and I didn't get a single bug bite, nor was I bothered by pesky mosquitoes. <br><br>

            I work as a gardener at a private estate, so I do a lot of various jobs in various areas including a large garden and the woods. Today my day started without this product and I was being attacked by mosquitoes.  So, I applied a liberal amount the insect repellent to my skin, anything that was showing. And for the rest of the day, I had no problems with the bugs. I didn't have to reapply even after it rained. <br><br>

            Also, it doesn't smell bad, just like a citronella candle and it feels nice on the skin."<br><br>
            </p>
               </div>
           </div>
           <!-- footer-->
           <?php mainFooter();?>
       <!-- end footer-->
       
       
       
       
        </div>
    </div>
        
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    </body>

</html>