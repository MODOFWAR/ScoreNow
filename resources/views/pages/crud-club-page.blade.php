@extends("layout.crud-club")

@section('crud_club_container')
<div class = "container admin tes">
        <a href="/createclub" class="btn btn-primary my-3">Create data Club</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">id_club</th>
                    <th scope="col">Nama Club</th>
                    <th scope="col">Akronim</th>
                    <th scope="col">Aksi</th>   
                </tr>
            </thead>
            <tbody>
                @foreach( $club as $clubs )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $clubs->id_club }}</td>
                    <td>{{ $clubs->nama_club }}</td>
                    <td>{{ $clubs->akronim }}</td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection