<?php

class Category extends Eloquent {

  protected $table = 'categories';
  protected $primaryKey = 'cid';

  public function node()
  {
    return $this->belongsTo('Node', 'nid');
  }
}
