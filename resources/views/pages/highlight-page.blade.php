@extends("layout.highlight")

@section("container_highlight")

<div class = "container mt-5">
    <div class="row ">
    @foreach( $video_highlight as $videos )
                <div class="col-4">
                  <div class="card" style="width: 25rem; height: 18rem;">
                      <iframe style="height: 100%" src="{{ $videos->link_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="card-body">
                        <p class="card-text">{{ $videos->nama_video }}</p>
                      </div>
                  </div>
              </div>
    @endforeach
    </div>
</div>    
@endsection