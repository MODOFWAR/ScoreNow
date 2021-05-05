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
                <!-- Menampilkan semua data club yang ada pada database -->
                @foreach( $club as $clubs )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $clubs->id_club }}</td>
                    <td>{{ $clubs->nama_club }}</td>
                    <td>{{ $clubs->akronim }}</td>
                    <td>
                        <!-- <button type="button" class="btn btn-success btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button> -->
                        <a href="/crud-club-page/{{ $club }}" class="btn btn-primary btn-sm">detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection