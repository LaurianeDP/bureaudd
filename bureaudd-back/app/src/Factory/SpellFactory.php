<?php

namespace App\Factory;

use App\Entity\Spell;
use App\Repository\SpellRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Spell>
 *
 * @method static Spell|Proxy createOne(array $attributes = [])
 * @method static Spell[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Spell[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Spell|Proxy find(object|array|mixed $criteria)
 * @method static Spell|Proxy findOrCreate(array $attributes)
 * @method static Spell|Proxy first(string $sortedField = 'id')
 * @method static Spell|Proxy last(string $sortedField = 'id')
 * @method static Spell|Proxy random(array $attributes = [])
 * @method static Spell|Proxy randomOrCreate(array $attributes = [])
 * @method static Spell[]|Proxy[] all()
 * @method static Spell[]|Proxy[] findBy(array $attributes)
 * @method static Spell[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Spell[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static SpellRepository|RepositoryProxy repository()
 * @method Spell|Proxy create(array|callable $attributes = [])
 */
final class SpellFactory extends ModelFactory
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
            'spell_name' => self::faker()->text(),
            'spell_level' => self::faker()->randomNumber(),
            'incantation_duration' => self::faker()->text(),
            'concentration' => self::faker()->boolean(),
            'spell_range' => self::faker()->text(),
            'ritual' => self::faker()->boolean(),
            'spell_description_short' => self::faker()->text(),
            'spell_description_long' => self::faker()->text(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Spell $spell): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Spell::class;
    }
}
