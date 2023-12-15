@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Defaulter Students</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Attendance Percentage</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($defaulters as $defaulter)
                    <tr>
                        <td>{{ $defaulter->roll_no }}</td>
                        <td>{{ $defaulter->name }}</td>
                        <td>{{ round($defaulter->attendancePercentage, 2) }}%</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
