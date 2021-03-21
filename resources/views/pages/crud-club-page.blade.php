@extends("layout.crud-club")

@section('crud_club_container')
<div class = "container admin tes">
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
</div>
@endsection