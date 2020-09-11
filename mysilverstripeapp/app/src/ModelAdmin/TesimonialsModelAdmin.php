<?php

use SilverStripe\Admin\ModelAdmin;

class TesimonialModelAdmin extends ModelAdmin {

  private static $menu_title = 'Testimonials';

  private static $url_segment = 'testimonials';

  private static $managed_models = [
    Testimonial::class,
  ];
}