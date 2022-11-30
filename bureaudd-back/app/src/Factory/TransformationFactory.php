<?php

namespace App\Factory;

use App\Entity\Transformation;
use App\Repository\TransformationRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Transformation>
 *
 * @method static Transformation|Proxy createOne(array $attributes = [])
 * @method static Transformation[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Transformation[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Transformation|Proxy find(object|array|mixed $criteria)
 * @method static Transformation|Proxy findOrCreate(array $attributes)
 * @method static Transformation|Proxy first(string $sortedField = 'id')
 * @method static Transformation|Proxy last(string $sortedField = 'id')
 * @method static Transformation|Proxy random(array $attributes = [])
 * @method static Transformation|Proxy randomOrCreate(array $attributes = [])
 * @method static Transformation[]|Proxy[] all()
 * @method static Transformation[]|Proxy[] findBy(array $attributes)
 * @method static Transformation[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Transformation[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static TransformationRepository|RepositoryProxy repository()
 * @method Transformation|Proxy create(array|callable $attributes = [])
 */
final class TransformationFactory extends ModelFactory
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
            'transformation_name' => self::faker()->colorName()."_".self::faker()->colorName(),
            'size' => self::faker()->randomElement(['very small', 'small', 'normal', 'large', 'very large']),
            'armor_class' => self::faker()->numberBetween(4, 18),
            'power' => self::faker()->randomElement(['1/2', '1/4', '1/8', '1', '2', '3', '4']),
            'transformation_description' => self::faker()->text(50),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Transformation $transformation): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Transformation::class;
    }
}
