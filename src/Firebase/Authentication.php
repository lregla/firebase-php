<?php

namespace Firebase;

use Firebase\Util\JSON;
use Firebase\V3\Auth;
use GuzzleHttp\Psr7;
use Psr\Http\Message\RequestInterface;

class Authentication
{
    public function __construct()
    {

    }

    public function getUser(string $uid)
    {
        return "getUser return" . $uid;
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
