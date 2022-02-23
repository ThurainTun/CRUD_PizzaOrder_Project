@extends('layout.navigation')
@section('navbar')
@if (Session('delete'))
    <div class="alert alert-danger">
        {{Session("delete")}}
    </div>
@endif
<div class="container">
    <table class="table align-middle mt-4">
        <thead>
          <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Pizza</th>
              <th>Topping</th>
              <th>Sauce</th>
              <th>price</th>
              <th>Edit Order</th>
              <th>Order Complete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza)                
                <tr>
                    <td scope="row">{{$pizza['id']}}</td>
                    <td>{{$pizza['user_name']}}</td>
                    <td>{{$pizza['email']}}</td>
                    <td>{{$pizza['pizza_name']}}</td>
                    <td>{{$pizza['topping']}}</td>
                    <td>{{$pizza['sauce']}}</td>
                    <td>{{$pizza['price']}}</td>
                <td>
                    <a href="{{route('edit',$pizza->id)}}" type="button" class="btn btn-danger btn-sm px-3">
                    Edit
                    </a>
                </td> 
                <td>
                    <a href="{{route('delete',$pizza->id)}}" type="button" class="btn btn-success btn-sm px-3">
                        Done
                    </a>
                </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection