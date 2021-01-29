
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Login E-Learning SKPK</title>

    <link rel="canonical" href="https://getbootstrap.comadmin/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="admin/assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Favicons -->
    <link rel="apple-touch-icon" href="admin/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="admin/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="admin/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="admin/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="admin/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="admin/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body{
        background-image: url('../frontend/assets/img/hero-bg.jpg')
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/postlogin" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">
      <div class="container-fluid">
        <div class="row position-relative">
          <div class="col-sm-3 bg-light d-flex justify-content-center">
            <div class="input-group-middle">
              <main class="form-signin">
                <form class="form-auth-small" action="/postlogin" method="POST">
                {{csrf_field()}}
                  <img class="mb-4" src="admin/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                  <h1 class="h3 mb-3 fw-normal">E-LEARNING SKPK</h1>
                  <div class="form-group">
                    <label for="signin-email" class="control-label sr-only">Email</label>
                    <input name="email" type="eteks" class="form-control" id="signin-email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="signin-password" class="control-label sr-only">Password</label>
                    <input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
                  </div>
                  <p></p>
                  <button type="submit" class="btn btn-primary btn-sm btn-block">LOGIN</button>
                  <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
              </form>
              </main>
            </div>         
          </div>
        </div>
      </div>
    </div>

    
  </body>
</html>
