<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>loginform</title>
</head>
<body>
  <section class="vh-100" style="background-color: #fff9c2;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <form method="post">
              <h3 class="mb-5">Sign in</h3>
              <div class="form-outline mb-4">
                  <select name="user" id="user" class="form-control form-control-lg">
                    <option value="Admin">Admin</option>
                    <option value="ContentManager">ContentManager</option>
                    <option value="SystemUser">SystemUser</option>
                  </select>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="usernamex" name="username"  placeholder="Username" class="form-control form-control-lg" />
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="typePasswordX" name="password" placeholder="Password" class="form-control form-control-lg" />
              </div>

              <button class="btn btn-primary btn-lg btn-block" name="btnProcess" type="submit">Login</button>

              <hr class="my-4">
              <?php
                if (isset($_POST['btnProcess'])) {
                  $user = $_POST['user'];
                  $username = $_POST['username'];
                  $password = $_POST['password'];
                  if ($user == 'Admin') {
                    if (($username == 'admin' && $password == 'pass1234') or ($username == 'romnet' && $password == 'byron')) {
                      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Welcome to the System : '. $username.'!</strong> 
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>';
                    }
                    else {
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Invalid Username / Password!</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>';
                    }
                  }
                  elseif ($user == 'ContentManager') {
                    if (($username == 'pepito' && $password == 'manaloto') or ($username == 'juan' && $password == 'delacruz')) {
                      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Welcome to the System : '. $username.'!</strong> 
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>';
                    }
                    else {
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Invalid Username / Password!</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>';
                    }
                  }
                  elseif ($user == 'SystemUser') {
                    if ($username == 'pedro' && $password == 'penduko') {
                      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Welcome to the System : '. $username.'!</strong> 
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>';
                    }
                    else {
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Invalid Username / Password!</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>';
                    }
                  }
                  else {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Invalid Username / Password!</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>';
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>