@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')


<div class="row">
                <div class="col-md-12">
                    <div class="panel-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading panel-style">Message</div>
                            <fieldset style="border: 1px solid #537171 !important;border-radius: 0px;">
                                <div class="panel-body" style="padding: 0px;">
                                    @if (session('errorArray'))
                                        <div class="alert alert-danger">
                                            @foreach($errors->all() AS $key => $value)
                                                <strong><i class="fa fa-warning"></i> {{ $value }}</strong><br>
                                            @endforeach
                                        </div>
                                    @endif
                                    @if (session('error'))
                                    <div class="alert alert-danger"  id="error">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>{{ session('error') }}</strong>
                                    </div>
                                    @endif
                                    @if (session('success'))
                                    <div class="alert alert-success"  id="success">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>{{ session('success') }}</strong>
                                    </div>
                                    @endif
                                    <div class="box">
                                        <div class="box-header with-border" style="border-bottom: 3px solid #9CB770;">
                                            <h3 class="box-title">Read Message</h3>
                                        </div>
                                        <div class="box-body no-padding">
                                            <div class="mailbox-read-info">
                                                <h3>{{ $dataList->conversation_subject }}</h3>
                                                <h5>Sent to: 
                                                 
                                                </h5>
                                            </div>
                                            <div class="mailbox-read-message">
                                                <p>Hello {{$dataList->name}}</p>
                                                <p>{!! $dataList->conversation_body !!} </p>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <ul class="mailbox-attachments clearfix">
                                                <li>

                                                    @if(!empty($dataList->ca_name))
                                                    @if($dataList->ca_name)
                                                    @if($dataList->ca_type === 'Pdf')
                                                    <img style="height: 180px;width: 180px;margin-bottom: 10px;" class="thumbnail img-responsive" src="{{ asset('image/pdf.png') }}"/>
                                                    @elseif($dataList->ca_type === 'Doc')
                                                    <img style="height: 180px;width: 180px;margin-bottom: 10px;" class="thumbnail img-responsive" src="{{ asset('image/doc.png') }}"/>
                                                    @else
                                                    <img style="height: 180px;width: 180px;margin-bottom: 10px;" class="thumbnail img-responsive" src="{{ asset('upload/message_attachment/'. $dataList->ca_name ) }}"/>
                                                    @endif
                                                    <a download target="_blank" href="{{ asset('upload/message_attachment/'. $dataList->ca_name ) }}"><span class="label label-primary"><i class="fa fa-download"></i> Download </span></a>&nbsp;
                                                    <a target="_blank" href="{{ asset('upload/message_attachment/'. $dataList->ca_name ) }}"><span class="label label-info"><i class="fa fa-eye"></i> View </span></a>
                                                    @endif
                                                    @else
                                                    <span class="label label-danger" style="background-color: red; color: #fff;font-size: 10px">No Attachment</span>
                                                    @endif
                                                </span>
                                               
                                                </li>
                                            </ul>
                                        </div>
                                    </div>




                                </div>



                            </fieldset>
<br>
<a class="btn btn-success" href="{{ URL::to('message/reply/'.$dataList->id) }}">Reply</a>


                        </div>
                    </div>
                </div>
            </div>

            @endsection