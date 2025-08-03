<?php

use Roots\WPConfig\Config;

if (class_exists(Config::class)) {
    if (!defined('DISABLE_WP_CRON')) {
        Config::define('DISABLE_WP_CRON', getenv('DISABLE_WP_CRON') === 'true');
    }

    if (!defined('WP_MEMORY_LIMIT')) {
        Config::define('WP_MEMORY_LIMIT', getenv('WP_MEMORY_LIMIT') ?: '256M');
    }
}