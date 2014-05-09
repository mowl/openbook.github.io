<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['css'] = array(
    array(
        'file' => 'extern/bootstrap.css',
        'version' => '1.0'
    ),
    array(
        'file' => 'global.css',
        'version' => '1.0'
    ),
    array(
        'file' => 'http://fonts.googleapis.com/css?family=Lato:300,400,700',
        'extern' => true
    )
);

$config['js'] = array(
    array(
        'file' => 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
        'extern' => true
    ),
    array(
        'file' => 'http://matvp.info/open/moo.js',
        'extern' => true
    ),
    array(
        'file' => 'global.js',
        'version' => '1.0'
    )
);