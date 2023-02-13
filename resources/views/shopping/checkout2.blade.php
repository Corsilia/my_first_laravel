<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fontawesome Css -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/da58ed1c4d.css" crossorigin="anonymous">
    <!-- 共用的header與footer的css -->
    <link rel="stylesheet" href="{{asset('css/bs_css/header_and_footer.css')}}">
    <!-- My Css -->
    <link rel="stylesheet" href="{{asset('css/bs_css/checkout2.css')}}">
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
                            <a class="nav-link fw-bold" aria-current="page" href="#"
                                style="color:#374151; font-size: 14px;">Blog</a>
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
                            <a class="nav-link px-3 dropdown" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
        <section>
            <h1>購物車</h1>
            <div class="content">
                <div class="process">
                    <div class="process_project">
                        <div class="round_project">1</div>
                        <span>確認購物車</span>
                        <div class="progress_line">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="process_project">
                        <div class="round_project">2</div>
                        <span>付款與運送方式</span>
                        <div class="progress_line">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="process_project">
                        <div class="round_project">3</div>
                        <span>填寫資料</span>
                        <div class="progress_line">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="process_project">
                        <div class="round_project">4</div>
                        <span>完成訂購</span>
                    </div>
                </div>
                <!-- 放新程式碼 -->
                <div class="pay_way_group">
                    <h2>付款方式</h2>
                    <div class="pay_ways">
                        <div class="pay_way">
                            <input type="radio" id="credit_card" name="pay">
                            <label for="credit_card">信用卡付款</label>
                        </div>
                        <div class="pay_way">
                            <input type="radio" id="atm" name="pay">
                            <label for="atm">網路 ATM</label>
                        </div>
                        <div class="pay_way">
                            <input type="radio" id="supermarket" name="pay">
                            <label for="supermarket">超商代碼</label>
                        </div>
                    </div>
                </div>
                <div class="transport_way_group">
                    <h2>運送方式</h2>
                    <div class="transport_ways">
                        <div class="transport_way">
                            <input type="radio" id="black_cat">
                            <label for="black_cat">黑貓宅配</label>
                        </div>
                        <div class="transport_way">
                            <input type="radio" id="market_to_market">
                            <label for="market_to_market">超商店到店</label>
                        </div>
                    </div>
                </div>
                <div class="price_box">
                    <div class="quanity">
                        <span class="text">數量:</span>
                        <span class="price">3</span>
                    </div>
                    <div class="subtotal">
                        <span class="text">小計:</span>
                        <span class="price">$24.90</span>
                    </div>
                    <div class="freight">
                        <span class="text">運費:</span>
                        <span class="price">$24.90</span>
                    </div>
                    <div class="total">
                        <span class="text">總計:</span>
                        <span class="price">$24.90</span>
                    </div>
                </div>
            </div>
            <div class="control">
                <a href="/checkout1">
                    <button type="button" class="btn btn-outline-primary py-sm-2 px-sm-5">上一步</button>
                </a>
                <a href="/checkout3">
                    <button type="button" class="btn btn-primary py-sm-2 px-sm-5">下一步</button>
                </a>
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
</body>

</html>
