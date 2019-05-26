<?php
declare(strict_types=1);
/**
 * File: ShapeFactory.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\Factories;

use App\Context\ShapeContext\Contracts\ShapeInterface;

/**
 * Class ShapeFactory
 * @package App\Context\ShapeContext\Factories
 */
class ShapeFactory
{

    /**
     * @param string $type
     * @return ShapeInterface
     */
    public static function create(string $type): ShapeInterface
    {
        switch ($type) {
            case 'triangle':
        }
    }
}