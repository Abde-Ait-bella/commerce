<?php

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$uriClean = str_replace('/commerce/', '', strtok($uri, "?"));


