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

    <div class="header-book">
      <div class="header-content">
        <h2>Explore The Colorful World</h2>
        <div class="line"></div>
        <h1>BOOK YOUR TRIP</h1>
      </div>
    </div>

    <section class="booking">
        <h1 class="heading-title">Book Your Trip Now!</h1>
        <form action="book-form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="your name" name="name" required>
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="your email" name="email" required>
                </div>
                <div class="inputBox">
                    <span>Phone :</span>
                    <input type="number" placeholder="your number" name="phone" required>
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="your address" name="address" required>
                </div>
                <div class="inputBox">
                    <span>Where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location" required>
                </div>
                <div class="inputBox">
                    <span>How many :</span>
                    <input type="number" placeholder="number of guests" name="guests" required>
                </div>
                <div class="inputBox">
                    <span>Arrivals :</span>
                    <input type="date" name="arrivals" required>
                </div>
                <div class="inputBox">
                    <span>Leaving :</span>
                    <input type="date" name="leaving" required>
                </div>
            </div>
            <button type="submit" value="submit" class="btn" name="send" onclick="AlertMsg()">Submit</button>
            <!-- <input type="submit" value="submit" class="btn" name="send"> -->
        </form>
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

      function AlertMsg() {
        alert('successfully sent form');
      }
    </script>
  </body>
</html>
