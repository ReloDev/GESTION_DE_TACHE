@extends('dashyout')
@section('content')

<div class=" container pt-5 ms-2 ps-5 mt-5 row">
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
              <th scope="col">informations importantes sur le projet</th>
              <th scope="col"></th>
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
                <td>
                  {{-- <a type="submit" class="btn btn-success" href=" {{ Route('Programme.show', ['id' => $programme->id]) }} ">Voir</a> &nbsp &nbsp --}}
                  <a type="submit" class="btn btn-secondary" href=" {{ Route('Programme.edit', ['id' => $programme->id]) }} "></a> &nbsp &nbsp
                  <a type="submit" class="btn btn-danger"  href=" {{ Route('Programme.destroy', ['id' => $programme->id]) }} "></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

</div>


@endsection
