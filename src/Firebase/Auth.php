<?php

namespace Firebase;

use Firebase\Util\JSON;
use Firebase\V3\Auth;
use GuzzleHttp\Psr7;
use Psr\Http\Message\RequestInterface;

class Auth
{
    public function __construct()
    {

    }

    public function getUser(string $uid)
    {
        return "getUser return";
    }

    public function getUserByEmail(string $uid)
    {

    }

    public function createUser(string $uid)
    {

    }

    public function deleteUser()
    {

    }

    public function updateUser()
    {

    }

}
