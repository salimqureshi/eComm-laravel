@extends('master')
@section('content')
<div class="container custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Cart List</h2>            
            <div>
                <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
                @foreach ($products as $item)
                  <div class="row searched-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{ $item->id }}">
                            <img class="trending-img" src="{{ $item->gallery }}" alt="Chania">                            
                        </a>
                    </div>
                    <div class="col-sm-3">                       
                        <div class="">
                            <h2>{{ $item->name }}</h2>
                            <h5>{{ $item->description }}</h5>
                        </div>                       
                    </div>
                    <div class="col-sm-3">                       
                        <a href="removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove from cart</a>                      
                    </div>                      
                  </div>
              @endforeach   
              <a href="ordernow" class="btn btn-success">Order Now</a><br><br>              
            </div>              
        </div>
    </div>

</div>
@endsection