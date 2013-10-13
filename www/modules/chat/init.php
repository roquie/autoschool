<?php

Route::set('chat', 'chat(/<action>)')
    ->defaults(array(
        'controller' => 'Chat',
    ));