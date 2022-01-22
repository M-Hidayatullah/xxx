<?php 

$conn = mysqli_connect("localhost", "root", "", "db_uas");

$result = mysqli_query($conn, "SELECT * FROM project");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result) ) {

      $rows[] = $row;

  }

  return $rows;

}


function cari($keyword) {

  $query = "SELECT * FROM project
  WHERE
  id LIKE '%$keyword%'";

  return query($query);
}


// ketika tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $result = cari($_POST["keyword"]); 
}




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"
      integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ=="
      crossorigin="anonymous"
    />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>My Portfolio | M.Hidayatullah</title>
  </head>
  <body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">M.Hidayatullah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="admin/login.php">Login</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-warning" type="submit" name="cari">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/dayat.jpg" alt="M.Hidayatullah" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">M.Hidayatullah</h1>
      <p class="lead">Mahasiswa | 1901010263 | Ilmu Komputer</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="10"
          d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,80C672,64,768,64,864,96C960,128,1056,192,1152,186.7C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col" data-aos="fade-down">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4" data-aos="fade-right">
            <p>Hello My name is M. Hidayatullah I am currently a student at Bumigora University majoring in computer science semester 5</p>
          </div>
          <div class="col-md-4" data-aos="fade-left">
            <p>On campus, I am active in several SME programs, one of which is Community Programming and Google Developer Student Club.</p>
          </div>
          <div class="col-md-4" data-aos="fade-left">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos cupiditate fugit suscipit atque quaerat possimus iste deleniti veniam ducimus.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="10"
          d="M0,96L48,122.7C96,149,192,203,288,192C384,181,480,107,576,80C672,53,768,75,864,101.3C960,128,1056,160,1152,165.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->
   

    <!-- Projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
       
        <div class="row justify-content-center">
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
          <div class="col-md-4 mb-3" data-aos="flip-right">
            <div class="card">
              <img src="admin/gambar/<?php echo $row['gambar']; ?>" class="card-img-top" alt="Project 1" />
              <div class="card-body">
                <h6 class="card-text text-center"><?=  $row['description']; ?> </h6>
                <a href="#" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>  
          <?php endwhile; ?>
          <div class="col-md-4 mb-3" data-aos="flip-right" data-aos-delay="500">
          </div>
           </div>
           </div> 
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="10"
          d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,181.3C420,181,480,235,540,261.3C600,288,660,288,720,272C780,256,840,224,900,218.7C960,213,1020,235,1080,245.3C1140,256,1200,256,1260,250.7C1320,245,1380,235,1410,229.3L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Projects -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Terimakasih!</strong> Pesan anda sudah kami terima.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form name="portfolio-contact-form">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" required/>
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3" name="pesan" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="10"
          d="M0,128L30,149.3C60,171,120,213,180,224C240,235,300,213,360,192C420,171,480,149,540,160C600,171,660,213,720,197.3C780,181,840,107,900,101.3C960,96,1020,160,1080,197.3C1140,235,1200,245,1260,234.7C1320,224,1380,192,1410,176L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.github.com/M-Hidayatullah/" target="_blank" class="text-white fw-bold">M.Hidayatullah</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>


    <!-- animasi aos -->
    <script>
      gsap.from('.img-thumbnail', { duration: 2, rotationX: 360 });
      gsap.from('.navbar', { duration: 1.5, opacity: 0, y: '-100%', ease: 'bounce' });
      gsap.from('.display-4', { delay: 1, duration: 1, opacity: 0, x: '-10%' });

      gsap.registerPlugin(TextPlugin);
      gsap.to('.lead', { delay: 1.5, duration: 4, text: 'Mahasiswa | 1901010263 | Ilmu Komputer' });

      const galleryImages = document.querySelectorAll('.gallery-img');
      const delayTimes = [0, 50, 100, 150, 200, 250, 300, 350, 400, 450];

      function shuffleArray(array) {
        for (var i = array.length - 1; i > 0; i--) {
          var j = Math.floor(Math.random() * (i + 1));
          var temp = array[i];
          array[i] = array[j];
          array[j] = temp;
        }
        return array;
      }
      const newDelay = shuffleArray(delayTimes);
      galleryImages.forEach((img, i) => {
        img.dataset.aos = 'fade-up';
        img.dataset.aosDelay = i * 50 + '';
        
      });

      AOS.init({
        once: true,
        duration: 3000,
      });
    </script>

    <!-- form contact -->
    <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzv8m1mP9OGpwVoYL3moii99XLVF5MCuTycZgXXOyFbrdO4CmJ-ztyRDjo77bGQ7NZx/exec'
  const form = document.forms['portfolio-contact-form']
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const myAlert = document.querySelector('.my-alert');

  form.addEventListener('submit', e => {
    e.preventDefault()
   // ketika tombol submit diklik
        // tampilkan tombol loading, hilangkan tombol kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        fetch(scriptURL, { method: 'POST', body: new FormData(form) })
          .then((response) => {
            // tampilkan tombol kirim, hilangkan tombol loading
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            // tampilkan alert
            myAlert.classList.toggle('d-none');
            // reset formnya
            form.reset();
            console.log('Success!', response);
          })
          .catch((error) => console.error('Error!', error.message));
      });
</script>

   
  </body>
</html>
