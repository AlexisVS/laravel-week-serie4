@extends('template.index')
@section("content")
  <p><strong>Nom :</strong> {{ $fruit->name }}</p>
  <p><strong>Quantité</strong> {{ $fruit->quantity }}</p>
  <a class="btn btn-primary" href="{{ url()->previous() }}">Retour</a>
@endsection