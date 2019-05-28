<?php
declare(strict_types=1);
/**
 * File: Triangle.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */
namespace App\Context\ShapeContext\Entities;

use App\Context\ShapeContext\Contracts\ShapeInterface;
use App\Context\ShapeContext\Validators\ShapeDataValidator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Triangle extends Model implements ShapeInterface
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
        $this->setAttribute('c', $data[2]);
        return $this;
    }

    /**
     * @return int
     */
    public function getDataCount(): int
    {
        return 3;
    }
}
