@extends("layout.crud-hasil-pertandingan")

@section('crud_hasil_pertandingan_container')
<div class = "container admin tes">
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