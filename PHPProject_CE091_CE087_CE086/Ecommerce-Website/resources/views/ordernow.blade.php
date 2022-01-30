@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
    <table>
    <tr>
        <td>Total Product Amount  </td>
        <td>: Rs.{{$total}}</td>
    <tr>
    <tr>
        <td>Tax  </td>
        <td>: Rs.0</td>
    </tr>
    <tr>
        <td>Delivery Charge  </td>
        <td>: Rs.10</td>
    </tr>
    <tr>
        <td>Total Amount  </td>
        <td>: Rs.{{$total+10}}</td>
    </tr>
<table>
    </div>
</div><br>

<div>
    <form action="/orderplace" method="POST">
        @csrf
        <h6>Address</h6>
        <textarea name="address" id="address" cols="30" rows="4" required></textarea><br><br>
        <label for="pwd">PAYMENT METHOD</label><br>
        <input type="radio" value="cash" name="payment" required><span> COD</span><br><br>

        <button type="submit" class="btn btn-success">order now</button>
    </form>
</div><br>

@endsection