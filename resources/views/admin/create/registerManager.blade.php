@extends('admin.welcome')

@section('registerManager')

{!! Form::open(['url' => 'registerManager']) !!}
<h2></h2>
<div class ="container">

    <div class = "form-group"">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, $attributes = ['class' => 'form-control', 'placeholder' => 'Please enter your desired name here']) !!}
</div>


<div class = "form-group">

    {!! Form::label('email', 'E-mail Address:') !!}
    {!! Form::email('email', null, $attributes = ['class' => 'form-control', 'placeholder' => 'Please enter your desired email here']) !!}


</div>

<div class = "form-group">

    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', $attributes = ['class' => 'form-control', 'placeholder' => 'Please enter your desired password here']) !!}

</div>

<div class = "form-group">
    {!! Form::label('password_confirmation', 'Confirm Password:') !!}
    {!! Form::password('password_confirmation', $attributes = ['class' => 'form-control', 'placeholder' => 'Please confirm your password']) !!}
</div>

<div class = "form-group"">
    {!! Form::label('location', 'Hotel Name:') !!}
    {!! Form::select('location', $bikeStations, null, ['class' => 'form-control']) !!}
</div>
<h1></h1>

<div class = "form-group"">
    {!! Form::label('type', 'Register as a :') !!}
    {!! Form::select('type', ['Hotel Manager'], null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">

    {!! Form::submit(null, ['class' => 'btn btn-primary form-control']) !!}

</div>

@include('errors/list')

</div>

{!! Form::close() !!}

@endsection