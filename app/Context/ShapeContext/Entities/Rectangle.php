<?php
declare(strict_types=1);
/**
 * File: Rectangle.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */
namespace App\Context\ShapeContext\Entities;

use App\Context\ShapeContext\Contracts\ShapeCalculatorInterface;
use App\Context\ShapeContext\Contracts\ShapeInterface;
use App\Context\ShapeContext\Validators\ShapeDataValidator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * Class Rectangle
 * @package App\Context\ShapeContext\Entities
 */
class Rectangle extends Model implements ShapeInterface
{
    use ShapeDataValidator;

    /**
     * @return MorphOne
     */
    public function shape(): MorphOne
    {
        return $this->morphOne(Shape::class, 'figure');
    }

    /**
     * @param array $data
     * @return ShapeInterface
     */
    public function assignData(array $data): ShapeInterface
    {
        $this->setAttribute('a', $data[0]);
        $this->setAttribute('b', $data[1]);
        return $this;
    }

    /**
     * @return int
     */
    public function getDataCount(): int
    {
        return 2;
    }

    /**
     * @return ShapeCalculatorInterface
     */
    public function getCalculator(): ShapeCalculatorInterface
    {
        // TODO: Implement getCalculator() method.
    }
}
