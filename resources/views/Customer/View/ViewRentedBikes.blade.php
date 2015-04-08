@extends('Customer.welcome')
@section('ViewRentedBikes')

@foreach($bikes as $bike)
<ul>
    <li>
        {{$bike['type']}}
    </li>
</ul>
@endforeach

@endsection