<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <title>Admin Dashboard | Final Project | Luqman Elhakim Ibnu Hasan</title>
  <style>
    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    }
    .navbar {
      font-family: Garamond;
      background-color: #22428d;
    }
    #sidebar {
      background-color: #d8dbe2;
      padding-buttom: 3px;
    }
    .container-fluid {
      background-color: #a9bcd0;
    }
  </style>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['status']) != "login"){
            header("location:/finalproject/");
        }
        if(isset($_POST['submit'])){
            session_destroy();
            header("location:/finalproject/admin/");
        }

        include '../connection.php';

        $sql = "SELECT * FROM users";
        $datas = $conn->query($sql);
    ?>


    <!-- Awal Navbar -->
    <nav class="navbar navbar-dark p-3">
      <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
        <a href="dashboard.php" class="navbar-brand">
          <img src="../image/logo-dark-new.png" alt="Logo" width="100" class="d-inline-block align-text-top" style="margin-right: 10px; margin-left: 20px" />
           Admin Panel 
          </a>
        <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-touggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
        <div class="dropdown">
          <a href="#" class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
            Selamat Datang, <?php echo($_SESSION['username']) ?></a>
          <ul class="dropdown-menu">
            <li>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="logout_form" method="post">
                <button class="dropdown-item" type="submit" name="submit">Logout</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Sidebar -->
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
          <div class="position-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="/finalproject/admin/dashboard.php" class="nav-link active" aria-current="page">
                  <i class="fa-solid fa-home px-2"></i>
                  <span>Beranda</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/finalproject/admin/carousel/" class="nav-link" aria-current="page">
                  <i class="fa-solid fa-microchip px-2"></i>
                  <span>Carousel</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/finalproject/admin/headline/" class="nav-link" aria-current="page">
                  <i class="fa-solid fa-newspaper px-2"></i>
                  <span>Headline</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/finalproject/admin/encyclopedia/" class="nav-link" aria-current="page">
                  <i class="fa-solid fa-book px-2"></i>
                  <span>Encyclopedia</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/finalproject/admin/catalog/" class="nav-link" aria-current="page">
                  <i class="fa-solid fa-file-lines px-2"></i>
                  <span>Catalog</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/finalproject/admin/contact_us/" class="nav-link" aria-current="page">
                  <i class="fa-solid fa-message px-2"></i>
                  <span>Contact Us</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Akhir Sidebar -->

        <!-- Awal Manajemen User Admin-->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/finalproject/admin/dashboard.php">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="Page">Overview</li>
            </ol>
          </nav>
          <h1 class="h2">Beranda</h1>
          <p>Selamat Datang admin, ini adalah dashboard beranda manajemen admin.</p>

          <div class="row my-4">
            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="card">
                <h5 class="card-header text-center">Catalog 1</h5>
                <div class="card-body">
                  <h5 class="card-title">About Laptop</h5>
                  <p class="card-text">Seluruh berita atau artikel ter-<i>update</i> tentang laptop</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="card">
                <h5 class="card-header text-center">Catalog 2</h5>
                <div class="card-body">
                  <h5 class="card-title">About <i>true wireless stereo</i></h5>
                  <p class="card-text">Seluruh berita atau artikel ter-<i>update</i> tentang <i>true wireless stereo</i></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="card">
                <h5 class="card-header text-center">Catalog 3</h5>
                <div class="card-body">
                  <h5 class="card-title">About <i>smartphone</i></h5>
                  <p class="card-text">Seluruh berita atau artikel ter-<i>update</i> tentang <i>smartphone</i></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-9">
            <div class="card">
              <div class="card-body">
                <a href="create.php" class="btn btn-block button-blue mb-4 btn-primary" style="color: white;">Tambah Pengguna</a>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          foreach ($datas as $key => $data) {
                              echo '
                                  <tr>
                                      <td>'.($key+1).'</td>
                                      <td>'.$data['name'].'</td>
                                      <td>
                                      <a href="show.php?id='.$data['id'].'" class="btn btn-sm button-blue btn-primary" style="color: white;">Lihat</a>
                                      <a href="edit.php?id='.$data['id'].'" class="btn btn-sm button-blue btn-primary" style="color: white;">Edit</a>
                                      <a onclick="return confirm(`Apakah Anda yakin?`)" href="delete.php?id='.$data['id'].'" class="btn btn-sm button-blue btn-primary" style="color: white;">Hapus</a>
                                      </td>
                                  </tr>  
                              ';
                          }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Manajemen User Admin -->

          <!-- Awal Footer -->
          <footer class="pt-5 d-flex justify-content-between">
            <span>Copyright © 2022 <a href="/finalproject/">Here about Technology</a></span>
            <ul class="nav m-0">
              <li class="nav-item">
                <a href="#" class="nav-link text-secondary">Hubungi Kami</a>
              </li>
            </ul>
          </footer>
        </main>
      </div>
    </div>
    <!-- Akhir Footer -->

    <script
      src="https://cdnjs.cloudfare.com/ajax/libs/propper.js/2.11.5/umd/propper.min.js"
      integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudfare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"
      integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/6.1.2/js/fontawesome.min.js"
      integrity="sha512-TXHaOs+47HgWwY4hUqqeD865VIBRoyQMjI27RmbQVeKb1pH1YTq0sbuHkiUzhVa5z0rRxG8UfzwDjIBYdPDM3Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </body>
</html>
