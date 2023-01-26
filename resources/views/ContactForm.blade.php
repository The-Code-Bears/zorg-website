@extends("layouts.base")
@section('content')

<div class="container">
  <div class="row">
  <div class="col">
  <h2 class="mx-auto text-center">Vragen? Neem hier contact met ons op!</h2>
@if(session('message'))
  <div class='alert alert-success'>
  {{ session('message') }}
  </div>
@endif
@if($errors->any())
      <div class="alert alert-danger">
          <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
          </ul>
      </div>
@endif
<div class="col-12 col-md-6">
  @include('Cform')
</div>
</div>
</div>
</div>

@endsection
