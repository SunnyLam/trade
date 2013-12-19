<?php

function xx($data, $label = NULL)
{
  return drupal_debug($data, $label);
}

function drupal_debug($data, $label = NULL)
{
  $out = ($label ? $label . ': ' : '') . print_r($data, TRUE) . "\n";
  $file = storage_path() . '/logs/drupal_debug.txt';
  if (file_put_contents($file, $out, FILE_APPEND) === FALSE) {
    return FALSE;
  }
}

function prepare_data()
{
  return array(
    'page_title' => '',
    'alerts'     => Session::get('alerts', array()),
    'user'       => Auth::check() ? Auth::user() : null,
    'input'      => Input::all()
  );
}

function display_avatar($user, $size = 'normal')
{
  if (is_object($user) && $user->avatar){
    switch ($size) {
      case 'large':
        return asset( AVATAR_PUBLIC_PATH . $user->uid . '/large.png');
        break;
      case 'normal':
        return asset( AVATAR_PUBLIC_PATH . $user->uid . '/normal.png');
        break;
      case 'mini':
        return asset( AVATAR_PUBLIC_PATH . $user->uid . '/mini.png');
        break;

      default:
        return asset( AVATAR_PUBLIC_PATH . $user->uid . '/normal.png');
        break;
    }
  } else {
    switch ($size) {
      case 'large':
        return asset('js/holder.js/96x96');
        break;
      case 'normal':
        return asset('js/holder.js/48x48');
        break;
      case 'mini':
        return asset('js/holder.js/24x24');
        break;

      default:
        return asset('js/holder.js/48x48');
        break;
    }
  }
}
