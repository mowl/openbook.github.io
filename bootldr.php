<?php

$args = '?xdbg=1';
$base = "http://" . $_SERVER['HTTP_HOST'] . 'OpenBook' . $args;

header('Location: ' . $base);