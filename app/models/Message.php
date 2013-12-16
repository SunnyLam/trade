<?php

class Message extends Eloquent {

  protected $primaryKey = 'mid';

  public static function get_messages_by_user( $uid){
    $uids = array( intval($uid), Auth::user()->uid);
    $messages = self::whereIn('from_uid', $uids)
      ->whereIn('to_uid', $uids)
      ->orderBy('mid', 'desc')
      ->get();
    return $messages;
  }

  public static function get_messages(){
    $messages = self::
      leftJoin('users', 'users.uid', '=', 'messages.from_uid')
      ->where('to_uid', Auth::user()->uid)
      ->groupBy('from_uid')
      ->orderBy('mid', 'desc')
      ->get();
    return $messages;
  }
}
