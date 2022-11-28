<?php

namespace App\Factory;

use App\Entity\Character;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\CharacterRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Character>
 *
 * @method static Character|Proxy createOne(array $attributes = [])
 * @method static Character[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Character[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Character|Proxy find(object|array|mixed $criteria)
 * @method static Character|Proxy findOrCreate(array $attributes)
 * @method static Character|Proxy first(string $sortedField = 'id')
 * @method static Character|Proxy last(string $sortedField = 'id')
 * @method static Character|Proxy random(array $attributes = [])
 * @method static Character|Proxy randomOrCreate(array $attributes = [])
 * @method static Character[]|Proxy[] all()
 * @method static Character[]|Proxy[] findBy(array $attributes)
 * @method static Character[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Character[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static CharacterRepository|RepositoryProxy repository()
 * @method Character|Proxy create(array|callable $attributes = [])
 */
final class CharacterFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            'level' => self::faker()->randomBetween(1,20),
            'active' => false,
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Character $character): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Character::class;
    }
}
