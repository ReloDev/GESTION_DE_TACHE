@extends('dashyout')
@section('content')

<div class=" container pt-5 mt-5 ps-5 ms-5 row">
    <div class="col"></div>
    <div class="col">
         <table class="table pt-5 mt-5 ps-5 ms-5">
        <thead>
          <tr>
          <th scope="col">#</th>
            <th scope="col">Lp</th>
            <th scope="col">Option</th>
          </tr>
        </thead>
        <tbody>
            @foreach( $lps as $lp )
          <tr>
            <th>{{ $lp->id }}</th>
            <td>{{ $lp->nom }}</td>
            <td>
              {{-- <a type="submit" class="btn btn-success" href=" {{ Route('Lp.show', ['id' => $lp->id]) }} ">Voir </a> &nbsp &nbsp --}}
              <a type="submit" class="btn btn-secondary" href=" {{ Route('Lp.edit', ['id' => $lp->id]) }} ">Mod</a> &nbsp &nbsp
              <a type="submit" class="btn btn-danger"  href=" {{ Route('Lp.destroy', ['id' => $lp->id]) }} ">Suppr</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
   
</div>

@endsection