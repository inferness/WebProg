@extends('base')

@section('content')
   @foreach ($students as $student)
        <li class="text-white">
            <strong>Name:</strong> {{ $student->name }}<br>
            <strong>Email:</strong> {{ $student->email }}<br>
            
            @if ($student->studentDetail)
                <strong>Hobby:</strong> {{ $student->studentDetail->Hobby }}<br>
                <strong>Class:</strong> {{ $student->studentDetail->Class }}
            @else
                <strong>StudentDetail not available</strong>
            @endif
        </li>
    @endforeach
@endsection