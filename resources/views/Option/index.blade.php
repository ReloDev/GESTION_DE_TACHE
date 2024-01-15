@extends('dashyout')
@section('content')

<div class=" container pt-5 ms-5 ps-5 mt-5 row">
    <div class="col"></div>
    <div class="col mt-5 pt-5">
         <table class="table">
        <thead>
          <tr>
          <th scope="col">#</th>
            <th scope="col">option</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach( $options as $option )
          <tr>
            <th>{{ $option->id }}</th>
            <td>{{ $option->nom }}</td>
            <td>
              <a type="submit" class="btn btn-success" href=" {{ Route('Option.show', ['id' => $option->id]) }} ">Voir </a> &nbsp &nbsp
              <a type="submit" class="btn btn-secondary" href=" {{ Route('Option.edit', ['id' => $option->id]) }} ">Mod</a> &nbsp &nbsp
              <a type="submit" class="btn btn-danger"  href=" {{ Route('Option.destroy', ['id' => $option->id]) }} ">Suppr</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
   
</div>
@endsection