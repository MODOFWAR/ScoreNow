@extends("layout.news")

@section("container_news")


    <div class = "container top-news pt-5">
        <h2>Top News</h2>
        <div class="row pt-5 topbox">
            <div class="col-6 news-img">
            </div>
            <div class="col-6 pt-5 news-body">
                <div class="container">
                    <h2 class="news-title p-5">Arsenal bid $200M for Erling Braut Haalandimg</h2>
                </div>
            </div>
    </div>

        <!-- <div class="row pt-5">
            <div class="col-4 left">
            <div class="card" style="width: 25rem;">
                <img src="img/rashford.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-4 mid">
                <div class="card" style="width: 25rem;">
                    <img src="img/download.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 right">
                <div class="card" style="width: 25rem;">
                    <img src="img/20180602_FIFA_Friendly_Match_Austria_vs 1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content
                        </p>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- akirtes -->
        <div class="card-group cardmid">
            <div class="card left">
                <img src="img/rashford.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Rashford : It’s time for me to find a new challenge</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card mid">
                <img src="img/20180602_FIFA_Friendly_Match_Austria_vs 1.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Chelsea set to replace Kepa Arrizabalaga</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="img/download.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Arteta happy with team performance</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <div class="row bot">
            <div class="col">
                <div class="card bg-dark text-white">
                    <img src="img/b25lY21zOmYwZmMyZDRjLTY3YWItNGZmNS05YjNjLWU1NDkxODZiY2NmNDpiNGQ3ZTIzYy0zYzQ5LTQ4MjgtYjcwOS1iMTU3YTg4YTRhNTY= 2.png" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Confirmed : Dean Henderson back to Man United</h5>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card bg-dark text-white">
                    <img src="img/jadon-sancho-borussia-dortmund-2019-20_537pp81l55nl1g327c0u6ftl6 2.png" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Man United and Chelsea set to buy Sancho</h5>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
