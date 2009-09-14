<?php
  // Cache::config('default', array('engine' => 'File'));
  Cache::config('default', array(
    'engine' => 'Apc', //[required]
    'duration'=> 3600, //[optional]
    'probability'=> 100, //[optional]
    'prefix' => Inflector::slug(APP_DIR) . '_', //[optional] prefix every cache file with this string
  ));
