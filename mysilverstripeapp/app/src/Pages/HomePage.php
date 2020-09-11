<?php

use SilverStripe\Assets\File;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextareaField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CompositeField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
use SilverStripe\Forms\HeaderField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

class HomePage extends Page {

  // Define database fields
  private static $db = [
    'Lead' => 'Text',
    'CTAHeading' => 'Varchar',
    'CTAContent' => 'HTMLText',
  ];

  // Define realtions to other objects
  private static $has_one = [
    'Video' => File::class,
    'Image' => Image::class,
    'CTAImage' => Image::class,
  ];

  private static $has_many = [
    'Highlights' => Highlight::class,
  ];

  // Publish video and image when publishing page
  private static $owns = [
    'Video',
    'Image',
    'CTAImage',
  ];

  public function getCMSFields() {
    $fields = parent::getCMSFields();

    // Create fields for video and image
    $videoField = UploadField::create('Video', 'Hero background video')->setAllowedExtensions(['mp4']);
    $imageField = UploadField::create('Image', 'Hero background image');

    // Add grid field for highlights
    $gridFieldConfig = GridFieldConfig_RelationEditor::create();
    $highligthsField = GridField::create('Highlights', 'Highlights', $this->Highlights(), $gridFieldConfig);
    $fields->addFieldToTab('Root.Highlights', $highligthsField);

    // Add field for CTA section
    $ctaCompositeField = CompositeField::create([
      HeaderField::create('CTA'),
      TextField::create('CTAHeading'),
      HTMLEditorField::create('CTAContent'),
      UploadField::create('CTAImage', 'CTA background image'),
    ]);

    $fields->addFieldToTab('Root.Main', $ctaCompositeField, 'Metadata');

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