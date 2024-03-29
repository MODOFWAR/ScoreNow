@extends("layout.edit-club")

@section('edit_club_container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form edit club</h1>
            <p class="text-danger">{{ Session::get('message') }}</p>
             <!-- Membuat form untuk membuat club -->
            <form method="post" action="/edit-club">
                @csrf
                @foreach( $data as $club )
                <input type="hidden" class="form-control" id="id_club" placeholder="Masukan nama club" name="id_club" value={{$club->id_club}}>
                <div class="form-group">
                    <label for="nama_club">Nama Club</label>
                    <input type="text" class="form-control @error('nama_club') is-invalid @enderror" id="nama_club" placeholder={{$club->nama_club}} name="nama_club">
                    @error('nama_club')
                    <div class="invalid-feedback" id="error-club">Nama club harus diisi</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="akronim">akronim</label>
                    <input type="text" class="form-control @error('akronim') is-invalid @enderror" id="akronim" placeholder={{$club->akronim}} name="akronim">
                    @error('akronim')
                    <div class="invalid-feedback" id="error-akronim">Akronim harus diisi</div>
                    @enderror
                </div>
                <a href="/crud-club-page" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary" id="submit-editclub">Tambah</button>
                @endforeach
            </form>

        </div>
    </div>
</div>
@endsection