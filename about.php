<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Travel</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <nav class="navbar">
      <h1 class="logo">ADVENTURE</h1>
      <ul class="nav-links">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="tour.php">Tour</a></li>
        <li class="ctn"><a href="book.php">Book</a></li>
      </ul>
      <img src="images/menu-btn.png" alt="" class="menu-btn">
    </nav>

    <div class="header-about">
      <div class="header-content">
        <h2>Explore The Colorful World</h2>
        <div class="line"></div>
        <h1>ABOUT US</h1>
      </div>
    </div>

    <section class="about">
        <div class="image">
            <img src="images/people.jpg" alt="">
        </div>

        <div class="content">
            <h3>Why Choose Us?</h3>
            <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
            </p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
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
        navbar.classList.toggle ("sticky", window.scrollY > 50);
      })
    </script>
  </body>
</html>
