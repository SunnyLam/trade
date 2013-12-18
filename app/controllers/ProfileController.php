<?php

class ProfileController extends BaseController {

  public function edit($uid)
  {
    $data = prepare_data();

    if ($data['user']->uid != $uid)
      Redirect::to_route('home');

    return View::make('profile.edit', $data);
  }

  public function upload_avatar($uid)
  {
    $data = prepare_data();

    $user = $data['user'];

    if ($user->uid != $uid)
      Redirect::to_route('home');

    if (Input::hasFile('avatar')) {

      $extension = Input::file('avatar')->getClientOriginalExtension();
      if (!is_dir(AVATAR_STORAGE_PATH . $user->uid))
        mkdir(AVATAR_STORAGE_PATH . $user->uid);

      Input::file('avatar')->move(AVATAR_STORAGE_PATH . $user->uid,
        'original.' . $extension);

      $file_path       = AVATAR_STORAGE_PATH . $user->uid . '/';
      $large_filename  = 'large.png';
      $normal_filename = 'normal.png';
      $mini_filename   = 'mini.png';

      $large_width  = 96;
      $normal_width = 48;
      $mini_width   = 24;

      $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(
        $file_path . 'original.' . $extension);

      $layer->resizeInPixel( $large_width, $large_width, false);
      $layer->save($file_path, $large_filename);

      $layer->resizeInPixel( $normal_width, $normal_width, true);
      $layer->save($file_path, $normal_filename);

      $layer->resizeInPixel( $mini_width, $mini_width, true);
      $layer->save($file_path, $mini_filename);

      $user->avatar = 1;
      $user->save();

    }

    return View::make('profile.edit', $data);
  }
}
