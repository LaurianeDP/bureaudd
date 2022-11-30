<?php

namespace App\Factory;

use App\Entity\CharacterClass;
use App\Repository\CharacterClassRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<CharacterClass>
 *
 * @method static CharacterClass|Proxy createOne(array $attributes = [])
 * @method static CharacterClass[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static CharacterClass[]|Proxy[] createSequence(array|callable $sequence)
 * @method static CharacterClass|Proxy find(object|array|mixed $criteria)
 * @method static CharacterClass|Proxy findOrCreate(array $attributes)
 * @method static CharacterClass|Proxy first(string $sortedField = 'id')
 * @method static CharacterClass|Proxy last(string $sortedField = 'id')
 * @method static CharacterClass|Proxy random(array $attributes = [])
 * @method static CharacterClass|Proxy randomOrCreate(array $attributes = [])
 * @method static CharacterClass[]|Proxy[] all()
 * @method static CharacterClass[]|Proxy[] findBy(array $attributes)
 * @method static CharacterClass[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static CharacterClass[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static CharacterClassRepository|RepositoryProxy repository()
 * @method CharacterClass|Proxy create(array|callable $attributes = [])
 */
final class CharacterClassFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            'class_name' => self::faker()->monthName(),
            'subclass' => self::faker()->boolean(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(CharacterClass $characterClass): void {})
        ;
    }

    protected static function getClass(): string
    {
        return CharacterClass::class;
    }
}
