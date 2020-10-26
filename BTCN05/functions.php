<?php
function sum($a, $b){
    return $a + $b;
}
function findUserByUsername($username)
{
    $contents = file_get_contents('./data');
    $users = unserialize($contents);
    for($i = 0; $i < sizeof($users); $i++)
    {
        $user = $users[$i];
        if ($user['username'] == $username)
        {
                return $user;
        }
    }
    return null;
}
function newUserByUsername($username,$password)
{
    $contents = file_get_contents('./data');
    $users = unserialize($contents);
    array_push($users,array(
        'username' => $username,
        'password' => $password
    ));
    file_put_contents('./data',serialize($users));
}

function getCurrentUser()
{
    if(isset($_SESSION['username'])){
        return findUserByUsername($_SESSION['username']);
    }
    return null;
}