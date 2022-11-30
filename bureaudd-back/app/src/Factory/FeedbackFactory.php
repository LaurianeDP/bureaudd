<?php

namespace App\Factory;

use App\Entity\Feedback;
use App\Repository\FeedbackRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Feedback>
 *
 * @method static Feedback|Proxy createOne(array $attributes = [])
 * @method static Feedback[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Feedback[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Feedback|Proxy find(object|array|mixed $criteria)
 * @method static Feedback|Proxy findOrCreate(array $attributes)
 * @method static Feedback|Proxy first(string $sortedField = 'id')
 * @method static Feedback|Proxy last(string $sortedField = 'id')
 * @method static Feedback|Proxy random(array $attributes = [])
 * @method static Feedback|Proxy randomOrCreate(array $attributes = [])
 * @method static Feedback[]|Proxy[] all()
 * @method static Feedback[]|Proxy[] findBy(array $attributes)
 * @method static Feedback[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Feedback[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static FeedbackRepository|RepositoryProxy repository()
 * @method Feedback|Proxy create(array|callable $attributes = [])
 */
final class FeedbackFactory extends ModelFactory
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
            'feedback_date' => self::faker()->unixTime(),
            'feedback_type' => self::faker()->randomElement(['feedback', 'bugReport']),
            'feedback_content' => self::faker()->text(150),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Feedback $feedback): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Feedback::class;
    }
}
