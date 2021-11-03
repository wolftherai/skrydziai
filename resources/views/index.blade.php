@extends('layouts.master')

@section('content')
    <div class="center">
        <h1>Sveiki atvykę į<br>Elektroninių Bilietų Platformą . . .</h1>
        <h2>Išsirink kelionės bilietą pas mus!</h2><br />
        <div class="buttons">
            <form action="{{ route('findFlight') }}" method="GET">
                <div class="row">
                    <div class="form-group col-4">
                        <select class="form-control" name="fromAirPort">
                            <option selected>Keliauju iš...</option>
                            @foreach ($airports as $airport)
                                <option value="{{ $airport->id }}">{{ $airport->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <select class="form-control" name="toAirPort">
                            <option selected>Keliauju į...</option>
                            @foreach ($airports as $airport)
                                <option value="{{ $airport->id }}">{{ $airport->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-4">
                        <input id="datepicker" name="departureDate" class="bg-light"/>
                    </div>
                    <div class="col-4">
                        <input type="submit" value="Ieškoti bilieto"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
@endsection
