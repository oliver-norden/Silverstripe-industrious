<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;

    class Page extends SiteTree
    {
        private static $db = [];

        private static $has_one = [];

        // Return all testimonials
        public function getTestimonials() {
            return Testimonial::get();
        }
    }
}
