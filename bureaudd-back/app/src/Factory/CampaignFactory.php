<?php

namespace App\Factory;

use App\Entity\Campaign;
use App\Repository\CampaignRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Campaign>
 *
 * @method static Campaign|Proxy createOne(array $attributes = [])
 * @method static Campaign[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Campaign[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Campaign|Proxy find(object|array|mixed $criteria)
 * @method static Campaign|Proxy findOrCreate(array $attributes)
 * @method static Campaign|Proxy first(string $sortedField = 'id')
 * @method static Campaign|Proxy last(string $sortedField = 'id')
 * @method static Campaign|Proxy random(array $attributes = [])
 * @method static Campaign|Proxy randomOrCreate(array $attributes = [])
 * @method static Campaign[]|Proxy[] all()
 * @method static Campaign[]|Proxy[] findBy(array $attributes)
 * @method static Campaign[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Campaign[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static CampaignRepository|RepositoryProxy repository()
 * @method Campaign|Proxy create(array|callable $attributes = [])
 */
final class CampaignFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            'campaign_name' => self::faker()->word(2),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Campaign $campaign): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Campaign::class;
    }
}
