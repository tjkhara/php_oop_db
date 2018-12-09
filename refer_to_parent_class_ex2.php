<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 11:04
   */

  class Image
  {

    public static $resizing_enabled = true;

    public static function geometry()
    {
      echo "800x600";
    }
  }

  class ProfileImage extends Image
  {
    public static function geometry()
    {
      if(self::$resizing_enabled)
      {
        echo "100x100";
      }
      else
      {
        parent::geometry();
      }
    }
  }

  ProfileImage::$resizing_enabled = false;
  ProfileImage::geometry();

