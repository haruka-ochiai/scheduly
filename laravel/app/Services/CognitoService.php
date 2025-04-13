<?php

namespace App\Services;

use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;
use Aws\Exception\AwsException;
use Illuminate\Support\Facades\Log;

class CognitoService
{
    protected $cognitoClient;

    public function __construct()
    {
        $this->cognitoClient = new CognitoIdentityProviderClient([
            'region' => env('AWS_COGNITO_REGION'),
            'version' => 'latest'
        ]);
    }

    public function authenticateUser($username, $password)
    {

        try {
            $result = $this -> cognitoClient -> adminInitiateAuth([
                'UserPoolId' => env('AWS_COGNITO_USER_POOL_ID'),
                'ClientId' => env("AWS_COGNITO_CLIENT_ID"),
                'AuthFlow' => 'ADMIN_NO_SRP_AUTH',
                'AuthParameters' => [
                    'USERNAME' => $username,
                    'PASSWORD' => $password,
                ],
            ]);

            Log::debug('Cognito login attempt', [
                'result' => $result
            ]);

            return $result['AuthenticationResult'];
        } catch (AwsException $e) {
            \Log::error('Cognito Authentication Error', [
                'error' => $e->getMessage(),
                // 'username' => $username,   // ← ここで使える
                // 'password' => $password, 
                'code' => $e->getCode(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
            return null;
        }
    }
}