<?php 
$file = file_get_contents('./data');

$member = array(
    'username' => 'admin',
    'password' => '123456'
);

$users = array($member);
file_put_contents('./data',serialize($users));

