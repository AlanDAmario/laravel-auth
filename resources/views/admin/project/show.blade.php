@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="" class="d-block mx-lg-auto img-fluid" alt="" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">{{$project->title}}</h1>
        <p class="lead">{{$project->description}}</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-5">
          <a class="btn btn-primary px-4 me-md-2" href="{{route('admin.projects.index')}}">Torna alla lista dei post</a>
          <button type="button" class="btn btn-outline-secondary px-4">Modifica </button>
          <button type="button" class="btn btn-outline-danger px-4">Cancella </button>
        </div>
      </div>
    </div>
</div>
@endsection