<?php
/**
 * Developer: Roquie
 * DateTime: 30.08.13 3:05
 * Current file name: init.php
 * 
 * All rights reserved (c)
 */

// Load Swiftmailer
require Kohana::find_file('vendor', 'swiftmailer/swift_required', 'php');

function swiftmailer_configurator() {
    // Set the default character set for everything
    Swift_Preferences::getInstance()->setCharset(Kohana::$charset);
}

Swift::init('swiftmailer_configurator');