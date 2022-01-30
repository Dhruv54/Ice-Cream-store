@extends('master')
@section('content')
<div class="container" style="padding: 10px">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}">
        </div>
        <div class="col-sm-6">
            <br>
            <h3>{{$product['name']}}</h3>
            <h4>{{$product['category']}}</h4>
            <h3>Rs.{{$product['price']}}</h3><br><br>
            @if(Session::has('user'))
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value={{$product['id']}}>
                    <button class="btn btn-primary">Add to cart</button>
                </form>
                    <br>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value={{$product['id']}}>
                    <button class="btn btn-success">Buy Now</button>
                </form>
                    <br>
            @else
                    <a href="/">
                    <button class="btn btn-primary">Add to cart</button>
                </a>
                <br>
                <br>
                    <a href="/">
                    <button class="btn btn-success">Buy Now</button></a><br><br>
            @endif

        </div>
    </div>
</div>


@endsection