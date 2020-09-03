<?php

include 'header.php';
include 'footer.php';
include 'functions/functions.php';
global $con;

// Cart Session starts here
include 'functions/cartSessions.php';
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
           <div class="row body"style="padding-top: 20px;padding-bottom:60px;">
                  <!-- Products-->
                  <?php 
                            $proCat = 3;
                            $size = 3;
                            getPro($proCat, $size); 
                        ?>
                   
            </div>

            <!-- Black soap descript/information -->
            <div class="row body comfortaa" style="padding: 60px 5% 40px 5%; border-top: 2px solid white;">

              <h4>1. It's antibacterial</h4>
              <br>
              <p>Natural antibacterial properties make African black soap an excellent alternative to chemical-laden cleansers. In fact, it may actually remove more bacteria than chemical cleansers do. Despite its strength, black soap is gentle enough to use on your face, hands, and body.</p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>

              <h4>2. It's safe for all skin types</h4>
              <br>
              <p>If you have dry or sensitive skin, you know that scented soaps and lotions are off-limits. African black soap is naturally fragrance-free — just make sure your chosen product is labeled "unscented."<br><br>
              People with oily or combination skin are also in the clear! Black soap can help balance your skin's natural oil production without stripping necessary oils or adding excess oil to your skin.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>

              <h4>3. It's moisturizing</h4>
              <br>
              <p>Shea butter is a crucial ingredient in black soap. While shea can help relieve itchiness and soothe dry skin, cocoa and coconut oil add moisture.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>

              <h4>4. It won't make your skin oily</h4>
              <br>
              <p>If you have combination skin, this makes choosing the right soap that much easier. Shea may add moisture, but coconut oil may help prevent overactive oil glands.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>

              <h4>5. It helps soothe irritation</h4>
              <br>
              <p>African black soap may also soothe itchiness and irritation caused by eczema, contact dermatitis, and skin allergies. It may even help clear rashes related to eczema and psoriasis. To maximize these benefits, find a soap with oatmeal added.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>

              <h4>6. It's anti-inflammatory</h4>
              <br>
              <p>Black soap is rich in vitamins A and E. These vitamins are both antioxidants, which help combat free radicals and attacks on otherwise healthy skin tissues. This may be helpful for people who have inflammatory conditions like rosacea.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>

              <h4>7. It helps fight acne</h4>
              <br>
              <p>On that note, black soap may also help fight acne. In addition to balancing your skin's natural oils, the soap's shea content may help repair damaged cells. Its antimicrobial properties may even clear severe acne caused by Propionibacterium acnes bacteria.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>
              
              <h4>8. It may help reduce fine lines</h4>
              <br>
              <p>Shea butter and coconut oil may help reduce collagen loss and encourage new development. In turn, this can help plump up fine lines and wrinkles. The rough texture of the soap can also exfoliate dead skin cells that make fine lines more noticeable.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>

              <h4>9. It helps protect against photoaging</h4>
              <br>
              <p>Antioxidants found in shea butter can help protect your skin from photoaging. Over time, sun exposure can cause sun spots (age spots), but black soap may offer another barrier.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>
              
              <h4>10. It helps improve skin texture</h4>
              <br>
              <p>African black soap is chock-full of natural ingredients, but part of its benefits come from its form. When left unprocessed, the raw ingredients that make up black soap leave the product far less smooth than the average drugstore soap bar. This makes it a natural exfoliant, which may help improve skin texture.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>

              <h4>11. It helps prevent razor burn and related rashes</h4>
              <br>
              <p>Exfoliation is another key factor in keeping your skin smooth after shaving, waxing, or other methods of hair removal. Exfoliating will help remove dead skin cells before they can clog your hair follicles. The moisture in African black soap may also help prevent the lumps and bumps that result from razor burn.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>
              
              <h4>12. It helps reduce hyperpigmentation</h4>
              <br>
              <p>Hyperpigmentation is often caused by acne scarring and sun damage — two things that African black soap may help soothe or prevent.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>

              <h4>13. It may help minimize the appearance of scars and stretch marks</h4>
              <br>
              <p>Thanks to its shea butter and vitamin E content, black soap may help reduce the redness and overall appearance of stretch marks and other scars. It may also help minimize related itchiness.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>

              <h4>14. It's antifungal</h4>
              <br>
              <p>One study on the effects of African black soap found the product effective for seven types of fungus — this includes the common Candida albicans yeast. You can safely use African black soap to help treat conditions like toenail fungus and athlete's foot.
              </p>
              <br>
              <div style="height:1px;width:100%;background-color:rgba(255, 255, 255, 0.4);"></div>
              <br>

              <h4>Where do all these benefits come from?</h4>
              <br>
              <p>The benefits of African black soap lie in its ingredients. This includes a combination of:
              </p>
              <ul class="blackSoapIngredientsList">
                <li style="margin: 10px 0">cocoa pods</li>
                <li style="margin: 10px 0">coconut oil</li>
                <li style="margin: 10px 0">palm tree leaf derivatives, including palm kernel oil and palm oil</li>
                <li style="margin: 10px 0">plantain bark, which contains iron, as well as vitamins A and E</li>
                <li style="margin: 10px 0">shea butter</li>
              </ul>
              <br>



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