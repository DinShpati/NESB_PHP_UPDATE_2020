<?php


function mainHeader(){

$header = "
<div class='bg-mb-rp' style=''>
   <div> <!-- extra div for background image -->
       
           <!--MOBILENAVBAR Starts Here-->
           <header class='header5' role='banner'>
    
            <nav id='nav' class='nav' role='navigation'>

              <!-- ACTUAL NAVIGATION MENU -->
              <ul class='nav__menu' id='menu' tabindex='-1' aria-label='main navigation' hidden>
                <li class='nav__item'><a href='index.php' class='nav__link'>Shea Butter</a></li>
                <li class='nav__item'><a href='Afterbath.php' class='nav__link'>AfterBath Oil</a></li>
                <li class='nav__item'><a href='AfricanBlackSoap.php' class='nav__link'>African Black Soap</a></li>
                <!--<li class='nav__item'><a href='RawHoney.php' class='nav__link'>Raw Honey</a></li>-->
                <!--<li class='nav__item'><a href='Blackseed.php' class='nav__link'>Black Seed Oil</a></li>-->
                <li class='nav__item'><a href='naturaloil.php' class='nav__link'>Natural Oils</a></li>
                <li class='nav__item'><a href='Incense.php' class='nav__link'>Incense</a></li>
                <li class='nav__item'><a href='insectrepell.php' class='nav__link'>Insect Repellent</a></li>
                <li class='nav__item'><a href='LipBalm.php' class='nav__link'>Lip Balms</a></li>
                <li class='nav__item'><a href='Shamp_Cond.php' class='nav__link'>Shampoo & Condtioner</a></li>
                <!--<li class='nav__item'><a href='Toothpaste.php' class='nav__link'>Toothpaste</a></li>-->
                <li class='nav__item'><a href='WhySB.php' class='nav__link'>Why Shea Butter?</a></li>
                <li class='nav__item'><a href='WhyRAB.php' class='nav__link'>Why Raw African Black Soap?</a></li>
                <li class='nav__item'><a href='AboutUs.php' class='nav__link'>About Us</a></li>
                <li class='nav__item'><a href='ContactUs.php' class='nav__link'>Contact Us</a></li>
                <li class='nav__item'><a href='Testimonials.php' class='nav__link'>Testimonials</a></li>
                <li class='nav__item'><a href='WhereToBP.php' class='nav__link'>Where to Buy our Products?</a></li>
              </ul>

              <!-- MENU TOGGLE BUTTON -->
              <h5 class='damion mobile__nav__text'>New England Shea Butter LLC</h5>
              <a href='cart.php' class='mobile__Shopping' target='_self'><i class='fas fa-shopping-cart'></i> <span style='color:forestgreen;font-weight: 700;' >Cart</span></a>
              <a href='#nav' class='nav__toggle' role='button' aria-expanded='false' aria-controls='menu'>
                <svg class='menuicon' xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'>
                  <title>Toggle Menu</title>
                  <g>
                    <line class='menuicon__bar' x1='13' y1='16.5' x2='37' y2='16.5'/>
                    <line class='menuicon__bar' x1='13' y1='24.5' x2='37' y2='24.5'/>
                    <line class='menuicon__bar' x1='13' y1='24.5' x2='37' y2='24.5'/>
                    <line class='menuicon__bar' x1='13' y1='32.5' x2='37' y2='32.5'/>
                    <circle class='menuicon__circle' r='23' cx='25' cy='25' />
                  </g>
                </svg>
              </a>

              <!-- ANIMATED BACKGROUND ELEMENT -->
              <div class='splash'></div>

            </nav>
    
  </header>
   <!-- MOBILE NAVBAR Ends HERE-->
   <div class='container-fluid header1'>
           <div class='row header2' >
              
                
               <div class='col-sm-7' style='margin-top: 40px;'>
                   <img src='img/halal.png' alt='Halal' width='50px' height='50px' class='display-none'/>
                   <br/><br/>
                   <p class='damion text1'>New England Shea Butter LLC</p>
                   
                   <p class='text2'>'A name you can trust at a price you can afford'
                    </p>
                    <p style='color:white; font-family: sans-serif;' class='numnum'>917-803-6734</p>
                    <p class='nesbmail1'><b>NESB.SALES@Gmail.com</b></p>
                    
               </div>
               <!--<div class='col-sm-2 display-none' style='margin-top: 10px;'>
                   <p class=''><b>917-803-6734</b></p>
                </div>
               </div>-->
               <div class='col-sm-5 display-none' style='margin-top: 10px;'>
                   <p class='nesbmail' style='color: white;text-shadow: 3px 3px 9px #000;'><b>NESB.SALES@Gmail.com</b></p>
                   <img src='img/sheawithspoon.jpeg' alt='NESB' width='272px'height='175'>
               </div>
               <nav class='navbar navbar-light navbar-bg navbar-expand-lg' id='navbar'>
                      
                       <a href='index.php' class='nav-button nav-link'>Shea Butter</a>
                       <a href='Afterbath.php' class='nav-button nav-link'>AfterBath Oil</a>
                       <a href='AfricanBlackSoap.php' class='nav-button nav-link'>African Black Soap</a>
                       <a href='Shamp_Cond.php'class='nav-button nav-link'>Shampoo & Condtioner</a>
                       <!--<a href='RawHoney.php' class='nav-button nav-link'>Raw Honey</a>-->
                       <!--<a href='BlackSeed.php' class='nav-button nav-link'>Black Seed Oil</a>-->
                       <a href='naturaloil.php' class='nav-button nav-link'>Natural Oils</a>
                       <a href='Incense.php' class='nav-button nav-link'>Incense</a>
                       <div class='dropdown'>
                        <button class='dropbtn nav-button nav-link'>More 
                          <i class='fa fa-caret-down'></i>
                        </button>
                        <div class='dropdown-content'>
                          <a href='insectrepell.php'class='nav-button nav-link'>Insect Repellent</a>
                          <a href='LipBalm.php'class='nav-button nav-link'>Lip Balms</a>
                          <!--<a href='#'class='nav-button nav-link'>Toothpaste</a>-->
                          <a href='WhySB.php'class='nav-button nav-link'>Why Shea Butter?</a>
                          <a href='WhyRAB.php'class='nav-button nav-link'>Why Raw African Black Soap?</a>
                          <a href='AboutUs.php'class='nav-button nav-link'>About Us</a>
                          <a href='ContactUs.php'class='nav-button nav-link'>Contact Us</a>
                          <a href='Testimonials.php'class='nav-button nav-link'>Testimonials</a>
                          <a href='WhereToBP.php'class='nav-button nav-link'>Where to Buy our Products?</a>
                        </div>
                      </div>
                      <a href='cart.php' class='nav-button nav-link' target='_self'><i class='fas fa-shopping-cart'></i> <span style='color:forestgreen;font-weight: 700;'>Cart</span></a>
                       
               </nav>
               
           </div>";

           echo "$header";
        }
    
?>