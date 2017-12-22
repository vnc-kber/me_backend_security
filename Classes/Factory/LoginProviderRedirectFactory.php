<?php

namespace MoveElevator\MeBackendSecurity\Factory;

use MoveElevator\MeBackendSecurity\Domain\Model\LoginProviderRedirect;

/**
 * @package MoveElevator\MeBackendSecurity\Factory
 */
class LoginProviderRedirectFactory
{
    const BASE_URL = 'index.php';

    /**
     * @param string $username
     * @param array  $errors
     * @param array  $messages
     *
     * @return LoginProviderRedirect
     */
    public static function create($username = '', array $errors = [], array $messages = [])
    {
        if (is_string($username) === false) {
            throw new \InvalidArgumentException(
                'Some redirect parameters are not from valid type.',
                1512480235
            );
        }

        $parameter = [
            'r' => 1
        ];

        if (empty($username) === false) {
            $parameter['u'] = $username;
        }

        if (empty($errors) === false) {
            $parameter['e'] = urlencode(base64_encode(serialize($errors)));
        }

        if (empty($messages) === false) {
            $parameter['m'] = urlencode(base64_encode(serialize($messages)));
        }

        $loginProviderRedirect = new LoginProviderRedirect();
        $loginProviderRedirect->setUrl(self::BASE_URL . '?' . http_build_query($parameter));

        return $loginProviderRedirect;
    }
}
