@extends("layout.crud-club")

@section('crud_club_container')
<div class = "container admin tes">
        <a href="/createclub" class="btn btn-primary my-3">Create data Club</a>
        <p class="text-danger">{{ Session::get('message') }}</p>
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
                        <a href={{"editclub/".$clubs->id_club}} class="btn btn-success btn-sm">Edit</a>
                        <a href={{"deleteclub/".$clubs->id_club}} class="btn btn-danger btn-sm">Delete</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection