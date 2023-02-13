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
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <main>
        <section class="content">
            <div class="slogan">
                <h1>Keep it special</h1>
                <p>Capture your personal memory in unique way, anywhere.</p>
            </div>
            <div class="footer">
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </section>
        <section class="input_container">
            <div class="container">
                <div class="logo_box">
                    <a href="/shopping"><span></span></a>
                    <a href="/shopping"><h1>數位方塊</h1></a>
                </div>
                <div class="login_icon">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-google"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <p>or use email your account</p>
                <div class="input_box">
                    <form>
                        <div class="mb-3">
                          <input type="email" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-3">
                          <input type="password" class="form-control p-3" id="exampleInputPassword1" placeholder="Password">
                          <a href="">Forgot your password?</a>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-purple">SIGN IN</button>
                </div>
            </div >
        </section>
    </main>
  <!-- Bootstrap Js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
  crossorigin="anonymous"></script>
<!-- Fontawesome Js -->
<script src="https://kit.fontawesome.com/da58ed1c4d.js" crossorigin="anonymous"></script>
</body>
</html>
