@extends('template.indexBackOffice')
@section("content")
<div class="container">
  <form action="/administration/legume/{{ $edit->id }}/update" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label class="form-label">Nom</label>
      <input value="{{ $edit->name }}" name="name" type="text" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Quantity</label>
      <input value="{{ $edit->quantity }}" name="quantity" type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Sauvegarder</button>
  </form>
  
</div>
@endsection