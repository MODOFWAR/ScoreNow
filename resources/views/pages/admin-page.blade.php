@extends("layout.admin")

@section('admin_container')
<div class = "container admin tes">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"> Video</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td> highlight Arsenal vs Chelsea</td>
                    <td>21-03-2021</td>
                    <td>Video diuopload oleh adit</td>
                    <td><img src="" alt=""></td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td> highlight Arsenal vs ManCity</td>
                    <td>20-03-2021</td>
                    <td>-</td>
                    <td></td>
                    <td>
                        <a href="" class="badge badge-success" style="text">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td> highlight Arsenal vs ManUnited</td>
                    <td>19-03-2021</td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
@endsection