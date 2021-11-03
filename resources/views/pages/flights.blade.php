@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nr.</th>
                    <th scope="col">Išvykimo data</th>
                    <th scope="col">Atvykimo data</th>
                    <th scope="col">Statusas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flights as $flight)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{$flight->DepartureTime}}</td>
                        <td>{{$flight->ArrivalTime}}</td>
                        <td>{{$flight->Status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
