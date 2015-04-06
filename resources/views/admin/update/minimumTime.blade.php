@extends('admin.welcome')
@section('updateMinTime')
    <div class ="container">




        <div class = "form-group">

            {!! Form::label('OriginalTime', 'Original Time:') !!}
            {!! Form::Integer('OriginalTime', ['class' => 'form-control']) !!}

        </div>

        <div class = "form-group">

            {!! Form::label('MinTime', 'Minimum Time:') !!}
            {!! Form::Integer('MinTime', ['class' => 'form-control']) !!}

        </div>

        <h1></h1>
        <div class = "form-group">

            {!! Form::submit(null, ['class' => 'btn btn-primary form-control']) !!}

        </div>

        @include('errors/list')

    </div>

    {{!! Form::close() !!}






    @endsection