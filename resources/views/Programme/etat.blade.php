@extends('dashyout')
@section('content')

<div class=" container pt-5 ms-5 ps-5 mt-5 row">
    <div class="col-2"></div>
    <div class="col-10">
        <table class="table">
            <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">nom</th>
              <th scope="col">id_option</th>
              <th scope="col">id_lp</th>
              <th scope="col">note</th>
              <th scope="col">etat en cours</th>
              <th scope="col">etat parcouru</th>
              </tr>
            </thead>
            <tbody>
                @foreach( $programmes as $programme )
              <tr>
                <th>{{ $programme->id }}</th>
                <td>{{ $programme->nom }}</td>
                <td>{{ $programme->id_option }}</td>
                <td>{{ $programme->id_lp }}</td>
                <td>{{ $programme->note }}</td>
                <td>
                
                  <form action=" {{route('Programme.opv',['id'=>$programme->id])}} " method="post">
                    @csrf
                    <button type="submit" class="btn btn-success">V</button>
                  </form>

                  <form action=" {{route('Programme.npv',['id'=>$programme->id])}} " method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">X</button>
                  </form>

                </td>

                <td>
                
                    <form action=" {{route('Programme.opx',['id'=>$programme->id])}} " method="post">
                      @csrf
                      <button type="submit" class="btn btn-success">V</button>
                    </form>
  
                    <form action=" {{route('Programme.npx',['id'=>$programme->id])}} " method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger">X</button>
                    </form>
  
                  </td>

              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

</div>

@endsection