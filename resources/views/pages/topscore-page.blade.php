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
            <tr>
                <th scope="row">1</th>
                <td>Mohamed Salah</td>
                <td></td>
                <td></td>
                <td style = "text-align = center">17</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Harry Kane</td>
                <td></td>
                <td></td>
                <td style = "text-align = center">16</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Bruno Fernandes</td>
                <td></td>
                <td></td>
                <td style = "text-align = center">16</td>
            </tr>
        </tbody>
        </table>
    </div>
@endsection
