<?php
declare(strict_types=1);
/**
 * File: ShapeRepositoryInterface.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */
namespace App\Context\ShapeContext\Contracts;

use App\Context\ShapeContext\Entities\Shape;
use Illuminate\Database\Eloquent\Collection;

/**
 * Interface ShapeRepositoryInterface
 * @package App\Context\ShapeContext\Contracts
 */
interface ShapeRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

    /**
     * @param ShapeInterface $figure
     * @return ShapeInterface
     */
    public function createShape(ShapeInterface $figure): ShapeInterface;

    /**
     * @param ShapeInterface $figure
     * @return ShapeInterface
     */
    public function updateShape(ShapeInterface $figure): ShapeInterface;

    /**
     * @param Shape $shape
     * @return mixed
     */
    public function deleteShape(Shape $shape);
}
