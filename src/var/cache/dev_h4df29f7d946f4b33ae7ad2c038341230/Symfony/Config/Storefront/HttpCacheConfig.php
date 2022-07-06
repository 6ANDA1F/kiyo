<?php

namespace Symfony\Config\Storefront;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HttpCacheConfig 
{
    private $ignoredUrlParameters;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function ignoredUrlParameters($value): self
    {
        $this->_usedProperties['ignoredUrlParameters'] = true;
        $this->ignoredUrlParameters = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('ignored_url_parameters', $value)) {
            $this->_usedProperties['ignoredUrlParameters'] = true;
            $this->ignoredUrlParameters = $value['ignored_url_parameters'];
            unset($value['ignored_url_parameters']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['ignoredUrlParameters'])) {
            $output['ignored_url_parameters'] = $this->ignoredUrlParameters;
        }

        return $output;
    }

}
