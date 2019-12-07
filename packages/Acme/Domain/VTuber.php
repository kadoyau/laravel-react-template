<?php
declare(strict_types=1);

namespace Acme\Domain;

class VTuber
{

    private const TWITTER_MINIMUM_AGE = 13;
    /**
     * @var string
     */
    private $name;
    /**
     * @var bool
     */
    private $isBanned;
    /**
     * @var int
     */
    private $age;

    public function __construct(string $name, int $age, bool $isBanned)
    {
        $this->name = $name;
        $this->age = $age;
        if ($age < self::TWITTER_MINIMUM_AGE && !$isBanned) {
            throw new \LogicException('Twitterがなんかおかしい');
        }
    }

    public function thisFunctionShouldBeWatchedByDog(): string
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isBanned(): bool
    {
        return $this->isBanned;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }


}
