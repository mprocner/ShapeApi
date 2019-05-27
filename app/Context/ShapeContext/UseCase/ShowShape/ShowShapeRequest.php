<?php
declare(strict_types=1);
/**
 * File: ShowShapeRequest.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\UseCase\ShowShape;

use App\Context\ShapeContext\Contracts\RequestInterface;
use App\Context\ShapeContext\Entities\Shape;

class ShowShapeRequest implements RequestInterface
{
    /**
     * @var Shape
     */
    private $shape;

    /**
     * DeleteShapeRequest constructor.
     * @param Shape $shape
     */
    public function __construct(Shape $shape)
    {
        $this->shape = $shape;
    }

    /**
     * @return Shape
     */
    public function getShape(): Shape
    {
        return $this->shape;
    }
}
