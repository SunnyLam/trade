<?php

class NodeController extends BaseController {

  public function create()
  {
    $rules = array(
      'title'                 =>'required',
    );

    if (Input::hasFile('image'))
    {
      $iid = ImageController::upload();
    }

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->passes())
    {
      $node              = new Node;
      $node->uid         = Auth::user()->uid;
      $node->title       = Input::get('title');
      $node->description = Input::get('description');
      $node->save();

      if ( intval($iid) > 0 )
        ImageController::update_nid($iid, $node->nid);

      return 'Done!';
    }
    else
    {
      return 'Fail!';
    }

  }
}
