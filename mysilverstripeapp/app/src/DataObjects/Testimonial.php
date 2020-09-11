<?php

use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class Testimonial extends DataObject {

  private static $db = [
    'Name' => 'Varchar',
    'Qoute' => 'Text',
    'Position' => 'Varchar',
    'Company' => 'Varchar',
  ];

  private static $has_one = [
    'Image' => Image::class,
  ];

  // Show info about testimonial when viewing in admin
  private static $summary_fields = [
    'Name' => 'Name',
    'Company' => 'Company'
  ];

  private static $owns = [
    'Image',
  ];

  // Add draft/ published stage
  private static $extensions = [
    Versioned::class,
  ];
}