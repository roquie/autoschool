<?php
/**
 * Developer: Roquie
 * Current file name: init.php
 * 
 * All rights reserved (c)
 */

Route::set('auth.reg.lk', 'lk(/<action>)')
    ->defaults(array(
           'directory'  => 'Lk',
           'controller' => 'Lk',
   ));
