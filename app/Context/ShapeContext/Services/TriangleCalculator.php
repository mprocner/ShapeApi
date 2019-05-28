<?php
declare(strict_types=1);
/**
 * File: TriangleCalculator.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\Services;

use App\Context\ShapeContext\Contracts\Calculators\TriangleCalculatorInterface;
use App\Context\ShapeContext\Contracts\ShapeCalculatorInterface;
use App\Context\ShapeContext\Contracts\ShapeInterface;

class TriangleCalculator implements ShapeCalculatorInterface, TriangleCalculatorInterface
{

    public function calculateArea(ShapeInterface $shape)
    {
        // TODO: Implement calculateArea() method.
    }
}