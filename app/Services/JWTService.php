<?php
namespace App\Services;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTService
{
    private static $algo = 'HS256';
    private static $accessExpiration  = 3600;        // 1 heure
    private static $refreshExpiration = 2592000;     // 30 jours

    // Récupère la clé secrète depuis l'environnement et vérifie sa longueur
    private static function getSecretKey(): string
    {
        $key = getenv('JWT_SECRET');
        if (!$key) {
            throw new \RuntimeException('JWT_SECRET non configuré dans .env');
        }
        if (strlen($key) < 32) {
            throw new \RuntimeException('JWT_SECRET trop court, minimum 32 caractères requis');
        }
        return $key;
    }

    // Génère un token d'accès
    public static function generateToken(array $user): string
    {
        $key = self::getSecretKey();

        $payload = [
            'iss'   => 'ap3-api',
            'aud'   => 'api-users',
            'iat'   => time(),
            'exp'   => time() + self::$accessExpiration,
            'uid'   => $user['idAdherents'],
            'email' => $user['mail'],
            'type'  => 'access'
        ];

        return JWT::encode($payload, $key, self::$algo);
    }

    // Génère un token de rafraîchissement
    public static function generateRefreshToken(array $user): string
    {
        $key = self::getSecretKey();

        $payload = [
            'iss'  => 'ap3-api-refresh',
            'aud'  => 'api-users',
            'iat'  => time(),
            'exp'  => time() + self::$refreshExpiration,
            'uid'  => $user['idAdherents'],
            'type' => 'refresh'
        ];

        return JWT::encode($payload, $key, self::$algo);
    }

    // Valide un token et retourne son payload décodé
    public static function validateToken(string $token)
    {
        $key = self::getSecretKey();
        try {
            return JWT::decode($token, new Key($key, self::$algo));
        } catch (\Exception $e) {
            throw new \Exception('Token invalide: ' . $e->getMessage());
        }
    }
}
