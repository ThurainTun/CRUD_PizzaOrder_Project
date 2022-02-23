  @extends('layout.navigation')
  @section('navbar')
      {{-- alert message --}}
      @if (Session('success'))
          <div class="alert alert-success">
              {{ Session('success') }}
          </div>
      @endif

      {{-- start here --}}

      {{-- order form --}}
      <div class="container">
        <form action="{{route('home')}}" method="post">

          <div class="logo">
            <div class="img-box">
              <div class="img">
                <img src="/img/logo.png" class="img">

              </div>
            </div>
            <!-- <div class="title"> -->
              <h1>Pizza Order Form</h1>

            <!-- </div> -->
          </div>

          <div class="form">

            @csrf
            <div class="form-inputs">
              <label for="">Name</label>
              <input type="text" name="user_name">
              @error('user_name')
                  <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="form-inputs">
              <label for="">Email</label>
              <input type="email" name="email">
              @error('email')
                  <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="form-inputs">
              <label for="">Pizza Name</label>
              <input type="text" name="pizza_name">
              @error('pizza_name')
                  <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="form-inputs">
              <label for="">Toppings</label>
              <input type="text" name="topping">
              @error('topping')
                  <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="form-inputs">
              <label for="">Sauce</label>
              <input type="text" name="sauce">
              @error('sauce')
                  <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="form-inputs">
              <label for="">Prize</label>
              <input type="text" name="price">
              @error('price')
                  <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="form-inputs">
              <button class="order-btn">Order Now</button>

            </div>
          </div>
        </form>
      </div>
      {{-- order form_end --}}
  @endsection
