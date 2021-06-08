@extends("layout.create-highlights")

@section('create_highlights_container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Create Highlight</h1>
            <form method="post" action="/createvideo">
                @csrf
                <div class="form-group">
                    <label for="nama_club">Nama video highlight</label>
                    <input type="text" class="form-control" id="nama_video" placeholder="Masukan Video Highlight" name="nama_video">
                </div>
                <div class="form-group">
                    <label for="akronim">Link video</label>
                    <input type="text" class="form-control" id="link_video" placeholder="Masukan Link" name="link_video">
                </div>
                <div class="form-group">
                    <label for="akronim">Thumbnail Video</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                </div>
                <a href="/crud-highlights-pages" class="btn btn-secondary mt-3">Kembali</a>
                <button type="submit" class="btn btn-primary mt-3">Tambah</button>
            </form>

        </div>
    </div>
</div>
@endsection