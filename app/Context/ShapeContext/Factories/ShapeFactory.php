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
use App\Context\ShapeContext\Entities\Disc;
use App\Context\ShapeContext\Entities\Rectangle;
use App\Context\ShapeContext\Entities\Shape;
use App\Context\ShapeContext\Entities\Triangle;
use App\Context\ShapeContext\Exceptions\InvalidShapeTypeException;

/**
 * Class ShapeFactory
 * @package App\Context\ShapeContext\Factories
 */
class ShapeFactory
{
    /**
     * @param string $type
     * @return ShapeInterface
     * @throws InvalidShapeTypeException
     */
    public static function create(string $type): ShapeInterface
    {
        switch ($type) {
            case 'triangle':
                $figure = new Triangle();
                break;
            case 'disc':
                $figure = new Disc();
                break;
            case 'rectangle':
                $figure = new Rectangle();
                break;
            default:
                throw new InvalidShapeTypeException('Shape type: '. $type . ' is invalid');
                break;
        }
        return $figure;
    }
}
