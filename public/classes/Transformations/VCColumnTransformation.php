<?php

namespace Palasthotel\WordPress\MigrateToGutenberg\Transformations;

use Palasthotel\WordPress\MigrateToGutenberg\Interfaces\ShortcodeTransformation;

class VCColumnTransformation implements ShortcodeTransformation {

    function tag(): string {
        return "vc_column";
    }

    function transform($attrs, $content = ""): string {

        // Wrap the column content with wp:columns and wp:column
        $output  = "<!-- wp:columns -->\n";
        $output .= "<div class=\"wp-block-columns\">\n";
        $output .= "<!-- wp:column -->\n";
        $output .= "<div class=\"wp-block-column\">\n";
        $output .= $content;
        $output .= "</div>\n";
        $output .= "<!-- /wp:column -->\n";
        $output .= "</div>\n";
        $output .= "<!-- /wp:columns -->\n";

        return $output;
    }
}
