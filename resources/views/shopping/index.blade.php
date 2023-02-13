<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>練習首頁</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Fontawesome Css -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/da58ed1c4d.css" crossorigin="anonymous">
  <!-- Swiper Css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <!-- My Css -->
  <link rel="stylesheet" href="{{asset('css/bs_css/index.css')}}">
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
    <section class="container-fluid swiper-box">
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-color: #eee;">Slide 1</div>
          <div class="swiper-slide" style="background-color: #ccc;">Slide 2</div>
          <div class="swiper-slide" style="background-color: #eee;">Slide 3</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <section class="card_group">
      <div class="container text-center">
        <h1 class="fs-2 mb-3">Raw Denim Heirloom Man Braid</h1>
        <p class="mx-auto">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
          juice poutine, ramps microdosing banh mi pug.</p>
        <div class="decorate"></div>
        <div class="row justify-content-center">
          <div class="card col-md-4 col-sm-12 align-items-center">
            <img src="{{asset('img/bs_img/card_group_ekg.png')}}" class="card-img-top" alt="card_group_ekg_icon">
            <div class="card-body">
              <h5 class="card-title mb-3">Shooting Stars</h5>
              <p class="card-text mx-auto">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
              <a href="#" class="btn">Learn More →</a>
            </div>
          </div>
          <div class="card col-md-4 col-sm-12 align-items-center">
            <img src="{{asset('img/bs_img/card_group_scissors.png')}}" class="card-img-top" alt="card_group_scissors_icon">
            <div class="card-body">
              <h5 class="card-title mb-3">The Catalyzer</h5>
              <p class="card-text mx-auto">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
              <a href="#" class="btn">Learn More →</a>
            </div>
          </div>
          <div class="card col-md-4 col-sm-12 align-items-center">
            <img src="{{asset('img/bs_img/card_group_user.png')}}" class="card-img-top" alt="card_group_user_icon">
            <div class="card-body">
              <h5 class="card-title">Neptune</h5>
              <p class="card-text mx-auto">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
              <a href="#" class="btn">Learn More →</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 button">
            <button type="button" class="btn btn-purple">Button</button>
          </div>
        </div>
      </div>
    </section>
    <section class="container img_group">
      <div class="row">
        <h1 class="col-lg-4 col-12 fs-2">Master Cleanse Reliac Heirloom</h1>
        <p class="col-lg-8 col-12">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile
          poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
      </div>
      <div class="row">
        <div class="left-content col-6">
          <div class="row">
            <div class="size_500x300 col-6 h-1of3 p-md-2 p-1"><img src="{{asset('img/bs_img/500x300.png')}}" alt=""></div>
            <div class="size_501x301 col-6 h-1of3 p-md-2 p-1"><img src="{{asset('img/bs_img/501x301.png')}}" alt=""></div>
            <div class="size_600x360 col-12 h-2of3 p-md-2 p-1"><img src="{{asset('img/bs_img/600x360.png')}}" alt=""></div>
          </div>
        </div>
        <div class="right-content col-6">
          <div class="row">
            <div class="size_601x361 col-12 h-2of3 p-md-2 p-1"><img src="{{asset('img/bs_img/601x361.png')}}" alt=""></div>
            <div class="size_502x302 col-6 h-1of3 p-md-2 p-1"><img src="{{asset('img/bs_img/502x302.png')}}" alt=""></div>
            <div class="size_503x303 col-6 h-1of3 p-md-2 p-1"><img src="{{asset('img/bs_img/503x303.png')}}" alt=""></div>
          </div>
        </div>
      </div>
    </section>
    <section class="table_group">
      <div class="container">
        <div class="row mx-auto">
          <h1 class="fs-2 text-center">Pricing</h1>
          <p class="text-center">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel
            artisan direct trade mumblecore 3 wolf moon twee</p>
        </div>
        <div class="row mx-auto">
          <table class="table">
            <!-- 表頭 -->
            <thead>
              <tr>
                <th scope="col">Plan</th>
                <th scope="col">Speed</th>
                <th scope="col">Storage</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <!-- 表身 -->
            <tbody>
              <tr>
                <td>Start</td>
                <td>5 Mb/s</td>
                <td>15 GB</td>
                <td>Free</td>
                <td><input type="radio" name="" id=""></td>
              </tr>
              <tr>
                <td>Pro</td>
                <td>25 Mb/s</td>
                <td>25 GB</td>
                <td>$24</td>
                <td><input type="radio" name="" id=""></td>
              </tr>
              <tr>
                <td>Business</td>
                <td>36 Mb/s</td>
                <td>40 GB</td>
                <td>$50</td>
                <td><input type="radio" name="" id=""></td>
              </tr>
              <tr>
                <td>Exclusive</td>
                <td>48 Mb/s</td>
                <td>120 GB</td>
                <td>$72</td>
                <td><input type="radio" name="" id=""></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="btn_row mx-auto">
          <a href="" class="btn">Learn More →</a>
          <button type="button" class="btn btn-primary">Button</button>
        </div>
      </div>
    </section>
    <section class="container card4_group">
      <div class="row">
        <div class="col-lg-6 col-12 mb-4 mb-lg-0">
          <h1 class="fs-2">
            Pitchfork Kickstarter Taxidermy
          </h1>
        </div>
        <div class="col-lg-6 col-12">
          <p>
            Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.
            Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid
            celiac humblebrag.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 p-3">
          <div class="card">
            <img src="{{asset('img/bs_img/720x400.png')}}" class="card-img-top mb-4" alt="...">
            <div class="card-body">
              <div class="small-title">SUBTITLE</div>
              <h5 class="card-title mb-3">Chichen Itza</h5>
              <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt
                edison bulbche.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 p-3">
          <div class="card">
            <img src="{{asset('img/bs_img/721x401.png')}}" class="card-img-top mb-4" alt="...">
            <div class="card-body">
              <div class="small-title">SUBTITLE</div>
              <h5 class="card-title mb-3">Colosseum Roma</h5>
              <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt
                edison bulbche.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 p-3">
          <div class="card">
            <img src="{{asset('img/bs_img/722x402.png')}}" class="card-img-top mb-4" alt="...">
            <div class="card-body">
              <div class="small-title">SUBTITLE</div>
              <h5 class="card-title mb-3">Great Pyramid of Giza</h5>
              <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt
                edison bulbche.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 p-3">
          <div class="card">
            <img src="{{asset('img/bs_img/723x403.png')}}" class="card-img-top mb-4" alt="...">
            <div class="card-body">
              <div class="small-title">SUBTITLE</div>
              <h5 class="card-title mb-3">San Francisco</h5>
              <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt
                edison bulbche.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container row3_group">
      <div class="row mx-auto">
        <img src="{{asset('img/bs_img/card_group_ekg.png')}}" alt="">
        <div>
          <h1>Shooting Stars</h1>
          <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.
          </p>
          <a href="" class="btn">Learn More →</a>
        </div>
      </div>
      <div class="row mx-auto">
        <img src="{{asset('img/bs_img/card_group_scissors.png')}}" alt="">
        <div>
          <h1>The Catalyzer</h1>
          <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.
          </p>
          <a href="" class="btn">Learn More →</a>
        </div>
      </div>
      <div class="row mx-auto row-last">
        <img src="{{asset('img/bs_img/card_group_user.png')}}" alt="">
        <div>
          <h1>The 400 Blows</h1>
          <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.
          </p>
          <a href="" class="btn">Learn More →</a>
        </div>
      </div>
      <button type="button" class="btn btn-purple mx-auto">Button</button>
    </section>
    <section class="container produce d-flex">
      <div class="produce_box flex-column flex-lg-row">
        <div class="img_box w-100">
          <img src="{{asset('img/bs_img/400x400.png')}}" alt="" class="w-100 rounded">
        </div>
        <div class="card_box w-100 w-lg-50">
          <p>BRAND NAME</p>
          <h1>The Catcher in the Rye</h1>
          <div class="reviews_box mb-3">
            <span>
              <!-- ="currentColor"意思是使用color來控制顏色 -->
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
            </span>
            <span>4 Reviews</span>
            <span>
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-solid fa-comments"></i>
            </span>
          </div>
          <p class="mb-4">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia
            microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1
            seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo
            tattooed umami cardigan.</p>
          <div class="color_box">
            <span>Color</span>
            <span>
              <button type="button" class="button_white"></button>
              <button type="button" class="button_black"></button>
              <button type="button" class="button_purple"></button>
            </span>
            <span>size</span>
            <div class="select_box">
              <select name="" id="">
                <option value="">SM</option>
                <option value="" selected>M</option>
                <option value="">L</option>
                <option value="">XL</option>
              </select>
              <span></span>
            </div>
          </div>
          <div class="price_box d-flex align-items-center justify-content-between">
            <h1 class="fs-4">$58.00</h1>
            <div class="btn_icon d-flex align-items-center">
              <button type="button" class="btn btn-purple px-4 py-2">Button</button>
              <i class="fa-brands fa-gratipay fs-1 ms-3"></i>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container card_8_group">
      <div class="card p-3">
        <img src="{{asset('img/bs_img/420x260.png')}}" class="card-img-top rounded-3" alt="...">
        <div class="card-body">
          <span>CATEGORY</span>
          <h1>The Catalyzer</h1>
          <span>$16.00</span>
        </div>
      </div>
      <div class="card p-3">
        <img src="{{asset('img/bs_img/421x261.png')}}" class="card-img-top rounded-3" alt="...">
        <div class="card-body">
          <span>CATEGORY</span>
          <h1>Shooting Stars</h1>
          <span>$21.15</span>
        </div>
      </div>
      <div class="card p-3">
        <img src="{{asset('img/bs_img/422x262.png')}}" class="card-img-top rounded-3" alt="...">
        <div class="card-body">
          <span>CATEGORY</span>
          <h1>Neptune</h1>
          <span>$12.00</span>
        </div>
      </div>
      <div class="card p-3">
        <img src="{{asset('img/bs_img/423x263.png')}}" class="card-img-top rounded-3" alt="...">
        <div class="card-body">
          <span>CATEGORY</span>
          <h1>The 400 Blows</h1>
          <span>$18.40</span>
        </div>
      </div>
      <div class="card p-3">
        <img src="{{asset('img/bs_img/424x264.png')}}" class="card-img-top rounded-3" alt="...">
        <div class="card-body">
          <span>CATEGORY</span>
          <h1>The Catalyzer</h1>
          <span>$16.00</span>
        </div>
      </div>
      <div class="card p-3">
        <img src="{{asset('img/bs_img/425x265.png')}}" class="card-img-top rounded-3" alt="...">
        <div class="card-body">
          <span>CATEGORY</span>
          <h1>Shooting Stars</h1>
          <span>$21.15</span>
        </div>
      </div>
      <div class="card p-3">
        <img src="{{asset('img/bs_img/427x267.png')}}" class="card-img-top rounded-3" alt="...">
        <div class="card-body">
          <span>CATEGORY</span>
          <h1>Neptune</h1>
          <span>$12.00</span>
        </div>
      </div>
      <div class="card p-3">
        <img src="{{asset('img/bs_img/428x268.png')}}" class="card-img-top rounded-3" alt="...">
        <div class="card-body">
          <span>CATEGORY</span>
          <h1>The 400 Blows</h1>
          <span>$18.40</span>
        </div>
      </div>

    </section>
    <section class="container-fluid map_group p-0">
      <div class="mapouter">
        <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
            marginheight="0" marginwidth="0"
            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=izmir&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
            href="https://pdflist.com/" alt="pdf">Pdf</a>
          </div>
      </div>
      <div class="map_input container">
        <div class="input">
          <h1>Feedback</h1>
          <p>Post-ironic portland shabby chic echo park, banjo fashion axe</p>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="請輸入電子郵件地址">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="請輸入留言"></textarea>
          </div>
          <button type="button" class="btn btn-purple">Button</button>
          <p>Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
        </div>
      </div>
    </section>
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
  <!-- Bootstrap Js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <!-- Fontawesome Js -->
  <script src="https://kit.fontawesome.com/da58ed1c4d.js" crossorigin="anonymous"></script>
  <!-- Swiper Js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <!-- My Js -->
  <script src="{{asset('js/bs_js/index.js')}}"></script>
</body>

</html>
