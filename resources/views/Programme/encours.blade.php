@extends('dashyout')
@section('content')

<div class=" container pt-5 ms-5 ps-5 mt-5 row">
    <div class="col-4"></div>
    <div class="col-8">
        <table class="table">
            <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">nom</th>
              <th scope="col">id_option</th>
              <th scope="col">id_lp</th>
              <th scope="col">est en cours</th>
              <th scope="col">est parcouru</th>
              <th scope="col">note</th>
              </tr>
            </thead>
            <tbody>
                @foreach( $programmes as $programme )
              <tr>
                <th>{{ $programme->id }}</th>
                <td>{{ $programme->nom }}</td>
                <td>{{ $programme->id_option }}</td>
                <td>{{ $programme->id_lp }}</td>
                <td>{{ $programme->pv }}</td>
                <td>{{ $programme->px }}</td>
                <td>{{ $programme->note }}</td>
                @endforeach
            </tbody>
          </table>
    </div>

@endsection