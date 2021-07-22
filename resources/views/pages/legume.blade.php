@extends("template.index")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">Nom: </div>
            <div class="col-md-6">Quantité: </div>
        </div>
        @foreach ($legumes as $legume)
            <div class="row {{ strlen($legume->name) >= 5 ? 'bg-primary' : '' }}">
                <div class="col-md-6">
                    <a href="/legume/{{ $legume->id }}">{{ $legume->name }}</a>
                </div>
                <div class="col-md-6">{{ $legume->quantity }}</div>
            </div>
        @endforeach
        
    </div>
@endsection
