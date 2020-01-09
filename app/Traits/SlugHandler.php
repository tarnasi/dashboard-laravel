<?php

namespace App\Traits;

trait Slughandler {

    /**
     * Convert string to slug.
     *
     * @param string $text
     * @return string
     */
    public function setSlug($text)
    {
        $pattern = "/[\s\_\-\,\|\+\=\!\@\#\$\%\^\&\*\(\)\?]+/m";
        return preg_replace($pattern, '-',$text);
    }

}
