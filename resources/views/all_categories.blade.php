@extends('layout.app')
@section('content')

<div class="btn-toolbar mb-2 mb-md-0">
    <table class="table table-bordered">
      <tbody>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th width="280px">Actions</th>
          </tr>
          @foreach ($categories as $category )
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->categoy}}</td>
            <td>
              <a class="btn btn-info" href="#">Edit</a>
              <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
          @endforeach

      </tbody>
    </table>
</div>

@endsection
