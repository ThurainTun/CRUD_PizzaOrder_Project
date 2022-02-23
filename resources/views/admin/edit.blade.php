@extends('layout.navigation')
@section('navbar')
    {{-- order form --}}
    <div class="container">
        <form action="{{ route('update', $pizzas->id) }}" method="post">

            <div class="logo">
                <div class="img-box">
                    <div class="img">
                        <img src={{ asset('img/logo.png') }} class="img">

                    </div>
                </div>
                <!-- <div class="title"> -->
                <h1>Edit Order Form</h1>

                <!-- </div> -->
            </div>

            <div class="form">
                @csrf
                <div class="form-inputs">
                    <label for="">Name</label>
                    <input type="text" name="user_name" value="{{ $pizzas->user_name }}">
                    @error('user_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div class="form-inputs">
          <label for="">Email</label>
          <input type="email" name="email">
          @error('email')
              <p class="text-danger">{{$message}}</p>
          @enderror
        </div> --}}
                <div class="form-inputs">
                    <label for="">Pizza Name</label>
                    <input type="text" name="pizza_name" value="{{ $pizzas->pizza_name }}">
                    @error('pizza_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-inputs">
                    <label for="">Toppings</label>
                    <input type="text" name="topping" value="{{ $pizzas->topping }}">
                    @error('topping')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-inputs">
                    <label for="">Sauce</label>
                    <input type="text" name="sauce" value="{{ $pizzas->sauce }}">
                    @error('sauce')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-inputs">
                    <label for="">Prize</label>
                    <input type="text" name="price" value="{{ $pizzas->price }}">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-inputs">
                    <button class="order-btn">Edit Now</button>

                </div>
            </div>
        </form>
    </div>
    {{-- order form_end --}}
@endsection
