@extends('layouts.master')

@section('content')
    <div class="forma">
			<div class="header">Pagalbos centras</div>
			<form>
				Sveiki, dabar jūs bendraujate su <b>Vardeniu</b>. Jis pasiruošęs atsakyti į jūsų klausimus!</br></br>
				<input type="text" placeholder="Vardas">
				<i class="fas fa-headset"></i>
				<textarea placeholder="Jūsų pranešimas"></textarea>
				<i class="fas fa-envelope-open-text"></i>
				<input type="submit" value="Siųsti"></input>
			</form>
		</div>
@endsection