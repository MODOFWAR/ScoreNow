@extends("layout.crud-highlights")

@section('crud_highlights_container')
<div class = "container admin tes">
        <a href="/createvideo" class="btn btn-primary my-3">Create data highlight</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">id_video</th>
                    <th scope="col">Nama Video</th>
                    <th scope="col">Link Video</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
             @foreach( $video_highlight as $videos )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $videos->id_video }}</td>
                    <td>{{ $videos->nama_video }}</td>
                    <td>{{ $videos->link_video }}</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection