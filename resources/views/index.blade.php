@extends('layouts.master')

@section('content')
    <div class="center">
        <h1>Sveiki atvykę į<br>Elektroninių Bilietų Platformą . . .</h1>
        <h2>Išsirink kelionės bilietą pas mus!</h2><br />
        <div class="buttons">
            <form>
                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option selected>Keliauju iš...</option>
                        @foreach ($airports as $airport)
                            <option>{{ $airport->Name }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="text" placeholder="Keliauju iš ...">
                <input type="text" placeholder="Keliauju į ..."></br>
                <font color="white">Išvykimo data:</font></br><input type="date" id="start" name="trip-start"
                    value="2020-02-27">
                <input type="submit" value="Ieškoti bilieto"></input>
            </form>
        </div>
    </div>
@endsection
