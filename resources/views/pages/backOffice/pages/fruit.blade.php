@extends("template.indexBackOffice")
@section('content')
    <div class="container">
        <h1>Fruits</h1>
        <div class="row">
            <div class="col-2"><strong>ID</strong></div>
            <div class="col-6"><strong>Name</strong></div>
            <div class="col-2"><strong>Quantity</strong></div>
            <div class="col-2"></div>
        </div>
        @foreach ($fruits as $fruit)
            <div class="row">
                <div class="col-2">{{ $fruit->id }}</div>
                <div class="col-6"><a href="/administration/fruit/{{ $fruit->id }}">{{ $fruit->name }}</a></div>
                <div class="col-2">{{ $fruit->quantity }}</div>
                <div class="col-2">
                    <form action="/administration/fruit/{{ $fruit->id }}/delete" method="POST">
                        @csrf
                        @method("DELETE")
                        <input class="btn btn-danger text-white" type="submit" value="X">
                    </form>
                </div>
            </div>
        @endforeach
        @if (count($fruits) == 0)
            <h1>Il n'y a pas de légume en stock</h1>
        @endif
    </div>
    <a class="btn btn-success text-white" href="/administration/ajouter-fruit">Ajouter un fruit</a>
@endsection
