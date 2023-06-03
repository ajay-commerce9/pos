<?php

namespace Commerce9\Pos\Api\User;

interface UserManagementInterface
{
    /**
     * @param array $user
     * @return mixed
     */
    public function login($user);

    /**
     * @return mixed
     */
    public function logout();

}
