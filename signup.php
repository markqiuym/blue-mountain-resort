<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
   <style>
      body {
         background-image: url('./images/background/background-5.jpg');
      }

      .card-img-left {
         width: 45%;
         /* Link to your background image using in the property below! */
         background: scroll center url('https://source.unsplash.com/WEQbe2jBg40/414x512');
         background: scroll center url('./images/service-4.jpg');
         background-size: cover;
      }

      .btn-login {
         font-size: 0.9rem;
         letter-spacing: 0.05rem;
         padding: 0.75rem 1rem;
      }

      .btn-google {
         color: white !important;
         background-color: #ea4335;
      }

      .btn-facebook {
         color: white !important;
         background-color: #3b5998;
      }
   </style>

</head>

<body>
   <div class="gtranslate_wrapper"></div>
   <script>window.gtranslateSettings = { "default_language": "en", "native_language_names": true, "detect_browser_language": true, "languages": ["en", "zh-CN", "ru", "de"], "wrapper_selector": ".gtranslate_wrapper", "switcher_horizontal_position": "right", "float_switcher_open_direction": "bottom", "flag_style": "3d" }</script>
   <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
   <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

   <body>
      <div class="container">
         <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
               <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                  <div class="card-img-left d-none d-md-flex">
                     <!-- Background image for card set in CSS! -->
                  </div>
                  <div class="card-body p-4 p-sm-5">
                     <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
                     <form action="signup.php" method="POST">
                        <input type="hidden" id="flg" name="flg" value="1">
                        <div class="form-floating mb-3">
                           <input type="text" class="form-control" id="floatingInputUsername" name="username"
                              placeholder="myusername" required autofocus>
                           <label for="floatingInputUsername">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                           <input type="txt" class="form-control" id="floatingInputEmail" name="email"
                              placeholder="name@example.com">
                           <label for="floatingInputEmail">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                           <input type="number" class="form-control" id="floatingPasswordConfirm" name="pno"
                              placeholder="Phone number">
                           <label for="floatingPasswordConfirm">Phone Number</label>
                        </div>
                        <div class="form-floating mb-3">
                           <input type="password" class="form-control" id="floatingPassword" name="password"
                              placeholder="Password">
                           <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-grid mb-2">
                           <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase"
                              type="submit">Register</button>
                        </div>
                        <div class="d-grid mb-2">
                           <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="button"
                              onclick="location.href='index.php'">Cancel</button>
                        </div>
                        <a class="d-block text-center mt-2 small" href="login.php">I Have Account</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
      // session_start();
      $user = 'root';
      $password = '';
      $database = 'resort';
      $mysql = new mysqli(
         "localhost",
         $user,
         $password,
         $database
      );
      if (isset($_POST['username'])) {
         $id = $_POST['username'];
         $mail = $_POST['email'];
         $phn = $_POST['pno'];
         $pwd = $_POST['password'];
         $queryss = 'INSERT INTO user values (default , "' . $id . '","' . $mail . '","' . $phn . '","' . $pwd . '");';
         // echo $queryss;
         if ($mysql->query($queryss) == true) {
            $_SESSION["username"] = $id;
            echo '<script language="javascript">';
            echo "alert('New record created successfully:$id')";
            echo '</script>';

            echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 0000);</script>";
         } else {
            echo "ERROR: Unable to execute $sql. " . $conn->error;
         }
         ;
      }
      ?>
   </body>

</html>