@extends('Customer.welcome')

@section('report')
<div class="container">
{!! Form::open(['url' => 'report']) !!}

<div class = "form-group"">

    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}

</div>

<div class = "form-group">

    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

</div>

<div class = "form-group">

    {!! Form::submit(null, ['class' => 'btn btn-primary form-control']) !!}

</div>
<h1></h1>
{!! Form::close() !!}
</div>
@endsection