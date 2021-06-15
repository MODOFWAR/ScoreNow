@extends("layout.create-club")

@section('create_club_container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Create club</h1>
            <p class="text-danger">{{ Session::get('message') }}</p>
             <!-- Membuat form untuk membuat club -->
            <form method="post" action="/createclub">
                @csrf
                <div class="form-group">
                    <label for="nama_club">Nama club</label>
                    <input type="text" class="form-control @error('nama_club') is-invalid @enderror" id="nama_club" placeholder="Masukan nama club" name="nama_club">
                    @error('nama_club')
                    <div class="invalid-feedback">Nama club harus diisi</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="akronim">Akronim</label>
                    <input type="text" class="form-control @error('akronim') is-invalid @enderror" id="akronim" placeholder="Masukan akronim" name="akronim">
                    @error('akronim')
                    <div class="invalid-feedback">Akronim harus diisi</div>
                    @enderror
                </div>
                <a href="/crud-club-page" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>

        </div>
    </div>
</div>
@endsection