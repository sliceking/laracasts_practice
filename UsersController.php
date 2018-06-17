<?php

class UsersController
{
    protected $usersService;

    public function __construct(UserService $userService)
    {

    }

    public function register()
    {

    }

    public function cancel()
    {

    }

}

class AuthController
{
    public $registrationService;
    public $stripe;

    public function __construct(RegistrationService $registrationService, Stripe $stripe)
    {
        $this->registrationService = $registrationService;
        $this->stripe = $stripe;
    }
}

class UserService
{

    protected $userRespositry;

    protected $userEventRepository;

    public function __construct(UserRepository $userRespositry, UserEventRepository $userEventRepository)
    {
        $this->userRepository = $userRespositry;
        $this->userEventRepository = $userEventRepository;
    }
}
