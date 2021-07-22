@extends('template.indexBackOffice')
@section('content')
    <div class="container">
      <h1>Ajouter un légume</h1>

        <form action="/administration/legumes/add" method="POST">
          @csrf
          @method("POST")
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input name="name" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantité</label>
                <input name="quantity" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary text-white">Submit</button>
        </form>
    </div>

@endsection
