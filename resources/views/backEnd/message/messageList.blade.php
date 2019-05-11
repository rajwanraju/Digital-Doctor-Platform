@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')



<div class="col-md-12">
                    <div class="panel-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading panel-style">Inbox Message List</div>
                            <fieldset style="border: 1px solid #537171 !important;border-radius: 0px;">
                                <div class="panel-body" style="padding: 0px;">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Alert Section-->
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
                                        </div>
                                    </div>
                                    <div class="box-body table-responsive no-padding">
                                        <table id="inboxList"  class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                                            <thead >
                                            <tr>
                                                <th> Message Received </th>
                                                <th> Form </th>
                                                <th> Subject </th>
                                                <th> Message Action </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($message as $data)
                                                <tr>
                                                    <td>
                                                        <?php
                                                        $createdList = $data->created_at >= 1 ? $data->created_at : $data->created_at;
                                                        ?>
                                                        {{ $createdList }}

                                                    </td>
                                                    <td>{{ $data->name }} </td>
                                                    <td>{{$data->conversation_subject}}</td>
                                                    <td>
                                                        <a type="button" class="btn btn-default" style="padding: 0px 6px;font-size: 12px;"  href="{{ URL::to('message/reply/'.$data->id) }}"><span style="color: #469B46"><i class="fa fa-reply"></i></span> Reply </a>&nbsp;

                                                        <a type="button" class="btn btn-default" style="padding: 0px 6px;font-size: 12px;"  href="{{ URL::to('/message/view/'.$data->id ) }}"> <span style="color: #3F9741"><i class="fa fa-eye"></i></span>&nbsp;View </a>
                                                        
                                                        <!-- Message delete modal end -->
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                         
                                        </table>
                                    </div>

{{$message->render()}}

                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>

                @endsection