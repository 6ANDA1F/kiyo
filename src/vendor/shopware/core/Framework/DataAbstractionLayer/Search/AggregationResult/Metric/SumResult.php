<?php declare(strict_types=1);

namespace Shopware\Core\Framework\DataAbstractionLayer\Search\AggregationResult\Metric;

use Shopware\Core\Framework\DataAbstractionLayer\Search\AggregationResult\AggregationResult;

/**
 * @deprecated tag:v6.5.0 - reason:becomes-final - Will be @final
 * @final
 */
class SumResult extends AggregationResult
{
    /**
     * @var float
     */
    protected $sum;

    public function __construct(string $name, float $sum)
    {
        parent::__construct($name);
        $this->sum = $sum;
    }

    public function getSum(): float
    {
        return $this->sum;
    }
}
