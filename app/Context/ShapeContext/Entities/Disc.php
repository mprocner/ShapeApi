<?php
declare(strict_types=1);
/**
 * File: Disc.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */
namespace App\Context\ShapeContext\Entities;

use App\Context\ShapeContext\Contracts\Calculators\DiscCalculatorInterface;
use App\Context\ShapeContext\Contracts\ShapeCalculatorInterface;
use App\Context\ShapeContext\Contracts\ShapeInterface;
use App\Context\ShapeContext\Validators\ShapeDataValidator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * Class Disc
 * @package App\Context\ShapeContext\Entities
 */
class Disc extends Model implements ShapeInterface
{
    use ShapeDataValidator;

    /**
     * @var DiscCalculatorInterface
     */
    private $calculator;

    public function __construct(DiscCalculatorInterface $calculator, array $attributes = [])
    {
        parent::__construct($attributes);
        $this->calculator = $calculator;
    }

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
        $this->setAttribute('r', $data[0]);
        return $this;
    }

    /**
     * @return int
     */
    public function getDataCount(): int
    {
        return 1;
    }

    /**
     * @return ShapeCalculatorInterface
     */
    public function getCalculator(): ShapeCalculatorInterface
    {
        return $this->calculator;
    }
}
