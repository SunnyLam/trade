<?php

class NodeController extends BaseController {

  public function create()
  {
    // $path = Input::file('image')->getRealPath();

    $destination_path = UPLOADED_FILE_PATH;
    $name      = Input::file('image')->getClientOriginalName();
    $extension = Input::file('image')->getClientOriginalExtension();
    $size      = Input::file('image')->getSize();
    $mime_type = Input::file('image')->getMimeType();

    $file            = new Attachment;
    $file->name      = $name;
    $file->nid = 1;
    $file->extension = $extension;
    $file->size      = $size;
    $file->mime_type = $mime_type;
    $file->save();
    // xx($file);
    // Input::file('image')->move($destination_path, $name);
    // return Input::file('image')->getRealPath();
    return 'Done!';
  }
  public function created()
  {

    $rules = array(
      'title'                 =>'required',
      'attachment'              =>'image',
      'password_confirmation' =>'required|alpha_num|between:5,12'
    );

    $data = array(
      'alerts' => array(
      ),
      'input' => Input::all()
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->passes())
    {
      $user           = new User;
      $user->email    = Input::get('email');
      $user->password = Hash::make(Input::get('password'));
      $user->name     = Input::get('name');
      $user->save();
      return Redirect::route('home');
    }
    else
    {
      $messages = $validator->messages();
      $alert = array(
        'type'    => 'danger',
        'messages' => $messages->all()
      );
      array_push($data['alerts'], $alert);
      return View::make('register', $data);
    }
  }
}
