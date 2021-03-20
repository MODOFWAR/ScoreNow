@extends("layout.Login")

@section("login_container")
    <nav class="navbar navbar-expand-lg navbar-light navbartop py-3">
        <div class="container-fluid">
              <a class="navbar-brand scorenow" href="#"><img src = "/img/icon.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        </div>
    </nav>
    <div class="login-container">
        <h2 class="login-title">LOGIN AS ADMIN</h2>
    </div>
    <div class="container pt-5 p-5 loginForm">
        <h3>Login</h3>
        <form>
            <p>Email</p>
            <input type="text" name="" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="" placeholder="******">
        </form>
    </div>
@endsection