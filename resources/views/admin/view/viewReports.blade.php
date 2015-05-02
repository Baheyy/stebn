@extends('admin.welcome')

@section('viewReports')

@foreach($reports as $report)

<ul>
    <li>
        <h3>
            {{$report->title}}
        </h3>
    </li>

        {{$report->body}}

</ul>

@endforeach

@endsection