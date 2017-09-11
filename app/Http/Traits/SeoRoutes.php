<?php

namespace App\Http\Traits;

use Lang;
use SEO;

trait SeoRoutes {

    /**
     * The seo language file name
     *
     * @var string
     */
    protected $seoLanguageGroup = 'routes';

    /**
     * Set SEO data for the action
     *
     * @param $key
     */
    protected function setSeo($key) {
        $titleKey = "{$this->seoLanguageGroup}.{$key}.title";
        $descriptionKey = "{$this->seoLanguageGroup}.{$key}.description";

        if (Lang::has($titleKey)) {
            SEO::setTitle(trans($titleKey));
        }

        if (Lang::has($descriptionKey)) {
            SEO::setDescription(trans($descriptionKey));
        }
    }
}
