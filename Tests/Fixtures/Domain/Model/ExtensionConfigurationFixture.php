<?php

namespace MoveElevator\MeBackendSecurity\Tests\Fixtures\Domain\Model;

use MoveElevator\MeBackendSecurity\Domain\Model\ExtensionConfiguration;

/**
 * @package MoveElevator\MeBackendSecurity\Tests\Fixtures\Domain\Model
 */
trait ExtensionConfigurationFixture
{
    /**
     * @var int
     */
    protected $minimumSpecialCharacters = 1;

    /**
     * @var int
     */
    protected $minimumDigits = 1;

    /**
     * @var int
     */
    protected $minimumCapitalCharacters = 1;

    /**
     * @var int
     */
    protected $minimumLowercaseCharacters = 1;

    /**
     * @var int
     */
    protected $passwordLength = 8;

    /**
     * @var int
     */
    protected $maximumValidDays = 14;

    /**
     * @return ExtensionConfiguration
     */
    protected function getExtensionConfigurationFixture()
    {
        return new ExtensionConfiguration(
            $this->minimumSpecialCharacters,
            $this->minimumDigits,
            $this->minimumCapitalCharacters,
            $this->minimumLowercaseCharacters,
            $this->passwordLength,
            $this->maximumValidDays
        );
    }

    /**
     * @return array
     */
    protected function getRawExtensionConfigurationFixture()
    {
        return [
            'minimumSpecialCharacters' => ['value' => $this->minimumSpecialCharacters],
            'minimumDigits' => ['value' => $this->minimumDigits],
            'minimumCapitalCharacters' => ['value' => $this->minimumCapitalCharacters],
            'minimumLowercaseCharacters' => ['value' => $this->minimumLowercaseCharacters],
            'passwordLength' => ['value' => $this->passwordLength],
            'maximumValidDays' => ['value' => $this->maximumValidDays]
        ];
    }
}
