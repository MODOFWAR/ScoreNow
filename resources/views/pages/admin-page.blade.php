@extends("layout.admin")

@section('admin_container')
<div class = "container admin tes">
    <h2>Pemain</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">id_pemain</th>
                    <th scope="col">nama_pemain</th>
                    <th scope="col">no_punggung</th>
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
                    <th scope="col">no</th>
                    <th scope="col">id_pemain</th>
                    <th scope="col">id_club</th>
                    <th scope="col">nama_club</th>
                    <th scope="col">Akronim</th>
                    <th scope="col">Aksi</th>   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td> 191</td>
                    <td>1</td>
                    <td>Arsenal</td>
                    <td>Ars</td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td> 159</td>
                    <td>2</td>
                    <td>Manchester United</td>
                    <td>Mun</td>
                    <td>
                        <a href="" class="badge badge-success" style="text">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    <h2>Hasil Pertandingan</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">id_hasil_pertandingan</th>
                    <th scope="col">id_club</th>
                    <th scope="col">skor_pertandingan</th>
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