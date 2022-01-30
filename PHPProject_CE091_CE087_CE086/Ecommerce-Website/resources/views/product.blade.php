@extends('master')
@section('content')

                @foreach ($products as $item )
                  <div class="main">
                    <a href="detail/{{$item['id']}}">
                        <div class="maindiv">
                          <img src="{{$item['gallery']}}" width="30%">
                            <div class="desc"  style="color: black;">
                              <h6 style="font-weight: 600">{{$item['name']}}</h6>
                              <h6 style="font-weight: 400">price Rs:{{$item['price']}}</h6>
                          </div>
                        </div>
                    </a>
                  </div>
                @endforeach

@endsection

