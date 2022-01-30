@extends('master')
@section("content")


<div style="padding: 30px">
    <h4>MY ORDERS</h4><br>
    @foreach ($orders as $item)
    <div>
        <div style="padding: 20px">
            <a href="detail/{{$item->id}}">
                <img class="trending-img" src="{{$item->gallery}}" width="200px">
            </a>
        </div><br>
        <div class="custom-product">
            <div class="col-sm-10">
            <table>
            <tr>
                <td>Product Name</td>
                <td>: {{$item->name}}</td>
            <tr>
            <tr>
                <td>Delivery Status</td>
                <td>: {{$item->status}}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>: {{$item->address}}</td>
            </tr>
            <tr>
                <td>Payment Status</td>
                <td>: {{$item->payment_status}}</td>
            </tr>
            <tr>
                <td>Payment Method</td>
                <td>: {{$item->payment_method}}</td>
            </tr>
        <table>
            </div>
        </div><br>
    </div>
        <hr>
    @endforeach
</div>

@endsection

