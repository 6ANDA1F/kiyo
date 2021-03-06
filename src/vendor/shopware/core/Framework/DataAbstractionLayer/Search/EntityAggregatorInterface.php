<?php declare(strict_types=1);

namespace Shopware\Core\Framework\DataAbstractionLayer\Search;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Search\AggregationResult\AggregationResultCollection;

/**
 * @deprecated tag:v6.5.0 - reason:becomes-internal - Will be internal
 */
interface EntityAggregatorInterface
{
    public function aggregate(EntityDefinition $definition, Criteria $criteria, Context $context): AggregationResultCollection;
}
