<?php

include 'header.php';
include 'footer.php';
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
           
           <!-- About Us Starts Here -->
           
            <div class="row body" style="padding-top: 20px; padding-left: 10px;">
                <div class="col-sm-5">
                    <img src="img/sheahandnuts.jpg" class="whyRAB_Image" style="max-height:180px;">
                </div>
                <div class="col-sm-7" align="center">
                   <br>
                    <h2 class="large-header whitesmoke">About Us</h2>
                    <p class="comfortaa" align="left">New England Shea Butter sells 100% pure<br>
                    Shea Butter Products. </p><br>
                </div>
            </div>
            <div class="row body"style="padding-top: 20px; padding-left: 10px;">
                <h2 class="medium-header whitesmoke" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We carry:</h2><br>
                    <ul align="left" style="list-style:circle;">
                        <li class="comfortaa">Scented and unscented shea butter skin care</li>
                        <li class="comfortaa">A wonderful massage oil that is scented with Nag Champa fragrance for a sensual relaxing massage for your body and your mind.</li>
                        <li class="comfortaa">Luxurious lip balms in a variety of flavors. </li>
                        <li class="comfortaa">A fantastic ALL  NATURAL insect repellent which is great for any outdoor event and safe for kids.</li>
                        <li class="comfortaa">A large variety of fragrance oils that can be worn as perfume oil, or used in oil burners to scent your home.</li>
                        <li class="comfortaa">A variety of Nubian Heritage soaps that smell great and leave your skin feeling clean and moisturized.</li>
                        <li class="comfortaa">Raw African Black Soap that cleans, exfoliates, and refreshes your skin and is great as a deep facial cleanser!</li>
                        <li class="comfortaa">Wonderfully fragrant incense that burn for up to one hour!!</li>
                    </ul>
                    <br>
                    <p class="comfortaa">Our company began in 2004 as a small company that ocassionally did local festivals.  We have expanded into a well established on-line business and continue to participate in a variety of annual crafting events across New England.<br><br>
                    
                    Although our business continues to grow, we still make all of our New England Shea Butter products within the comforts of our own home. We continue to create products that will benefit your skin care needs. </p>
                    
            </div>
           <!-- footer-->
           <?php mainFooter()?>
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