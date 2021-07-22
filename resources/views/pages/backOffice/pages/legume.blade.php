@extends("template.indexBackOffice")
@section('content')
    <div class="container">
        <h1>Legumes</h1>
        <div class="row">
            <div class="col-2"><strong>ID</strong></div>
            <div class="col-6"><strong>Name</strong></div>
            <div class="col-2"><strong>Quantity</strong></div>
            <div class="col-2"></div>
        </div>
        @foreach ($legumes as $legume)
            <div class="row">
                <div class="col-2">{{ $legume->id }}</div>
                <div class="col-6"><a href="/administration/legume/{{ $legume->id }}">{{ $legume->name }}</a></div>
                <div class="col-2">{{ $legume->quantity }}</div>
                <div class="col-2">
                    <form action="/administration/legume/{{ $legume->id }}/delete" method="POST">
                        @csrf
                        @method("DELETE")
                        <input class="btn btn-danger text-white" type="submit" value="X">
                    </form>
                </div>
            </div>
        @endforeach
        @if (count($legumes) == 0)
            <h1>Il n'y a pas de légume en stock</h1>
        @endif
    </div>
    <a class="btn btn-success text-white" href="/administration/ajouter-legume">Ajouter un légume</a>

@endsection
