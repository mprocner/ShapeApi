<?php
declare(strict_types=1);
/**
 * File: RectangleCalculator.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\Services;

use App\Context\ShapeContext\Contracts\Calculators\RectangleCalculatorInterface;
use App\Context\ShapeContext\Contracts\ShapeCalculatorInterface;
use App\Context\ShapeContext\Contracts\ShapeInterface;

class RectangleCalculator implements ShapeCalculatorInterface, RectangleCalculatorInterface
{

    public function calculateArea(ShapeInterface $shape)
    {
        // TODO: Implement calculateArea() method.
    }
}