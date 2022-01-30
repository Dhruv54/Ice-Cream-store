<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total= ProductController::cartItem();
}

?>
@extends('master')
@section("content")

@if ($total==0)
    <h1 style="padding-left: 500px;padding-top:50px;padding-bottom:50px">Empty Cart!!!</h1>
    
@else

<div style="padding: 20px">
    <h4>Result for products</h4><br>
    <a  class="btn btn-success" href="ordernow">Order Now</a><br><br>
    @foreach ($products as $item)
        <div>
            <a href="detail/{{$item->id}}">
                <img class="trending-img" src="{{$item->gallery}}" width="250px">
            </a><br><br>
        </div>
        <div>
            <h3>{{$item->name}}</h3>
            <h4>Rs.{{$item->price}}</h4><br>
        </div>
        <div>
            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
        </div><br>
    @endforeach
    <div>
        <a  class="btn btn-success" href="ordernow">Order Now</a><br>
    </div>
</div>
@endif
@endsection