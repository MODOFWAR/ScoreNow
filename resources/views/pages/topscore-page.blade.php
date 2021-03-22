@extends('layout.Topscore')

@section('topscore_container')

    <div class = "container tes">
        <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Players Name</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Goals</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $pemain as $player )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $player->nama }}</td>
                <td></td>
                <td></td>
                <td style = "text-align = center">{{ $player->goal }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection
