<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ConversiationModel;
use App\ConversiationAtachmentModel;
use Carbon\Carbon;

use Illuminate\Support\Facades\Input;
use File;
use PhpParser\Node\Stmt\Return_;
use DB;
use Illuminate\Support\Facades\Auth;




class MessageController extends Controller
{
    public function compose(){

$users = DB::table('users')
->join('appointments','users.id','appointments.userId')
->select('users.*','appointments.userId')
->where('appointments.doctorId',Auth::user()->id)
->where('appointments.status',1)
->get();
//dd($users);
return view('backEnd.message.compose',compact('users'));

    }


public function storeMessageCompose(Request $request){


        $conversation_subject = $request->conversation_subject;
        $conversation_body = $request->conversation_body;
        $userId=$request->conversation_sent_to;

        $errors = array();

        if (empty($conversation_subject) || $conversation_subject == '') {
            $errors['conversation_subject'] = "Subject required";
        }

        if (empty($conversation_body) || $conversation_body == '') {
            $errors['conversation_body'] = "Message body required";
        }

        /*
         * Checking attachment is empty or not
         */
        if (!empty($request->file('ca_name'))) {
            if ($_FILES['ca_name']['name']) {
                $allowed = array('jpg', 'JPG', 'jpeg', 'JPEG', 'doc', 'docx', 'DOC', 'DOCX', 'pdf', 'PDF', 'png', 'PNG');
                $ext = pathinfo($_FILES['ca_name']['name'], PATHINFO_EXTENSION);
                if (!in_array($ext, $allowed)) {
                    $errors['ca_name'] = "Attachment file should be in JPG, JPEG, JPEG, DOC, PDF format";
                }
                if (File::size(Input::file("ca_name")) > 2048000) {
                    $errors['ca_name'] = "Message attachment file must be less than 2 MB";
                }
            }
        }
        if (count($errors) > 0) {
            return redirect()->back()->withInput()->withErrors($errors)->with('errorArray', 'Array Error Occured');
        } else {



            $obj = new ConversiationModel();
            $obj->conversation_sent_from = Auth::user()->id;
            $obj->conversation_sent_to = $userId;
            $obj->conversation_subject = $conversation_subject;
            $obj->conversation_body = $conversation_body;
            $obj->status = 0;
            $obj->created_at = Carbon::now();
            if ($obj->save()) {
                $conversationAttachment = new ConversiationAtachmentModel();
                $conversationAttachment->ca_conversation_id = $obj->id;

                if (!empty($_FILES['ca_name']['name'])) {

                    $ext = pathinfo($_FILES['ca_name']['name'], PATHINFO_EXTENSION);
                    if ($ext === 'jpeg' || $ext === 'jpg' || $ext === 'JPG' || $ext === 'JPEG' || $ext === 'png' || $ext === 'PNG') {
                        $ca_type = "Image";
                    } else if ($ext === 'doc' || $ext === 'docx' || $ext === 'DOC' || $ext === 'DOCX') {
                        $ca_type = "Doc";
                    } else {
                        $ca_type = "Pdf";
                    }
                    if ($ext === 'jpeg' || $ext === 'jpg' || $ext === 'JPG' || $ext === 'JPEG' || $ext === 'png' || $ext === 'PNG' || $ext === 'doc' || $ext === 'docx' || $ext === 'DOC' || $ext === 'DOCX' || $ext === 'pdf' || $ext === 'PDF') {
                        $imageName = date('YmdHis') . "BI" . rand(5, 10) . '.' . $request->ca_name->getClientOriginalExtension();
                        $request->ca_name->move(('upload/message_attachment/'), $imageName);
                        $conversationAttachment->ca_name = $imageName;
                        $conversationAttachment->ca_type = $ca_type;
                    }

                    $conversationAttachment->save();
                }

                    return redirect('/message/list')->with('success', 'Congratulations, message send successfully');
        }
        }
    }


public function messageList(){


$message = DB::table('conversiation_models')
->join('users','conversiation_models.conversation_sent_to','users.id')
->select('conversiation_models.*','users.name')
->where('conversation_sent_to',Auth::user()->id)->orderBy('conversiation_models.created_at','desc')->paginate(8);
//dd($message);
return view('backEnd.message.messageList',compact('message'));


}

public function messageView($id){


$message = ConversiationModel::where('id',$id)->first();

$message->status = 1;
$message->save();



   $dataList = DB::table('conversiation_models')
   ->join('conversiation_atachment_models','conversiation_models.id','conversiation_atachment_models.ca_conversation_id')
   ->join('users','conversiation_models.conversation_sent_to','users.id')
   ->select('conversiation_models.*','conversiation_atachment_models.ca_type','conversiation_atachment_models.ca_name','users.name')
            ->where('conversation_sent_to', Auth::user()->id)
            ->first();


//dd($dataList);
return view('backEnd.message.messageView',compact('dataList'));


}


public function messageReply($id){

         $dataList = ConversiationModel::where('id', $id)->first();
      //  dd($dataList);
      $dataList->status = 1;
      $dataList->save();
            return view('backend.message.messageReply', compact('dataList'));




}
public function storemessageReply(Request $request){
//return $request->all();
  $conversation_subject = $request->conversation_subject;
  $conversation_body = $request->conversation_body;
  $userId=$request->conversation_sent_to;

  $errors = array();

  if (empty($conversation_subject) || $conversation_subject == '') {
      $errors['conversation_subject'] = "Subject required";
  }

  if (empty($conversation_body) || $conversation_body == '') {
      $errors['conversation_body'] = "Message body required";
  }

  /*
   * Checking attachment is empty or not
   */
  if (!empty($request->file('ca_name'))) {
      if ($_FILES['ca_name']['name']) {
          $allowed = array('jpg', 'JPG', 'jpeg', 'JPEG', 'doc', 'docx', 'DOC', 'DOCX', 'pdf', 'PDF', 'png', 'PNG');
          $ext = pathinfo($_FILES['ca_name']['name'], PATHINFO_EXTENSION);
          if (!in_array($ext, $allowed)) {
              $errors['ca_name'] = "Attachment file should be in JPG, JPEG, JPEG, DOC, PDF format";
          }
          if (File::size(Input::file("ca_name")) > 2048000) {
              $errors['ca_name'] = "Message attachment file must be less than 2 MB";
          }
      }
  }
  if (count($errors) > 0) {
      return redirect()->back()->withInput()->withErrors($errors)->with('errorArray', 'Array Error Occured');
  } else {



      $obj = new ConversiationModel();
      $obj->conversation_sent_from = Auth::user()->id;
      $obj->conversation_sent_to = $userId;
      $obj->conversation_subject = $conversation_subject;
      $obj->conversation_body = $conversation_body;
      $obj->status = 0;
      $obj->created_at = Carbon::now();

//return $_FILES['ca_name'];


      if ($obj->save()) {
          $conversationAttachment = new ConversiationAtachmentModel();
          $conversationAttachment->ca_conversation_id = $obj->id;

          if (!empty($_FILES['ca_name']['name'])) {

          //  return $_FILES['ca_name'];

              $ext = pathinfo($_FILES['ca_name']['name'], PATHINFO_EXTENSION);
              if ($ext === 'jpeg' || $ext === 'jpg' || $ext === 'JPG' || $ext === 'JPEG' || $ext === 'png' || $ext === 'PNG') {
                  $ca_type = "Image";
              } else if ($ext === 'doc' || $ext === 'docx' || $ext === 'DOC' || $ext === 'DOCX') {
                  $ca_type = "Doc";
              } else {
                  $ca_type = "Pdf";
              }
              if ($ext === 'jpeg' || $ext === 'jpg' || $ext === 'JPG' || $ext === 'JPEG' || $ext === 'png' || $ext === 'PNG' || $ext === 'doc' || $ext === 'docx' || $ext === 'DOC' || $ext === 'DOCX' || $ext === 'pdf' || $ext === 'PDF') {
                  $imageName = date('YmdHis') . "BI" . rand(5, 10) . '.' . $request->ca_name->getClientOriginalExtension();
                  $request->ca_name->move(('upload/message_attachment/'), $imageName);
                  $conversationAttachment->ca_name = $imageName;
                  $conversationAttachment->ca_type = $ca_type;

                 // return $conversationAttachment;
              }

              $conversationAttachment->save();
               return redirect('/message/list')->with('success', 'Congratulations, message send successfully');
          }

             
  }
  }



}

}
