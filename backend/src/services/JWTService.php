<?php
require_once '../../vendor/autoload.php';
use Firebase\JWT\JWT;

class JWTService {
    public static function create($payload) {
        return JWT::encode($payload, getenv('JWT_SECRET'));
    }

    public static function verify($token) {
        try {
            return JWT::decode($token, getenv('JWT_SECRET'), ['HS256']);
        } catch (Exception $e) {
            return null;
        }
    }
}
?>
