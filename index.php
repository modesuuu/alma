
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
  </head>
  <body>
    <!-- nav -->
    <nav class="">
      <div class="nav-logo">Happy nibbles</div>
      <div class="menu-buttons">
        <!-- drak mode -->
        <!-- menu btn --> 
        <input type="checkbox" id="ham-menu" />
        <label for="ham-menu" class="menu-btn">
        <i class="fa-solid fa-bars"></i>
        </label>
      </div>
      <ul id="nav-bar">
        <li><a class="active-menu" href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>

    <section class="container1" id="home">
      <div class="d-flex align-items-center">
        <div>
            <h1 data-aos="fade-up"> Your Belly Knows Best !</h1>
            <p> Rasakan kelembutan dalam setiap suapan dengan keju creamy yang lumer di mulut :)</p> 
            <button class="btn"> BuY nOw !</button>
        </div>

        <div class="">
          <img class="img rounded-circle" src="creamy-jasuke-foto-resep-utama.jpg" alt="pp">
        </div>    
      </div>
    </section>

    <section class="container1">
      <div class="d-flex align-items-center justify-content-between">
        <div class="img_hero">
          <img class="image" src="removebg.png" alt="">
        </div>
        <div>
          <span> about us </span>
          <h1 data-aos="fade-up"> satu rasa, sejuta kenangan >_< </h1>
          <p  class="deskripsi"> Selamat datang di Happy Nibbles! Kami menyajikan jasuke creamy yang lezat, perpaduan sempurna antara jagung manis dan krim yang lembut. Setiap suapan memberikan kenikmatan yang tak terlupakan, cocok untuk camilan manis di setiap momen. Cobalah kelezatan kami dan buat hari Anda lebih ceria dengan Happy Nibbles</p>
          <button></button>
        </div>
      </div>
    </section>
    <!-- javasprite -->
    <script src="main.js"></script>
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script> 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
