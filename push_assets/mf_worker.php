<?php
  header('Service-Worker-Allowed: / ');
  header('Content-Type: text/javascript');
?>
/* 
  Version 1.0.1
*/
'use strict';
var WEBSITE_KEY = '';
importScripts("https://cdn.marketfox.io/mf_remote_worker.js");
