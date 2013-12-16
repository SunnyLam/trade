<?php

class UserController extends BaseController {

  public function login()
  {

    $rules = array(
      'email'                 =>'required|email',
      'password'              =>'required|alpha_num',
    );

    $data = array(
      'alerts' => array(
      ),
      'input' => Input::all()
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->passes())
    {
      if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
      {
        return Redirect::intended();
      }
      else
      {
        $alert = array(
          'type'    => 'danger',
          'messages' => array('Invalid sign-on. Please try again.')
        );
        array_push($data['alerts'], $alert);
        return View::make('login', $data);
      }
    }
    else
    {
      $messages = $validator->messages();
      $alert = array(
        'type'    => 'danger',
        'messages' => $messages->all()
      );
      array_push($data['alerts'], $alert);
      return View::make('login', $data);
    }
  }

  public function register()
  {

    $rules = array(
      'email'                 =>'required|email|unique:users',
      'name'                  =>'required|alpha|between:2,12|unique:users',
      'password'              =>'required|alpha_num|between:5,12|confirmed',
      'password_confirmation' =>'required|alpha_num|between:5,12'
    );

    $data = array(
      'alerts' => array(),
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
