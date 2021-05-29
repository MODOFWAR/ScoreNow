@extends("layout.edit-player")

@section('edit_player_container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form edit Player</h1>
           
            <form method="post" action="/edit-player">
                @csrf
                @foreach( $data as $player )
                <input type="hidden" class="form-control" id="id_pemain" placeholder="Masukan nama pemain" name="id_pemain" value={{$player->id_pemain}}>
                <div class="form-group">
                    <label for="nama_pemain">Nama Pemain</label>
                    <input type="text" class="form-control" id="nama_pemain" placeholder="Masukan nama pemain" name="nama_pemain" value={{$player->nama_pemain}}>
                </div>
                <div class="form-group">
                    <label for="no_punggung">No punggung</label>
                    <input type="text" class="form-control" id="no_punggung" placeholder="Masukan nomer punggung" name="no_punggung" value={{$player->no_punggung}}>
                </div>
                <div class="form-group">
                    <label for="no_punggung">Club</label>
                    <input type="text" class="form-control" id="nama_club" placeholder="Masukan nama club" name="nama_club" value={{$player->nama_club}}>
                </div>
                <div class="form-group">
                    <label for="gol">Gol</label>
                    <input type="text" class="form-control" id="gol" placeholder="Masukan jumlah gol" name="gol" value={{$player->gol}}>
                </div>
                <div class="form-group">
                    <label for="assist">Assist</label>
                    <input type="text" class="form-control" id="assist" placeholder="Masukan jumlah assist" name="assist" value={{$player->assist}}>
                </div>
                <a href="/crud-player-page" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
                @endforeach
            </form>

        </div>
    </div>
</div>
@endsection