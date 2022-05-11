<?php
declare(strict_types=1);

namespace Calculator\Domain\Calculator\Ingredient\Repository;

use Calculator\Domain\Calculator\Ingredient\Entity\Ingredient;

interface IngredientRepository
{
    public function add(Ingredient $ingredient): string;

    /**
     * IDと一致するIngredientを取得する。見つからなかったらnullを返す
     */
    public function getIngredientById(string $id): ?Ingredient;
}
