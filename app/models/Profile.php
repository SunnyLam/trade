<?php

class Profile extends Eloquent {

  protected $primaryKey = 'pid';

    public function user()
    {
        return $this->belongsTo('User', 'uid');
    }

}

