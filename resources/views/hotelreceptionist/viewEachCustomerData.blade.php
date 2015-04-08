@extends('hotelreceptionist.welcome')
@section('viewEachCustomerData')
<h4>
    <li> Name: {{$customer->name}} </li>
</h4>
<h1></h1>
<h5>
    <li>Outstanding Price: {{$outstandingPrice}}</li>
</h5>
<h1></h1>
<h5>
    <li>Outstanding Time: {{$outstandingTime}}</li>
</h5>
@endsection