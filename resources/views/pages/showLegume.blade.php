@extends('template.index')
@section("content")
<p><strong>Nom :</strong> {{ $legume->name }}</p>
<p><strong>Quantité</strong> {{ $legume->quantity }}</p>
<a class="btn btn-primary" href="{{ url()->previous() }}">Retour</a>
@endsection