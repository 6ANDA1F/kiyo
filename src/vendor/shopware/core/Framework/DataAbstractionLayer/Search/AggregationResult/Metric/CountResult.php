<?php declare(strict_types=1);

namespace Shopware\Core\Framework\DataAbstractionLayer\Search\AggregationResult\Metric;

use Shopware\Core\Framework\DataAbstractionLayer\Search\AggregationResult\AggregationResult;

/**
 * @deprecated tag:v6.5.0 - reason:becomes-final - Will be @final
 * @final
 */
class CountResult extends AggregationResult
{
    /**
     * @var int
     */
    protected $count;

    public function __construct(string $name, int $count)
    {
        parent::__construct($name);
        $this->count = $count;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
