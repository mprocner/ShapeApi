<?php
declare(strict_types=1);
/**
 * File: ShapeInterface.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */
namespace App\Context\ShapeContext\Contracts;

/**
 * Interface ShapeInterface
 * @package App\Context\ShapeContext\Contracts
 */
interface ShapeInterface
{
    /**
     * @param array $data
     * @return ShapeInterface
     */
    public function assignData(array $data): ShapeInterface;

    /**
     * @param array $data
     * @return bool
     */
    public function validateData(array $data): bool;

    /**
     * @param array $options
     * @return bool
     */
    public function save(array $options = []);

    /**
     * @return int
     */
    public function getDataCount(): int;
}
