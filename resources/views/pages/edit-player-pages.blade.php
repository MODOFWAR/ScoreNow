@extends("layout.edit-player")

@section('edit_player_container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form edit Player</h1>
            <p class="text-danger">{{ Session::get('message') }}</p>
            <form method="post" action="/edit-player">
                @csrf
                @foreach( $data as $player )
                <input type="hidden" class="form-control" id="id_pemain" placeholder="Masukan nama pemain" name="id_pemain" value={{$player->id_pemain}}>
                <div class="form-group">
                    <label for="nama_pemain">Nama Pemain</label>
                    <input type="text" class="form-control @error('nama_pemain') is-invalid @enderror" id="nama_pemain" placeholder="Masukan nama pemain" name="nama_pemain" value={{$player->nama_pemain}}>
                    @error('nama_pemain')
                    <div class="invalid-feedback">Nama pemain harus diisi</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_punggung">No punggung</label>
                    <input type="text" class="form-control @error('no_punggung') is-invalid @enderror" id="no_punggung" placeholder="Masukan nomer punggung" name="no_punggung" value={{$player->no_punggung}}>
                    @error('no_punggung')
                    <div class="invalid-feedback">Nomor punggung harus diisi</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_punggung">Club</label>
                    <input type="text" class="form-control @error('nama_club') is-invalid @enderror" id="nama_club" placeholder="Masukan nama club" name="nama_club" value={{$player->nama_club}}>
                    @error('nama_club')
                    <div class="invalid-feedback">Nama club harus diisi</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gol">Gol</label>
                    <input type="text" class="form-control @error('gol') is-invalid @enderror" id="gol" placeholder="Masukan jumlah gol" name="gol" value={{$player->gol}}>
                    @error('gol')
                    <div class="invalid-feedback">Jumlah gol harus diisi</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="assist">Assist</label>
                    <input type="text" class="form-control @error('assist') is-invalid @enderror" id="assist" placeholder="Masukan jumlah assist" name="assist" value={{$player->assist}}>
                    @error('assist')
                    <div class="invalid-feedback">Jumlah assist harus diisi</div>
                    @enderror
                </div>
                <a href="/crud-player-page" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
                @endforeach
            </form>

        </div>
    </div>
</div>
@endsection