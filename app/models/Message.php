<?php

class Message extends Eloquent {

  protected $primaryKey = 'mid';

  public function get_messages()
  {
  }

  public static function get_messages_by_user( $uid){
    $uids = array( intval($uid), Auth::user()->uid);
    $messages = self::whereIn('from_uid', $uids)
      ->whereIn('to_uid', $uids)
      ->orderBy('mid', 'desc')
      ->get();
    return $messages;
  }

}
