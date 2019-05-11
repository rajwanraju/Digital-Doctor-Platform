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

      <form method="POST" action="{{ url('user/profile/complete') }}" enctype="multipart/form-data">
          @csrf

          <div class="form-group row">
              <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

              <div class="col-md-6">
                  <input id="age" type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}" required>

                  @if ($errors->has('age'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('age') }}</strong>
                      </span>
                  @endif
              </div>
          </div>




          <div class="form-group row">
              <label for="Skills" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

              <div class="col-md-6">
                  <select class="form-control" name="sex">

                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
              </div>
          </div>





          <div class="form-group row">
              <label for="height" class="col-md-4 col-form-label text-md-right">Height</label>

              <div class="col-md-6">
                  <input id="height" type="text" class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}" placeholder="Height In Inche" name="height" value="{{ old('height') }}" required >


              </div>
          </div>


          <div class="form-group row">
              <label for="weight" class="col-md-4 col-form-label text-md-right">Weight</label>

              <div class="col-md-6">
                  <input id="weight" type="text" class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}" placeholder="Weight In Kg" name="weight" value="{{ old('weight') }}" required >

              </div>
          </div>


          <div class="form-group row">
              <label for="graduation" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

              <div class="col-md-6">
                <select class="form-control" name="blood">

                  <option value="A+">A+</option>
                  <option value="A-">A-</option>

                  <option value="B+">B+</option>
                  <option value="B-">B-</option>

                  <option value="O+">O+</option>
                  <option value="O-">O-</option>

                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                </select>
              </div>
          </div>

          <div class="form-group row">
              <label for="graduation_from" class="col-md-4 col-form-label text-md-right">Diabetes</label>

              <div class="col-md-6">
                <select class="form-control" name="diabetes">

                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
          </div>


          <div class="form-group row">
              <label for="post_graduation" class="col-md-4 col-form-label text-md-right">{{ __('Blood Presure') }}</label>

              <div class="col-md-6">
                <select class="form-control" name="presure">

                  <option value="High">High</option>
                  <option value="Low">Low</option>
                </select>
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
