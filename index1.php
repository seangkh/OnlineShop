<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Online Shop</title>
    <link rel="icon" href="img/Book-icon.png">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
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
           <a href="#" traget="#"></a>
           <img src="img/CD1.jpg" alt="just a photo" width="300" height="400" >
           <div id="text">
             <h3>Title:</h3>
             <p>Details</p>
             <button class="btn" onclick="">Buy Tickets</button>
           </div>
         </div>
         <div class="wrapper">
           <a href="#" traget="#"> <img src="img/CD2.jpg" alt="just a photo" width="300" height="400" ></a>
           <div id="text">
             <h3>Title:</h3>
             <p>Details</p>
             <button class="btn" onclick="">Buy Tickets</button>
           </div>
         </div>
         <div class="wrapper">
           <a href="#" traget="#">
              <img src="img/CD3.jpeg" alt="just a photo"  width="300" height="400">
           </a>
           <div id="text">
             <h3>Title:</h3>
             <p>Details</p>
             <button class="btn" onclick="">Buy Tickets</button>
           </div>
         </div>
         <div class="wrapper">
           <a href="#" traget="">
             <img src="img/CD4.jpg" alt="just a photo"width="300" height="400" >
           </a>
           <div id="text">
             <h3>Title:</h3>
             <p>Details</p>
             <button class="btn" onclick="">Buy Tickets</button>
           </div>
         </div>
       </div>

       <hr>
       <p> <h2> Our Popular Products</h2></p>
       <hr>
       <p></p>
       <!-- Second Photo Grid-->

      <div class="second-row">
        <div class="wrapper">
          <img src="img/CD1.jpg" alt="just a photo"  width="300" height="400">
          <div class="text">
            <h3>Title</h3>
            <p>Price:---£</p>
          </div>
        </div>
        <div class="wrapper">
          <img src="img/CD2.jpg" alt="just a photo" width="300" height="400" >
          <div class="text">
            <h3>Title</h3>
            <p>Price:---£</p>
          </div>
        </div>
        <div class="wrapper">
          <img src="img/CD3.jpeg" alt="just a photo" width="500" height="400" >
          <div class="text">
            <h3>Title</h3>
            <p>Price:---£</p>
          </div>
        </div>
        <div class="wrapper">
          <img src="img/CD4.jpg" alt="just a photo"  width="300" height="400">
          <div class="text">
            <h3>Title</h3>
            <p>Price:---£</p>
          </div>
        </div>
      </div>
    </article>



    <!-- for the footer -->

    <footer>
        <nav class="first_footer">
          <div class="col1">
            <ul class="footer-list-menu">
              <li class="head-tiltle"><a href="php/about.php"><span>About Us</span> </a></li>

              <li><a href="php/contact.php"><span>Contact Us</span></a></li>
            </ul>
          </div>

          <div class="col1">
            <ul class="footer-list-menu">
              <li class="head-tiltle" ><a href="#"> <span>Hand Made</span> </a></li>
              <li ><a href="#"><span>Mashine Made</span></a></li>

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
          &copy; Online Shop  @ 2018
        </nav>
</footer>




  </body>
</html>
