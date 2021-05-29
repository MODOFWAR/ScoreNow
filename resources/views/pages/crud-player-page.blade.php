@extends("layout.crud-player")

@section('crud_player_container')
<div class = "container admin tes">
        <a href="/createplayer" class="btn btn-primary my-3">Create data Player</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Pemain</th>
                    <th scope="col">Nama Pemain</th>
                    <th scope="col">Nama Club</th>
                    <th scope="col">Nomor Punggung</th>
                    <th scope="col">Gol</th>
                    <th scope="col">Assist</th>
                    <th scope="col">Aksi</th>   
                </tr>
            </thead>
            <tbody>
                @foreach( $pemain as $player )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $player->id_pemain }}</td>
                    <td>{{ $player->nama_pemain }}</td>
                    <td>{{ $player->nama_club }}</td>
                    <td>{{ $player->no_punggung }}</td>
                    <td>{{ $player->gol }}</td>
                    <td>{{ $player->assist }}</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">Edit</a>
                        <a href={{"delete/".$player->id_pemain}} class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection