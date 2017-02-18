<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

use \MoodleSDK\Api\Model\User;
use \MoodleSDK\Auth\AuthTokenCredential;
use \MoodleSDK\Rest\RestApiContext;

$context = new RestApiContext('uycls185');
$context->setCredential(new AuthTokenCredential('34c6dbe3adb6e86efb05a39692ec77d8'));
$context->setSecureConnection(false);

$user = new User();
$userList = $user->all($context);

print_r(

    $user
        ->setUsername('agurodriguez')
        ->setPassword('Test..01')
        ->setFirstName('Agustín')
        ->setLastName('Rodríguez')
        ->setFullName('Agustín Rodríguez')
        ->setEmail('agurz@icloud.com')
        ->create($context)

);