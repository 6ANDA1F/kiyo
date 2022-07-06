<?php declare(strict_types=1);

namespace Shopware\Core\System\SystemConfig;

use Shopware\Core\Framework\Adapter\Cache\CacheValueCompressor;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class CachedSystemConfigLoader extends AbstractSystemConfigLoader
{
    public const CACHE_TAG = 'system-config';

    private AbstractSystemConfigLoader $decorated;

    private CacheInterface $cache;

    /**
     * @internal
     */
    public function __construct(AbstractSystemConfigLoader $decorated, CacheInterface $cache)
    {
        $this->decorated = $decorated;
        $this->cache = $cache;
    }

    public function getDecorated(): AbstractSystemConfigLoader
    {
        return $this->decorated;
    }

    public function load(?string $salesChannelId): array
    {
        $key = 'system-config-' . $salesChannelId;

        $value = $this->cache->get($key, function (ItemInterface $item) use ($salesChannelId) {
            $config = $this->getDecorated()->load($salesChannelId);

            $item->tag([self::CACHE_TAG]);

            return CacheValueCompressor::compress($config);
        });

        return CacheValueCompressor::uncompress($value);
    }
}
