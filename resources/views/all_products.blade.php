@extends('layout.app')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Products</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{url('create_product')}}" class="btn btn-outline-secondary">Add New Product</a>
            </div>
    </div>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <table class="table table-bordered">
          <tbody>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th width="280px">Actions</th>
              </tr>
              @foreach ($products as $product )
              <tr>
                  <td>{{$product->id}}</td>
                  <td>{{$product->product_name}}</td>
                  <td>29.Shirt 15 $</td>
                  <td>5</td>
                  <td>
                    <a class="btn btn-info" href="">Edit</a>
                    <form action="destroy" method="POST">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</main>
@endsection
