<?php
declare(strict_types=1);
/**
 * File: ShapeRepository.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */
namespace App\Context\ShapeContext\Repositories;

use App\Context\ShapeContext\Contracts\ShapeInterface;
use App\Context\ShapeContext\Contracts\ShapeRepositoryInterface;
use App\Context\ShapeContext\Entities\Shape;
use Illuminate\Database\Eloquent\Collection;
use Exception;

/**
 * Class ShapeRepository
 * @package App\Context\ShapeContext\Repositories
 */
class ShapeRepository implements ShapeRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return Shape::with('figure')->get();
    }

    /**
     * @param ShapeInterface $figure
     * @return ShapeInterface
     */
    public function createShape(ShapeInterface $figure): ShapeInterface
    {
        $figure->save();
        $shape = new Shape();
        $shape->figure()->associate($figure);
        $shape->save();

        return $figure;
    }

    /**
     * @param ShapeInterface $figure
     * @return ShapeInterface
     */
    public function updateShape(ShapeInterface $figure): ShapeInterface
    {
        $figure->save();
        return $figure;
    }

    /**
     * @param Shape $shape
     * @return mixed
     * @throws Exception
     */
    public function deleteShape(Shape $shape)
    {
        $figure = $shape->figure;
        $figure->delete();
        $shape->delete();
    }
}
