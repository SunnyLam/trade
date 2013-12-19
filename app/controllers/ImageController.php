<?php

class ImageController extends BaseController {

  protected static $resize_width_large     = 1024; // pixel
  protected static $resize_width_thumbnail = 300; // pixel

  public static function get_image_path(){
    return FILE_STORAGE_PATH . 'image/';
  }

  public static function upload()
  {
    $image            = new Image;
    $image->name      = Input::file('image')->getClientOriginalName();
    $image->nid       = 0;
    $image->extension = Input::file('image')->getClientOriginalExtension();
    $image->size      = Input::file('image')->getSize();
    $image->mime_type = Input::file('image')->getMimeType();
    $image->save();

    if (!is_dir(IMAGE_STORAGE_PATH . $image->iid))
      mkdir(IMAGE_STORAGE_PATH . $image->iid);

    Input::file('image')->move(IMAGE_STORAGE_PATH . $image->iid,
      'original.' . $image->extension);

    self::generate_thumbnail( $image );

    return $image->iid;
  }

  public static function generate_thumbnail( $image )
  {
    $file_path = IMAGE_STORAGE_PATH . $image->iid . '/';
    $large_filename     = 'large.jpg';
    $thumbnail_filename = 'thumbnail.jpg';

    $layer = PHPImageWorkshop\ImageWorkshop::initFromPath($file_path .
      'original.' . $image->extension);

    $layer->resizeInPixel( self::$resize_width_large, null, true);
    $layer->save($file_path, $large_filename);

    $layer->resizeInPixel( self::$resize_width_thumbnail, null, true);
    $layer->save($file_path, $thumbnail_filename);
  }

  public static function update_nid( $iid, $nid )
  {
    $image      = Image::find($iid);
    $image->nid = $nid;
    $image->save();
  }

}
