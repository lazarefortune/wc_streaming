@extends('layouts.app')

@section('content')

<div class="row panel-error d-flex justify-content-center">
  <div class="text-center">
    <h1>404</h1>
    <h2 class="mb-4">Page non trouvée</h2>

    <a href="{{ url('/') }}">
      <button type="button" class="btn btn-primary btn-lg shadow-lg" name="button">Retour à l'acceuil</button>
    </a>
  </div>

</div>
@endsection
