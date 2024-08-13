<?php
require_once '../models/User.php';
require_once '../services/JWTService.php';

class AuthController
{
    public static function register($request)
    {
        $data = json_decode($request, true);
        $username = $data['username'];
        $password = $data['password'];
        $email = $data['email'];

        if (User::findByUsername($username)) {
            http_response_code(400);
            echo json_encode(['message' => 'User already exists']);
        } else {
            User::create($username, $password, $email);
            http_response_code(201);
            echo json_encode(['message' => 'User registered successfully']);
        }
    }

    public static function login($request)
    {
        $data = json_decode($request, true);
        $username = $data['username'];
        $password = $data['password'];

        echo json_encode($data);

        $user = User::findByUsername($username);
        if (!$user || !password_verify($password, $user['password'])) {
            http_response_code(401);
            echo json_encode(['message' => 'Invalid credentials']);
        } else {
            $token = JWTService::create(['id' => $user['id'], 'username' => $user['username']]);
            echo json_encode(['token' => $token]);
        }
    }
}
?>