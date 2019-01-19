<?php

$GLOBALS['config'] = array(
  'http' => array(
    'root' =>  'http://' . $_SERVER['HTTP_HOST'] . '/',
    'admin' =>  "http://" . $_SERVER['HTTP_HOST'] . "/admin/"
  ),
  'data' => array(
    'path' => $_SERVER['DOCUMENT_ROOT'] . '/app/admin-data/',
    'webdata' => $_SERVER['DOCUMENT_ROOT'] . '/data/',
    'superuser' => 'adamaoc',
    'api_token' => '228b70a777c0e78eb83c694cce65a937'
  ),
  'remember' => array(
    'cookie_name' => 'hash',
    'cookie_expiry' => 172800
  ),
  'session' => array(
    'session_name' => 'user',
    'token_name' => 'token'
  )
);
