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
           
           <!-- Everything in between Here-->
           
            <div class="row body">
                
                <div class="col-sm-5" style="padding-top: 20px;">
                    <h2 class="large-header whitesmoke">Why Raw Shea Butter?</h2>
                    <img src="img/whySB.jpg" alt="Raw African Shea Butter" class="whySB_Image">
                </div>
                <div class="col-sm-7">
                    <br><br>
                        <h2 class="large-header"style="color: rgb(144, 161, 40);">Why Shea Butter?</h2>
                        <p class="comfortaa">Shea Butter is a product of the Shea Tree (Butyrospermum Parkii), also know as the Karité Tree. The Shea Tree grows in the Savanna Grasslands of West Africa. It is a wild growing tree that produces a fruit from which the Shea Butter is extracted.
                        Shea Butter is a natural healing product that has been used by Africans for thousands of years. It is most effective as a skin moisturizer and conditioner due to its high content of non-saponifiabe fats.
                        Shea Butter is an all natural product, no chemicals, no alcohol, no petroleum! It protects, heals, and improves the quality of your skin better than any other presently known product!!!<br><br>
                        Shea Butter contains: </p>
                </div>
                
            </div>
            <div class="row body" style="padding-left: 20px;padding-bottom: 70px;">
                <p class="comfortaa">
                    <b>Non-saponifiable fatty acids: </b><br>
                    Shea butter contains the highest amount of non-saponifiable fatty acids. Between 7-12% non-saponifiable fatty acids are found in good quality Shea Butter. This is far higher than avocado (2-4%) and soybean oils being researched by rheumatologists for their ability to reduce inflammation. 
                    The high percentage of non-saponifiables found in Shea Butter contribute to its ability to heal eczema, psoriasis, rashes, severe dry skin, burns, wounds, parasitic infections, and more.<br><br>
                </p>
                <p class="comfortaa">
                    <b>Vitamins A & E:</b><br>
                    Shea Butter is very high in vitamins A & E. Shea Butter is highly effective in cell regeneration and anti-aging. Shea Butter greatly improves the look and feel of skin. After a few days of use your skin will look and feel noticeably younger and healthier.<br><br>
                </p>
                <p class="comfortaa">
                    <b>Stigmasterol:</b><br>
                        Known as the "anti-stiffness factor", stigmasterol provides Shea Butter with the ability to relax tired muscles as well as provide relief for swelling and arthritis.
                </p>
            </div>
           
           <!-- Everything in between Here-->
           
           <!-- footer-->
           <?php mainFooter();?>
       
       
       
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