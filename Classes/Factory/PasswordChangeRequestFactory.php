<?php

namespace MoveElevator\MeBackendSecurity\Factory;

use MoveElevator\MeBackendSecurity\Domain\Model\PasswordChangeRequest;
use TYPO3\CMS\Rsaauth\RsaEncryptionDecoder;

/**
 * @package MoveElevator\MeBackendSecurity\Factory
 */
class PasswordChangeRequestFactory
{
    /**
     * @param array                $changeRequestParameters
     * @param RsaEncryptionDecoder $rsaEncryptionDecoder
     *
     * @return PasswordChangeRequest
     */
    public static function create($changeRequestParameters, RsaEncryptionDecoder $rsaEncryptionDecoder)
    {
        if (empty($changeRequestParameters['password']) ||
            empty($changeRequestParameters['password2'])
        ) {
            throw new \InvalidArgumentException(
                'The given arguments are incomplete!'
            );
        }

        $passwordChange = new PasswordChangeRequest();
        $passwordChange->setPassword(
            $rsaEncryptionDecoder->decrypt($changeRequestParameters['password'])
        );
        $passwordChange->setPasswordConfirmation(
            $rsaEncryptionDecoder->decrypt($changeRequestParameters['password2'])
        );

        return $passwordChange;
    }
}
