<?php

namespace App\Factory;

use App\Entity\Background;
use App\Repository\BackgroundRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Background>
 *
 * @method static Background|Proxy createOne(array $attributes = [])
 * @method static Background[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Background[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Background|Proxy find(object|array|mixed $criteria)
 * @method static Background|Proxy findOrCreate(array $attributes)
 * @method static Background|Proxy first(string $sortedField = 'id')
 * @method static Background|Proxy last(string $sortedField = 'id')
 * @method static Background|Proxy random(array $attributes = [])
 * @method static Background|Proxy randomOrCreate(array $attributes = [])
 * @method static Background[]|Proxy[] all()
 * @method static Background[]|Proxy[] findBy(array $attributes)
 * @method static Background[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Background[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static BackgroundRepository|RepositoryProxy repository()
 * @method Background|Proxy create(array|callable $attributes = [])
 */
final class BackgroundFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'background_name' => self::faker()->text(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Background $background): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Background::class;
    }
}
