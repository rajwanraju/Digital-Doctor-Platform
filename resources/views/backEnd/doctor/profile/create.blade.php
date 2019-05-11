@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')

  <div class="container">
    <div class="col-sm-offset-2 col-sm-10">
<h2 class="text-center">{{Auth::user()->name}}'s' Profile Complete</h2>
<br>
<br>

      <form method="POST" action="{{ url('doctor/profile/complete') }}" enctype="multipart/form-data">
          @csrf

          <div class="form-group row">
              <label for="speciality" class="col-md-4 col-form-label text-md-right">{{ __('Speciality') }}</label>

              <div class="col-md-6">
                  <input id="speciality" type="text" class="form-control{{ $errors->has('speciality') ? ' is-invalid' : '' }}" name="speciality" value="{{ old('speciality') }}" required>

                  @if ($errors->has('speciality'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('speciality') }}</strong>
                      </span>
                  @endif
              </div>
          </div>




          <div class="form-group row">
              <label for="Skills" class="col-md-4 col-form-label text-md-right">{{ __('Skills') }}</label>

              <div class="col-md-6">
                  <input id="Skills" type="text" class="form-control{{ $errors->has('Skills') ? ' is-invalid' : '' }}" name="skills" value="{{ old('Skills') }}" required>

                  @if ($errors->has('Skills'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('Skills') }}</strong>
                      </span>
                  @endif
              </div>
          </div>





          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('WorkPlace') }}</label>

              <div class="col-md-6">
                  <input id="workPlace" type="text" class="form-control{{ $errors->has('workPlace') ? ' is-invalid' : '' }}" name="workPlace" value="{{ old('workPlace') }}" required >

                  @if ($errors->has('workPlace'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('workPlace') }}</strong>
                      </span>
                  @endif
              </div>
          </div>


          <div class="form-group row">
              <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>

              <div class="col-md-6">
                  <input id="designation" type="text" class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" value="{{ old('designation') }}" required >

                  @if ($errors->has('designation'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('designation') }}</strong>
                      </span>
                  @endif
              </div>
          </div>


          <div class="form-group row">
              <label for="graduation" class="col-md-4 col-form-label text-md-right">{{ __('Graduation') }}</label>

              <div class="col-md-6">
                  <input id="graduation" type="text" class="form-control{{ $errors->has('graduation') ? ' is-invalid' : '' }}" name="graduation" value="{{ old('graduation') }}" required autofocus>

                  @if ($errors->has('graduation'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="graduation_from" class="col-md-4 col-form-label text-md-right">{{ __('Graduation From') }}</label>

              <div class="col-md-6">
                  <input id="graduation_from" type="text" class="form-control{{ $errors->has('graduation_from') ? ' is-invalid' : '' }}" name="graduation_from" value="{{ old('graduation_from') }}" required autofocus>

                  @if ($errors->has('graduation_from'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>


          <div class="form-group row">
              <label for="post_graduation" class="col-md-4 col-form-label text-md-right">{{ __('Post Graduation') }}</label>

              <div class="col-md-6">
                  <input id="post_graduation" type="text" class="form-control{{ $errors->has('post_graduation') ? ' is-invalid' : '' }}" name="post_graduation" value="{{ old('post_graduation') }}" required autofocus>

                  @if ($errors->has('post_graduation'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('post_graduation') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
               <div class="form-group row">
              <label for="post_graduationFrom" class="col-md-4 col-form-label text-md-right">{{ __('Post Graduation From') }}</label>

              <div class="col-md-6">
                  <input id="post_graduationFrom" type="text" class="form-control{{ $errors->has('post_graduationFrom') ? ' is-invalid' : '' }}" name="post_graduationFrom" value="{{ old('post_graduationFrom') }}" required autofocus>

                  @if ($errors->has('post_graduationFrom'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('post_graduationFrom') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

           <div class="form-group row">
              <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Photo') }}</label>

              <div class="col-md-6">
                  <input id="file-1" type="file" name="photo" multiple class="file" data-overwrite-initial="false" >

                  @if ($errors->has('image'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('image') }}</strong>
                      </span>
                  @endif
              </div>
          </div>


          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Save') }}
                  </button>
              </div>
          </div>
      </form>


  </div>
  </div>


  @endsection
