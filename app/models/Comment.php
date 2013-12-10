<?php

class Comment extends Eloquent {

  protected $primaryKey = 'cid';

  public function node()
  {
    return $this->belongsTo('Node', 'nid');
  }
}
