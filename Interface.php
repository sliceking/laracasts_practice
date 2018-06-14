<?php

interface Logger
{
    public function execute($message);
}

class LogToFile implements Logger
{
    public function execute($message)
    {
        var_dump('log to the file ' . $message);
    }
}

class LogToDatabase implements Logger
{
    public function execute($message)
    {
        var_dump('log to database ' . $message);
    }
}

class UsersController
{

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
    public function show()
    {
        $user = 'johndoe';
        $this->logger->execute($user);
    }
}

$controller = new UsersController(new LogToDatabase);
$controller->show();

interface CastsToJson
{
    public function toJson();
}

class User implements CastsToJason
{
    public function toJson()
    {

    }
}
