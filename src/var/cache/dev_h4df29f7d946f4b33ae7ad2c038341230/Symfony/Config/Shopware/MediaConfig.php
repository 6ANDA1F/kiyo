<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MediaConfig 
{
    private $enableUrlUploadFeature;
    private $enableUrlValidation;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableUrlUploadFeature($value): self
    {
        $this->_usedProperties['enableUrlUploadFeature'] = true;
        $this->enableUrlUploadFeature = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableUrlValidation($value): self
    {
        $this->_usedProperties['enableUrlValidation'] = true;
        $this->enableUrlValidation = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enable_url_upload_feature', $value)) {
            $this->_usedProperties['enableUrlUploadFeature'] = true;
            $this->enableUrlUploadFeature = $value['enable_url_upload_feature'];
            unset($value['enable_url_upload_feature']);
        }

        if (array_key_exists('enable_url_validation', $value)) {
            $this->_usedProperties['enableUrlValidation'] = true;
            $this->enableUrlValidation = $value['enable_url_validation'];
            unset($value['enable_url_validation']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enableUrlUploadFeature'])) {
            $output['enable_url_upload_feature'] = $this->enableUrlUploadFeature;
        }
        if (isset($this->_usedProperties['enableUrlValidation'])) {
            $output['enable_url_validation'] = $this->enableUrlValidation;
        }

        return $output;
    }

}
