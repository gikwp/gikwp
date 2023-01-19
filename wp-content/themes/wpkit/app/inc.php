<?php
/**
 * The file is used for include the theme classes.
 */

use App\ACF;
use App\Services;

// Theme ACF class.
require_once __DIR__ . '/Classes/ACF.php';
new ACF();

// Services custom post type class.
require_once __DIR__ . '/Classes/Services.php';
new Services();
