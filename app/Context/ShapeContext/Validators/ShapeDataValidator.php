<?php
declare(strict_types=1);
/**
 * File: ShapeDataValidator.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */
namespace App\Context\ShapeContext\Validators;

use App\Context\ShapeContext\Exceptions\InvalidShapeDataException;

trait ShapeDataValidator
{
    /**
     * @return int
     */
    public function getDataCount()
    {
        return -1;
    }

    /**
     * @param array $data
     * @return bool
     * @throws InvalidShapeDataException
     */
    public function validateData(array $data): bool
    {
        if (count($data) == $this->getDataCount()) {
            return true;
        }
        throw new InvalidShapeDataException('Data are invalid');
    }
}
