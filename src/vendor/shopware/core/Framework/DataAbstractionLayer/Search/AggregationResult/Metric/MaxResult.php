<?php declare(strict_types=1);

namespace Shopware\Core\Framework\DataAbstractionLayer\Search\AggregationResult\Metric;

use Shopware\Core\Framework\DataAbstractionLayer\Search\AggregationResult\AggregationResult;

/**
 * @deprecated tag:v6.5.0 - reason:becomes-final - Will be @final
 * @final
 */
class MaxResult extends AggregationResult
{
    /**
     * @var string|float|int|null
     */
    protected $max;

    /**
     * @param string|float|int|null $max
     */
    public function __construct(string $name, $max)
    {
        parent::__construct($name);
        $this->max = $max;
    }

    /**
     * @return float|int|string|null
     */
    public function getMax()
    {
        return $this->max;
    }
}
