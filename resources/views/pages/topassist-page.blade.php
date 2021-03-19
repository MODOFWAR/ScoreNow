@extends("layout.topassist")

@section("container_topassist")

    <div class = "container tes">
        <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col"> Players Name</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Assists</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td> Harry Kane</td>
                <td></td>
                <td></td>
                <td style = "text-align = center">13</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td> Kevin De Bruyne</td>
                <td></td>
                <td></td>
                <td style = "text-align = center">11</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td> Bruno Fernandes</td>
                <td></td>
                <td></td>
                <td style = "text-align = center">10</td>
            </tr>
        </tbody>
        </table>
    </div>
@endsection