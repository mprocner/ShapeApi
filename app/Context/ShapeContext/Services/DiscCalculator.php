<?php
declare(strict_types=1);
/**
 * File: ShapeCalculator.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\Services;

use App\Context\ShapeContext\Contracts\Calculators\DiscCalculatorInterface;
use App\Context\ShapeContext\Contracts\ShapeCalculatorInterface;
use App\Context\ShapeContext\Contracts\ShapeInterface;

/**
 * Class ShapeCalculator
 * @package App\Context\ShapeContext\Services
 */
class DiscCalculator implements ShapeCalculatorInterface, DiscCalculatorInterface
{

    public function calculateArea(ShapeInterface $shape)
    {
        // TODO: Implement calculateArea() method.
    }
}