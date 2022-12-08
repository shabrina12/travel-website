<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Travel</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../style.css">
  </head>

  <body>
    <nav class="navbar">
      <h1 class="logo">ADVENTURE</h1>
      <ul class="nav-links">
        <li class="active"><a href="index.php">Home</a></li>
        <!-- <li><a href="about.php">About</a></li> -->
        <li><a href="tour.php">Tour</a></li>
        <li class="ctn"><a href="book.php">Book</a></li>
      </ul>
      <img src="../images/menu-btn.png" alt="" class="menu-btn">
    </nav>

    <div class="header-tour">
      <div class="header-content">
        <h2>Explore The Colorful World</h2>
        <div class="line"></div>
        <h1>TOUR PACKAGES</h1>
      </div>
    </div>

    <section class="packages">
        <h1>Top Destinations</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="../images/bali.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Bali, Indonesia</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="ctn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/venice.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Venice, Italy</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="ctn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/phuket.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Phuket, Thailand</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="ctn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/berlin.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Germany</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="ctn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/swiss.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Switzerland</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="ctn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/japan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Japan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="ctn">book now</a>
                </div>
            </div>
        </div>

        <!-- <div class="load-more"><span class="ctn">load more</span></div> -->
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
        navbar.classList.toggle ("sticky", window.scrollY > 50);
      })
    </script>
  </body>
</html>
