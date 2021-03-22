@extends("layout.crud-player")

@section('crud_player_container')
<div class = "container admin tes">
        <a href="/createplayer" class="btn btn-primary my-3">Create data Player</a>
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
                <tr>
                    <th scope="row">1</th>
                    <td> 191</td>
                    <td>Aubameyang</td>
                    <td>14</td>
                    <td>9</td>
                    <td>1</td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td> 204</td>
                    <td>Thierry Henry</td>
                    <td>12</td>
                    <td>175</td>
                    <td>-</td>
                    <td>
                        <a href="" class="badge badge-success" style="text">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>708</td>
                    <td>David Luiz</td>
                    <td>23</td>
                    <td>3</td>
                    <td>1</td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
@endsection