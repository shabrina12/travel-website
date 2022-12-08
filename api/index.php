<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADVENTURE</title>
    <link rel="stylesheet" href="../style.css">
  </head>

  <body>
    <nav class="navbar">
      <h1 class="logo">ADVENTURE</h1>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <!-- <li><a href="about.php">About</a></li> -->
        <li><a href="tour.php">Tour</a></li>
        <li class="ctn"><a href="book.php">Book</a></li>
      </ul>
      <img src="../images/menu-btn.png" alt="" class="menu-btn">
    </nav>

    <header>
      <div class="header-content">
        <h2>Explore The Colorful World</h2>
        <div class="line"></div>
        <h1>A WONDERFUL GIFT</h1>
        <a href="#" class="ctn">Learn More</a>
      </div>
    </header>

    <!-- SECTION EVENTS -->
    <section class="events">
      <div class="title">
        <h1>Upcoming Events</h1>
        <div class="line"></div>
      </div>
      <div class="row">
        <div class="col">
          <img src="../images/img1.png" alt="">
          <h4>Everest Camp Trek</h4>
          <p>Lorem askfkfi aknfbjfidf kasnliofibdn ksbjdfbdifb</p>
          <a href="#" class="ctn">Learn More</a>
        </div>
        <div class="col">
          <img src="../images/img2.png" alt="">
          <h4>Walking Holidays</h4>
          <p>Lorem askfkfi aknfbjfidf kasnliofibdn ksbjdfbdifb</p>
          <a href="#" class="ctn">Learn More</a>
        </div>
      </div>
    </section>

    <section class="explore">
      <div class="explore-content">
        <h1>EXPLORE THE WORLD</h1>
        <div class="line"></div>
        <p>lorem impsum dolor sit kskafka fkanfefnei feknfie</p>
        <a href="about.php" class="ctn">About Us</a>
      </div>
    </section>

    <section class="tours">
      <div class="row">
        <div class="col content-col">
          <h1>UPCOMING TOURS & DESTINATION</h1>
          <div class="line"></div>
          <p>lorem impsum dolor sit kskafka fkanfefnei feknfi lorem impsum dolor sit kskafka fkanfefnei feknfi</p>
          <a href="tour.php" class="ctn">Tour Packages</a>
        </div>
        <div class="col image-col">
          <div class="image-gallery">
            <img src="../images/img3.png" alt="">
            <img src="../images/img4.png" alt="">
            <img src="../images/img5.png" alt="">
            <img src="../images/img6.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <p>123 Ngurah Rai, 10160 Bali, Indonesia| Phone: 0000-1234-5678 | Email: contactme@gmail.com</p>
      <p>Copyright 2022 Outdoor Adventure</p>
    </section>

    <script type="text/javascript">
      const menuBtn = document.querySelector('.menu-btn')
      const navlinks = document.querySelector('.nav-links')

      menuBtn.addEventListener('click',()=>{
        navlinks.classList.toggle('mobile-menu')
      })

      window.addEventListener("scroll", function(){
        var navbar = document.querySelector(".navbar");
        navbar.classList.toggle ("sticky", window.scrollY > 100);
      })
    </script>
  </body>
</html>
