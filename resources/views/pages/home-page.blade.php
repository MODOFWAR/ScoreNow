@extends('layout.Landing')

@section('home_container')

<div class="jumbotron jumbotron-fluid"></div>

    <div class="row content">
          <div class="col-3 score">
              <h3>Matchweek 38 Result</h3>
              <h6>Saturday, May 16 2020</h6>
          </div>

          <div class="col latestnews">    
            <h3>Latest News</h3>
            <div class="row ">
              <div class="col">
                <div class="card" style="width: 27rem;">
                  <img src="img/Aubameyang.png" class="card-img-top" alt="cold">
                    <div class="card-body">
                      <p class="card-text">Aubameyang : We’ve played a perfect today</p>
                    </div>
                </div>
              </div>
              
              <div class="col">
                <div class="card" style="width: 27rem;">
                  <img src="img/Ole_Gunnar_Solskjaer___2 1.png" class="card-img-top" alt="cold">
                    <div class="card-body">
                      <p class="card-text">Ole Gunnar Solksjaer : I’m very dissapointed</p>
                    </div>
                </div>
              </div>
            </div>

            <div class="horizontal-line pt-5">
            </div>

            <div class = "latest-video pt-5"></div>
            <h3>Latest Video</h3>
            <div class="row ">
              <div class="col">
                <div class="card" style="width: 27rem;">
                  <img src="img/0_Arsenal-Manchester-United 1.png" class="card-img-top" alt="cold">
                    <div class="card-body">
                      <p class="card-text">Aubameyang : We’ve played a perfect today</p>
                    </div>
                </div>
              </div>
              
              <div class="col">
                <div class="card card2" style="width: 27rem;">
                  <img src="img/0_Newcastle-Chelsea.png" class="card-img-top" alt="cold">
                    <div class="card-body">
                      <p class="card-text">Ole Gunnar Solksjaer : I’m very dissapointed</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>
          
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
@endsection
