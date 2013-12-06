<?php

function dl($data, $label = NULL) {
  return drupal_debug($data, $label);
}

function drupal_debug($data, $label = NULL) {
  $out = ($label ? $label . ': ' : '') . print_r($data, TRUE) . "\n";
  $file = storage_path() . '/logs/drupal_debug.txt';
  if (file_put_contents($file, $out, FILE_APPEND) === FALSE) {
    return FALSE;
  }
}
