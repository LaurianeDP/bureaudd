<?php

namespace App\Factory;

use App\Entity\Skill;
use App\Repository\SkillRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Skill>
 *
 * @method static Skill|Proxy createOne(array $attributes = [])
 * @method static Skill[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Skill[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Skill|Proxy find(object|array|mixed $criteria)
 * @method static Skill|Proxy findOrCreate(array $attributes)
 * @method static Skill|Proxy first(string $sortedField = 'id')
 * @method static Skill|Proxy last(string $sortedField = 'id')
 * @method static Skill|Proxy random(array $attributes = [])
 * @method static Skill|Proxy randomOrCreate(array $attributes = [])
 * @method static Skill[]|Proxy[] all()
 * @method static Skill[]|Proxy[] findBy(array $attributes)
 * @method static Skill[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Skill[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static SkillRepository|RepositoryProxy repository()
 * @method Skill|Proxy create(array|callable $attributes = [])
 */
final class SkillFactory extends ModelFactory
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
            'skill_name' => self::faker()->text(),
            'skill_level' => self::faker()->randomNumber(),
            'skill_description_short' => self::faker()->text(),
            'skill_description_long' => self::faker()->text(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Skill $skill): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Skill::class;
    }
}
