<?php

class User
{

    var $first_name;
    var $last_name;
    var $username;

    function full_name()
    {
        return $this->first_name . " " . $this->last_name;
    }
}

class Customer extends User
{

var $city;
var $state;
var $country;



}

$u = new User;
$u->first_name = 'Peter';
$u->last_name = 'Mwangi';
$u->username = 'Agaldem';


$c = new Customer;
$c->first_name = 'James';
$c->last_name = 'Wanyeki';
$c->username = 'JWKamau';

echo $u->full_name() . '<br />';
echo $c->full_name() . '<br />';


if (is_subclass_of($c, 'User')) {
    echo "Instance is a subclass of User. <br />";
}

$parents = class_parents($c);

echo implode(',', $parents) . '<br />';
