<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Forms\CheckboxField;

class Page extends SiteTree
    {
        private static $db = [
            'ShowInFooter' => 'Boolean',
        ];

        private static $has_one = [];

        public function getCMSFields() {
            $fields = parent::getCMSFields();

            $fields->addFieldToTab('Root.Settings', CheckboxField::create('ShowInFooter'), 'ShowInSearch');

            return $fields;
        }

        // Return all testimonials
        public function getTestimonials() {
            return Testimonial::get();
        }
    }
}
