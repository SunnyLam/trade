<?php

class MessageController extends BaseController {

  public function inbox($uid = 0)
  {
    $data = prepare_data();

    if (intval($uid) > 0) {
      $messages = Message::get_messages_by_user($uid);
      $data['messages'] = $messages;
      $data['inbox_user'] = User::find($uid);
      return View::make('message.inbox_user', $data);
    } else {
      $messages = Message::get_messages();
      $data['messages'] = $messages;
      return View::make('message.inbox_list', $data);
    }
  }

  public function send(){
    $rules = array(
      'to_uid' => 'required|numeric',
    );

    $data = prepare_data();

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->passes())
    {
      $message           = new Message;
      $message->from_uid = Auth::user()->uid;
      $message->to_uid   = Input::get('to_uid');
      $message->content  = Input::get('content');
      $message->save();

      $alert = array(
        'type'    => 'success',
        'messages' => array('The message has been sent.')
      );
      array_push($data['alerts'], $alert);

      $data['inbox_user'] = User::find(Input::get('to_uid'));
      return Redirect::to('message/inbox/' . Input::get('to_uid'))->with('alerts', $data['alerts']);
    }
    else
    {
      $messages = $validator->messages();
      $alert = array(
        'type'    => 'danger',
        'messages' => $messages->all()
      );
      array_push($data['alerts'], $alert);
      return View::make('message.inbox_user', $data);
    }

  }
}
