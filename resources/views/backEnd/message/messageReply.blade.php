 @extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')
<div class="col-md-12">
                    <div class="panel-group">
                        <!--Add new union section-->
                        <div class="panel panel-primary">
                            <div class="panel-heading panel-style">Reply Message</div>
                            <fieldset style="border: 1px solid #537171 !important;border-radius: 0px;">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <form method="POST" action="{{ url('message/reply/store') }}" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="conversation_sent_from" id="conversation_sent_from" value="{{ $dataList->conversation_sent_to }}">
                                                <input type="hidden" name="conversation_sent_to" id="conversation_sent_to" value="{{ $dataList->conversation_sent_from }}">
                                                <div class="form-group{{ $errors->has('conversation_subject') ? ' has-error' : '' }}">
                                                    <label for="conversation_subject">Subject&nbsp;<span id="mark">*</span></label>
                                                    <input type="text" class="form-control requiredOL" id="conversation_subject" name="conversation_subject" value="RE: {{ $dataList->conversation_subject }}">
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
                                                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i>&nbsp;Reply Message</button>
                                                @if(Auth::user()->user_Type == 'doctor')
                                                <a href="{{url('prescription/'.$dataList->conversation_sent_from)}}" class="btn btn-primary pull-right"><i class="fa fa-check"></i>&nbsp;Prescription</a>
                                              @else
                                              @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <!--Add new union section end-->
                    </div>
                </div>

                @endsection
