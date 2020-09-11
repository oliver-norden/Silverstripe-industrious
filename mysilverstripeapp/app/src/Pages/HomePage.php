<?php

use SilverStripe\Assets\File;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextareaField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class HomePage extends Page {

  // Define database fields
  private static $db = [
    'Lead' => 'Text',
  ];

  // Define realtions to other objects
  private static $has_one = [
    'Video' => File::class,
    'Image' => Image::class,
  ];

  // Publish video and image when publishing page
  private static $owns = [
    'Video',
    'Image',
  ];

  public function getCMSFields() {
    $fields = parent::getCMSFields();

    // Create fields for video and image
    $videoField = UploadField::create('Video', 'Hero background video')->setAllowedExtensions(['mp4']);
    $imageField = UploadField::create('Image', 'Hero background image');

    // Add fields to main tab above content field
    $fields->addFieldsToTab('Root.Main', [
      TextareaField::create('Lead'),
      $videoField,
      $imageField,
    ], 'Content');

    return $fields;
  }
}

class HomePageController extends PageController {

}