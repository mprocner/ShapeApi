<?php
declare(strict_types=1);
/**
 * File: ShapeCalculatorInterface.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\Contracts;

/**
 * Interface ShapeCalculatorInterface
 * @package App\Context\ShapeContext\Contracts
 */
interface ShapeCalculatorInterface
{
    public function calculateArea(ShapeInterface $shape);
}
