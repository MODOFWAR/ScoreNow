@extends("layout.edit-video")

@section('edit_video_container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form edit Video</h1>
             <!-- Membuat form untuk membuat club -->
            <form method="post" action="/edit-video">
                @csrf
                @foreach( $data as $video )
                <input type="hidden" class="form-control" id="id_video" placeholder="Masukan nama video" name="id_video" value={{$video->id_video}}>
                <div class="form-group">
                    <label for="nama_video">Nama Video</label>
                    <input type="text" class="form-control" id="nama_video" placeholder="Masukan nama video" name="nama_video" value={{$video->nama_video}}>
                </div>
                <div class="form-group">
                    <label for="link_video">Link</label>
                    <input type="text" class="form-control" id="link_video" placeholder="Masukan Link video" name="link_video" value={{$video->link_video}}>
                </div>
                <a href="/crud-highlights-page" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
                @endforeach
            </form>

        </div>
    </div>
</div>
@endsection