@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')

  <div class="container">
    <div class="row">
    <div class="col-sm-10">
<h2 class="text-center">{{$appointment->name}}'s' Prescription</h2>
<br>
<br>

      <form method="POST" action="{{ url('prescription/store') }}" enctype="multipart/form-data">
          @csrf
<input type="hidden" name="userId" value="{{$appointment->userId}}">

<div class="row">
  <div class="col-md-11 ">
    <div class="form-group">
      <label class="control-label">Disease  Title</label>
      <input type="text" name="title" class="form-control" placeholder="Enter Deasis Details">
</div>
</div>
</div>

          <div class="row">
            <div class="col-md-3 ">
              <div class="form-group">
                <label class="control-label">Drug Type</label>
                <select name="drug_type1" class="form-control"2>
                  <option value="null">Select Drug Type</option>
                  <option value="tab">Tablet</option>
                  <option value="ing">Injection</option>
                  <option value="cap">Capsule</option>
                  <option value="susp">Suspenction</option>
                  <option value="inh">Inhelar</option>
                  <option value="sup">Supojitory</option>
                  <option value="sal">Salain</option>
                  <option value="ors">ORS</option>
                  <option value="Cre">Cream</option>
                  <option value="drp">Drop</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="form-group">
                <label class="control-label">Drug Name</label>
                <input type="text" class="form-control" name="drug1" placeholder="Enter Deug Name" />
              </div>
            </div>


            <div class="col-md-4 ">
              <div class="form-group">
                <label class="control-label">Rules Of Drug</label>
                <div class="input-group date">
                  <input class="form-control" type="text" name="rule1" placeholder="Enter Deug Rule" />

                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-3 ">
              <div class="form-group">

                <select name="drug_type2" class="form-control">
                  <option value="null">Select Drug Type</option>
                  <option value="tab">Tablet</option>
                  <option value="ing">Injection</option>
                  <option value="cap">Capsule</option>
                  <option value="susp">Suspenction</option>
                  <option value="inh">Inhelar</option>
                  <option value="sup">Supojitory</option>
                  <option value="sal">Salain</option>
                  <option value="ors">ORS</option>
                  <option value="Cre">Cream</option>
                  <option value="drp">Drop</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="form-group">

                <input type="text" class="form-control" name="drug2" placeholder="Enter Deug Name" />
              </div>
            </div>


            <div class="col-md-4 ">
              <div class="form-group">

                <div class="input-group date">
                  <input class="form-control" type="text" name="rule2" placeholder="Enter Deug Rule" />

                </div>
              </div>
            </div>
          </div>



          <div class="row">
            <div class="col-md-3 ">
              <div class="form-group">

                <select name="drug_type3" class="form-control">
                  <option value="null">Select Drug Type</option>
                  <option value="tab">Tablet</option>
                  <option value="ing">Injection</option>
                  <option value="cap">Capsule</option>
                  <option value="susp">Suspenction</option>
                  <option value="inh">Inhelar</option>
                  <option value="sup">Supojitory</option>
                  <option value="sal">Salain</option>
                  <option value="ors">ORS</option>
                  <option value="Cre">Cream</option>
                  <option value="drp">Drop</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="form-group">

                <input type="text" class="form-control" name="drug3" placeholder="Enter Deug Name" />
              </div>
            </div>


            <div class="col-md-4 ">
              <div class="form-group">

                <div class="input-group date">
                  <input class="form-control" type="text" name="rule3" placeholder="Enter Deug Rule" />

                </div>
              </div>
            </div>
          </div>



          <div class="row">
            <div class="col-md-3 ">
              <div class="form-group">

                <select name="drug_type4" class="form-control">
                  <option value="null">Select Drug Type</option>
                  <option value="tab">Tablet</option>
                  <option value="ing">Injection</option>
                  <option value="cap">Capsule</option>
                  <option value="susp">Suspenction</option>
                  <option value="inh">Inhelar</option>
                  <option value="sup">Supojitory</option>
                  <option value="sal">Salain</option>
                  <option value="ors">ORS</option>
                  <option value="Cre">Cream</option>
                  <option value="drp">Drop</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="form-group">

                <input type="text" class="form-control" name="drug4" placeholder="Enter Deug Name" />
              </div>
            </div>


            <div class="col-md-4 ">
              <div class="form-group">

                <div class="input-group date">
                  <input class="form-control" type="text" name="rule4" placeholder="Enter Deug Rule" />

                </div>
              </div>
            </div>
          </div>




          <div class="row">
            <div class="col-md-3 ">
              <div class="form-group">

                <select name="drug_type5" class="form-control">
                  <option value="null">Select Drug Type</option>
                  <option value="tab">Tablet</option>
                  <option value="ing">Injection</option>
                  <option value="cap">Capsule</option>
                  <option value="susp">Suspenction</option>
                  <option value="inh">Inhelar</option>
                  <option value="sup">Supojitory</option>
                  <option value="sal">Salain</option>
                  <option value="ors">ORS</option>
                  <option value="Cre">Cream</option>
                  <option value="drp">Drop</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="form-group">

                <input type="text" class="form-control" name="drug5" placeholder="Enter Deug Name" />
              </div>
            </div>


            <div class="col-md-4 ">
              <div class="form-group">

                <div class="input-group date">
                  <input class="form-control" type="text" name="rule5" placeholder="Enter Deug Rule" />

                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-3 ">
              <div class="form-group">

                <select name="drug_type6" class="form-control">
                  <option value="null">Select Drug Type</option>
                  <option value="tab">Tablet</option>
                  <option value="ing">Injection</option>
                  <option value="cap">Capsule</option>
                  <option value="susp">Suspenction</option>
                  <option value="inh">Inhelar</option>
                  <option value="sup">Supojitory</option>
                  <option value="sal">Salain</option>
                  <option value="ors">ORS</option>
                  <option value="Cre">Cream</option>
                  <option value="drp">Drop</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="form-group">

                <input type="text" class="form-control" name="drug6" placeholder="Enter Deug Name" />
              </div>
            </div>


            <div class="col-md-4 ">
              <div class="form-group">

                <div class="input-group date">
                  <input class="form-control" type="text" name="rule6" placeholder="Enter Deug Rule" />

                </div>
              </div>
            </div>
          </div>







          <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Save') }}
                  </button>
              </div>
          </div>
      </form>


  </div>

<div class="col-sm-2">
  <table class="table">
    <h2> Patient Details</h2>
        <tr>
            <th>Name</th>
            <td>{{$appointment->name}}</td>
        </tr>
        <tr>
            <th>Sex</th>
            <td>{{$appointment->sex}}</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>{{$appointment->age}}</td>
        </tr>
        <tr>
            <th>Blood Group</th>
            <td>{{$appointment->blood}}</td>
        </tr>
        <tr>
            <th>Presure</th>
            <td>{{$appointment->presure}}</td>
        </tr>
        <tr>
            <th>Diabetes</th>
            <td>{{$appointment->diabetes}}</td>
        </tr>




    </table>

  </div>
  </div>
  </div>


  @endsection
