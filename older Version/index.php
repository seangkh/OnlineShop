<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Shop</title>
    <link rel="icon" href="img/Book-icon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/menubar-script.js"></script>
  </head>
  <body>
    <!-- for header -->
    <header>
      <!-- Header -->

        <figure class="background" >
          <img id="back" src="img/hinterbilder.jpg" alt="picture background" >

        <!-- for my topnav ( logo and Admin) -->
          <div class="topnav">
            <ul id="nav">
              <li><a href="#"> <span>--</span> </a></li>
              <li><span style="padding-left:;"></span></li>
              <li><a href="php/en.php"><img src="img/en.png" /></a></li>
              <li><a href="php/de.php"><img src="img/de.png"/></a></li>
                <li><a href="php/login.php"><img src="img/login.jpg"/></a></li>
            </ul>
          </div>
      </figure>

      <!-- Menubar -->
      <div id='cssmenu'>
      <ul>
         <li><a href='index.php'>Home</a></li>
         <li class='active'><a href='#'>Products</a>
            <ul>
               <li><a href='#'>Product 1</a>
                  <ul>
                     <li><a href='php/product-1.php'>Sub Product</a></li>
                     <li><a href='php/product-2.php'>Sub Product</a></li>
                  </ul>
               </li>
               <li><a href='#'>Product 2</a>
                  <ul>
                     <li><a href='php/product-3.php'>Sub Product</a></li>
                     <li><a href='php/product-4.php'>Sub Product</a></li>
                  </ul>
               </li>
            </ul>
         </li>
         <li><a href='php/about.php'>About</a></li>
         <li><a href='php/contact.php'>Contact</a></li>
      </ul>
      </div>
    </header>

    <!-- for the main body -->
    <article class="">
      <!-- First Photo Grid-->
       <div class="first-row">
         <div class="wrapper">
           <a href="#" traget=""></a>
           <img src="img/CD1.jpg" alt="just a photo" >
           <div class="text">
             <h3>Title</h3>
             <p>Details</p>
           </div>
         </div>
         <div class="wrapper">
           <a href="#" traget=""></a>
           <img src="img/CD2.jpg" alt="just a photo" >
           <div class="text">
             <h3>Title</h3>
             <p>Details</p>
           </div>
         </div>
         <div class="wrapper">
           <a href="#" traget=""></a>
           <img src="img/CD3.jpeg" alt="just a photo" >
           <div class="text">
             <h3>Title</h3>
             <p>Details</p>
           </div>
         </div>
         <div class="wrapper">
           <a href="#" traget=""></a>
           <img src="img/CD4.jpg" alt="just a photo" >
           <div class="text">
             <h3>Title</h3>
             <p>Details</p>
           </div>
         </div>

       </div>
<!--
       <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
      <div class="wrapper">
        <img src="img/CD3.jpeg" alt="New York" >
        <div class="w3-container w3-white">
          <p><b>New York</b></p>
          <p class="w3-opacity">Fri 27 Nov 2016</p>
          <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          <button class="" onclick="">Buy Tickets</button>
        </div>
      </div>
      <div class="wrapper">
        <img src="img/CD3.jpeg" alt="Paris" >
        <div class="w3-container w3-white">
          <p><b>Paris</b></p>
          <p class="w3-opacity">Sat 28 Nov 2016</p>
          <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          <button class="" onclick="">Buy Tickets</button>
        </div>
      </div>
      <div class="wrapper">
        <img src="img/CD3.jpeg" alt="San Francisco">
        <div class="w3-container w3-white">
          <p><b>San Francisco</b></p>
          <p class="w3-opacity">Sun 29 Nov 2016</p>
          <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          <button class="" onclick="">Buy Tickets</button>
        </div>
      </div>
    </div>
       <br> -->
       <hr>

       <p></p>
       <!-- Second Photo Grid-->
       <h2> Our Popular Products</h2>u
       <p></p>
      <div class="second-row">
        <div class="wrapper">
          <img src="img/CD1.jpg" alt="Popsicle" >
          <div class="text">
            <h3>Title</h3>
            <p>Price:---£</p>
          </div>
        </div>
        <div class="wrapper">
          <img src="img/CD2.jpg" alt="Salmon" >
          <div class="text">
            <h3>Title</h3>
            <p>Price:---£</p>
          </div>
        </div>
        <div class="wrapper">
          <img src="img/CD3.jpeg" alt="Sandwich" >
          <div class="text">
            <h3>Title</h3>
            <p>Price:---£</p>
          </div>
        </div>
        <div class="wrapper">
          <img src="img/CD4.jpg" alt="Croissant" >
          <div class="text">
            <h3>Title</h3>
            <p>Price:---£</p>
          </div>
      </div>
    </article>



    <!-- for the footer -->

    <footer>
        <nav class="first_footer">
          <div class="col1">
            <ul class="footer-list-menu">
              <li class="head-tiltle"><a href="php/about.php">About Us </a></li>

              <li><a href="php/contact.php">Contact Us</a></li>
            </ul>
          </div>

          <div class="col1">
            <ul class="footer-list-menu">
              <li class="head-tiltle" ><a href="#">Products </a></li>
              <li ><a href="#">Product-1</a></li>
              <li><a href="#">Product-2</a></li>
              <li><a href="#">Product-3</a></li>
            </ul>
          </div>


          <div class="col2">
            <div class="phone">
              <p> Tel:(+41) 12 3456 7891 </P>
              <p> Open day( Mon- Fri): 9:00 to 17:00 H </p>
            </div>

          </div>

        </nav><p>
        <nav id="second-footer">
          &copy; Online Shop  @ 2018-<?php echo date("Y");?>
        </nav>
</footer>




  </body>
</html>
