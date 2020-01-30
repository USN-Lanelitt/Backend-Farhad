<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class UserController
{
    /**
     *
     */
    public function getUsers()
    {
        //sleep(2);
        return new JsonResponse(
            array(
                array(
                    "firstname" => "farhad",
                    "lastname" => "ahmadhadi",
                    "birthday" => "13-09-1995",
                    "phone" => "94139451",
                    "email" => "227019@usn.no",
                    "password" => "1234"
                )
            )
        );
    }
}