@extends('layout')

@section('contenido')

<div class="container"><br>
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">New Cell Phone</h4>
      <form class="needs-validation" novalidate action="{{url('newPhones/createCell')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="mb-3">
          <label for="tittle">Title</label>
          <input type="text" class="form-control" name="tittle" id="tittle" placeholder="Nexus 6p" value="{{old('tittle')}}" required>
          @if($errors->has('tittle'))
            <div class="alert alert-danger alert-dissmissible fade show">
              {{$errors->first('tittle')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
        </div>
        <div class="mb-3">
          <label for="description">Description</label>
          <input type="text" class="form-control" name="description" id="description" placeholder="It is a device..." value="{{old('description')}}" required>
          @if($errors->has('description'))
            <div class="alert alert-danger alert-dissmissible fade show">
              {{$errors->first('description')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
        </div>
        <div class="mb-3">
          <label for="rutaImg">Attach cell image</label>
          <div class="custom-file">
              <input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="rutaImg" id="rutaImg" lang="es">
              <label class="custom-file-label" for="rutaImg">Attach File</label>
              @if($errors->has('rutaImg'))
                <div class="alert alert-danger alert-dissmissible fade show">
                  {{$errors->first('rutaImg')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Create</button>
        <a class="btn btn-secondary btn-lg btn-block" href="{{URL::previous()}}">Return</a>
      </form>
      @if(session('msn'))
        <div class="alert alert-success alert-dissmissible fade show">
          {{session('msn')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
    </div>
  </div>
</div>

@endsection