<!DOCTYPE html>
<?php
// template for checking the ?= quey string and storying results in $query

// parse url into separate components
$parts = parse_url($url);
// convert query string into keyword/value object $query
parse_str($parts['query'], $query);
?>
