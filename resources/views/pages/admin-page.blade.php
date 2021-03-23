@extends("layout.admin")

@section('admin_container')
<div class = "container admin tes">
    <h2>Pemain</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Pemain</th>
                    <th scope="col">Nama Pemain</th>
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
                    <td>{{ $player->no_punggung }}</td>
                    <td>{{ $player->gol }}</td>
                    <td>{{ $player->assist }}</td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <h2>Club</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Club</th>
                    <th scope="col">Nama Club</th>
                    <th scope="col">Akronim</th>
                    <th scope="col">Aksi</th>   
                </tr>
            </thead>
            <tbody>
                @foreach ( $club as $klub )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $klub->id_club }}</td>
                    <td>{{ $klub->nama_club }}</td>
                    <td>{{ $klub->akronim }}</td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <h2>Hasil Pertandingan</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">ID Hasil Pertandingan</th>
                    <th scope="col">ID Club</th>
                    <th scope="col">Skor Pertandingan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>1</td>
                    <td>2</td>
                    <td>2-1</td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
@endsection