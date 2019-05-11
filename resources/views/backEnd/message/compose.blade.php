@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')

        <div class="container">
            <div class="row">
                <div class="col-md-12 " >
                    <div class="panel-group">
                        <!--Dashboard Section-->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-style">New Message</div>
                           
                                <div class="panel-body">
                                    <div class="row">
                                    	<div class="col-md-8">
				<form method="POST" action="{{ url('message/compose/store') }}" enctype="multipart/form-data" id="applicationMedicalInf">
                                    		{{ csrf_field() }}
                                    		<div class="form-group{{ $errors->has('conversation_sent_to') ? ' has-error' : '' }}">
                                    			<label for="conversation_sent_to">Patient  email address&nbsp;<span id="mark"></span></label>
                                    			<span id="streetaddresshdiv">
                                    				<select class="form-control requiredOL" id="conversation_sent_to" name="conversation_sent_to">
                                    					<option value="">Select email address </option>
                                    					@foreach($users as $user)
                                    					<option value="{{$user->id}}">{{$user->name}}</option>
                                    					@endforeach
                                    				</select>
                                    				<small class="text-danger">{{ $errors->first('conversation_sent_to') }}</small>
                                    			</span>
                                    		</div>


                                    		<div class="form-group{{ $errors->has('conversation_subject') ? ' has-error' : '' }}">
                                    			<label for="conversation_subject">Subject&nbsp;<span id="mark">*</span></label>
                                    			<input type="text" class="form-control requiredOL" id="conversation_subject" name="conversation_subject" value="{{ old('conversation_subject') }}">
                                    			<small class="text-danger">{{ $errors->first('conversation_subject') }}</small>
                                    		</div>

                                    		<div class="form-group{{ $errors->has('conversation_body') ? ' has-error' : '' }}">
                                    			<label for="conversation_body">Message Body&nbsp;<span id="mark">*</span></label>
                                    			<textarea name="conversation_body" id="conversation_body" class="form-control ckeditor_standard requiredOL">{{ old('conversation_body') }}</textarea>
                                    			<small class="text-danger">{{ $errors->first('conversation_body') }}</small>
                                    		</div>
                                    		<div class="form-group{{ $errors->has('ca_name') ? ' has-error' : '' }}">
                                    			<label for="ca_name">Attachment&nbsp;</label>
                                    			<input type="file" class="form-control ca_name requiredOL" id="ca_name" name="ca_name"><span class="text-danger">File Select Under 2mb</span>
                                    			<p class="help-block oError" style="color: red;margin-bottom: 0"></p>
                                    			<small class="text-danger">{{ $errors->first('ca_name') }}</small>
                                    		</div>
                                    		<button type="submit" class="btn btn-primary pull-right" style="margin-top: 15px"><i class="fa fa-check"></i>&nbsp;Send Message</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

  @endsection
