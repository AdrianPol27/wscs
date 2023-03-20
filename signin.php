<?php 

  include('layout/header.php');
  include('db/connector.php');
  include('models/user-facade.php');

  $userFacade = new UserFacade;

  if (isset($_POST["signin"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
      array_push($invalid, 'Username should not be empty!');
    } if (empty($password)) {
      array_push($invalid, 'Password should not be empty!');
    }
  }

  if (isset($_POST["forgot_password"])) {
    array_push($info, 'It seems that you forgot your password, kindly contact the IT Department.');
  }

?>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form action="signin.php" method="post" class="pt-3">
                <?php include('errors.php'); ?>
                <div class="form-group mb-2">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn w-100" name="signin">Sign In</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <button type="submit" class="btn" name="forgot_password">Forgot password?</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

<?php include('layout/footer.php') ?>