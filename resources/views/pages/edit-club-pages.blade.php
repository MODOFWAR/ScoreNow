@extends("layout.edit-club")

@section('edit_club_container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form edit club</h1>
             <!-- Membuat form untuk membuat club -->
            <form method="post" action="/edit-club">
                @csrf
                @foreach( $data as $club )
                <input type="hidden" class="form-control" id="id_club" placeholder="Masukan nama club" name="id_club" value={{$club->id_club}}>
                <div class="form-group">
                    <label for="nama_club">Nama Club</label>
                    <input type="text" class="form-control @error('nama_club') is-invalid @enderror" id="nama_club" placeholder="Masukan nama club" name="nama_club" value={{$club->nama_club}}>
                    @error('nama_club')
                    <div class="invalid-feedback">Nama club harus diisi</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="akronim">akronim</label>
                    <input type="text" class="form-control @error('akronim') is-invalid @enderror" id="akronim" placeholder="Masukan akronim club" name="akronim" value={{$club->akronim}}>
                    @error('akronim')
                    <div class="invalid-feedback">Akronim harus diisi</div>
                    @enderror
                </div>
                <a href="/crud-club-page" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
                @endforeach
            </form>

        </div>
    </div>
</div>
@endsection