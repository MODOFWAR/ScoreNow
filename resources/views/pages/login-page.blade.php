@extends("layout.Login")

@section("login_container")
    <nav class="navbar navbar-expand-lg navbar-light navbartop py-3">
        <div class="container-fluid">
              <a class="navbar-brand scorenow" href="/home-page"><img src = "/img/icon.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        </div>
    </nav>
    <div class="login-container">
        <h2 class="login-title">LOGIN AS ADMIN</h2>
    </div>
    <div class="container form-container">
        <div class="row">
            <div class="col">
                <div class="container loginForm">
                    <h3>Login</h3>
                    <form>
                        <p>Email</p>
                        <input type="text" name="" placeholder="Enter Email">
                        <p>Password</p>
                        <input type="password" name="" placeholder="******">
                    </form>
                    <div>
                        <button type="button" class="btn btn-primary login-btn">Login</button>
                    </div>
                </div>
            </div>
            <div class="col login-words">
                <h2>Hello there!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repellendus dolor rerum nesciunt, veniam atque, unde sequi
                     vero esse natus eveniet dolores illum eum, 
                    provident qui accusamus illo iste quam aliquam.</p>
            </div>
        </div>
    </div>
@endsection