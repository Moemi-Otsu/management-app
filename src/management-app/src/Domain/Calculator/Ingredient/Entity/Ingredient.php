<?php
declare(strict_types=1);

namespace Calculator\Domain\Calculator\Ingredient\Entity;

use PHPMentors\DomainKata\Entity\EntityInterface;

final class Ingredient implements EntityInterface
{
    public function __construct(
        private string $id,
        private string $name,
        private int $calorie,
        private int $protein,
        private int $fat,
        private int $carbohydrates
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getCalorie(): int
    {
        return $this->calorie;
    }

    /**
     * @return int
     */
    public function getProtein(): int
    {
        return $this->protein;
    }

    /**
     * @return int
     */
    public function getFat(): int
    {
        return $this->fat;
    }

    /**
     * @return int
     */
    public function getCarbohydrates(): int
    {
        return $this->carbohydrates;
    }

}
