<?php

class ProfileController extends BaseController {

  public function load($uid)
  {
    dd(User::find($uid)->profile);
  }
}
