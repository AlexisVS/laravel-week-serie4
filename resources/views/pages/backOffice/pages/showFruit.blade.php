@extends("template.indexBackOffice")
@section('content')
    <p><strong>Nom :</strong> {{ $show->name }}</p>
    <p><strong>Quantité</strong> {{ $show->quantity }}</p>
    <a class="btn btn-primary" href="{{ url()->previous() }}">Retour</a>
    <a class="btn btn-success" href="/administration/fruit/{{ $show->id }}/edit">Editer</a>
@endsection
