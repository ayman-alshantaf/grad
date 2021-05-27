<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <button
            class="navbar-toggler navbar-icons"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
    >
          <span class="navbar-toggler-icon"
          ><i class="fa fa-list" aria-hidden="true"></i
            ></span>
    </button>
    <a class="navbar-brand" href="index.blade.php">
{{--      <img src="{{asset("publicAssets/image/header/logo/6.png")}}" style="width: 200px; height: 200px">--}}
    </a>
    <div class="logIn login-lg-hide">
      <a href="login.blade.php"><i class="fa fa-sign-in"></i> دخول</a>
      <a href="singUp.blade.php"><i class="fa fa-user-plus"></i> تسجيل</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="findTraining.blade.php">فرص التدريب</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addtraining.blade.php">اضافة تدريب</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="majors.blade.php">التخصصات</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.blade.php">اتصل بنا</a>
        </li>
      </ul>
    </div>
    <div class="logIn login-md-hide">
      <a href="login.blade.php"><i class="fa fa-sign-in"></i> دخول</a>
      <a href="singUp.blade.php"><i class="fa fa-user-plus"></i> تسجيل</a>
    </div>
  </div>
</nav>
