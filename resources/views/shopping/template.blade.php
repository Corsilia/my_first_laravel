<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>

    @yield('pageTitle')

  </title>
  {{-- 頁面共通CSS --}}
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Fontawesome Css -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/da58ed1c4d.css" crossorigin="anonymous">

  {{-- 各頁面專屬CSS --}}
    @yield('css')

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/shopping"><img src="{{asset('img/bs_img/logo.svg')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item  px-3 nav_text d-flex align-items-center justify-content-center">
              <a class="nav-link fw-bold" aria-current="page" href="#" style="color:#374151; font-size: 14px;">Blog</a>
            </li>
            <li class="nav-item px-3 nav_text d-flex align-items-center justify-content-center">
              <a class="nav-link fw-bold" href="#" style="color:#374151; font-size: 14px;">Portfolio</a>
            </li>
            <li class="nav-item px-3 nav_text d-flex align-items-center justify-content-center">
              <a class="nav-link fw-bold" href="#" style="color:#374151; font-size: 14px;">About</a>
            </li>
            <li class="nav-item px-3 nav_text d-flex align-items-center justify-content-center">
              <a class="nav-link fw-bold" href="#" style="color:#374151; font-size: 14px;">Contact</a>
            </li>
            <li class="nav-item pe-lg-3 py-2 d-flex align-items-center justify-content-center">
              <a class="nav-link px-3" href="/checkout1">
                <i class="fas fa-shopping-cart" style="color:#374151; font-size:24px;"></i>
              </a>
              <a class="nav-link px-3 dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-circle" style="color:#374151; font-size:30px;"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/login">login</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    @yield('main')
  </main>
  <footer>
    <section class="container about_group">
      <div class="about_us">
        <div class="logo_box">
          <div class="small_logo"></div>
          <h1>數位方塊</h1>
        </div>
        <p>Air plant banjo lyft occupy retro adaptogen indego</p>
      </div>
      <div class="catego_box">
        <div class="catego">
          <h1>CATEGORIES</h1>
          <ul>
            <li><a href="">First Link</a></li>
            <li><a href="">Second Link</a></li>
            <li><a href="">Third Link</a></li>
            <li><a href="">Fourth Link</a></li>
          </ul>
        </div>
        <div class="catego">
          <h1>CATEGORIES</h1>
          <ul>
            <li><a href="">First Link</a></li>
            <li><a href="">Second Link</a></li>
            <li><a href="">Third Link</a></li>
            <li><a href="">Fourth Link</a></li>
          </ul>
        </div>
        <div class="catego">
          <h1>CATEGORIES</h1>
          <ul>
            <li><a href="">First Link</a></li>
            <li><a href="">Second Link</a></li>
            <li><a href="">Third Link</a></li>
            <li><a href="">Fourth Link</a></li>
          </ul>
        </div>
        <div class="catego">
          <h1>CATEGORIES</h1>
          <ul>
            <li><a href="">First Link</a></li>
            <li><a href="">Second Link</a></li>
            <li><a href="">Third Link</a></li>
            <li><a href="">Fourth Link</a></li>
          </ul>
        </div>
      </div >
    </section>
    <section class="container-fluid background-color_mask">
      <div class="container copy_right_group">
        <div class="copy_right">&copy; 參考 2020 Tailblocks — @knytneve</div>
        <div class="follow">
          <a href=""><i class="fa-brands fa-facebook-f"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>
    </section>
  </footer>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- 頁面共通Js -->
  <!-- Bootstrap Js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <!-- Fontawesome Js -->
  <script src="https://kit.fontawesome.com/da58ed1c4d.js" crossorigin="anonymous"></script>
  <!-- 各頁面專用Js -->

  @yield('js')

</body>

</html>
