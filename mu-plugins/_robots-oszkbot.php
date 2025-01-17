<?php

/*
 * Plugin Name: Disallow OSZKbot
 */

add_filter(
    'robots_txt',
    static function ($output, $isPublic) {
        $lines = [
            'User-agent: OSZKbot',
            'Disallow: /',
        ];
        if ($isPublic) {
            return implode("\n", $lines) . "\n\n" . $output;
        }
        return $output;
    },
    -1,
    2
);
