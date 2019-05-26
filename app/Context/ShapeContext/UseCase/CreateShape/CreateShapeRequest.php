<?php
declare(strict_types=1);
/**
 * File: CreateShapeRequest.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\UseCase\CreateShape;

/**
 * Class CreateShapeRequest
 * @package App\Context\ShapeContext\UseCase\CreateShape
 */
class CreateShapeRequest
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var array
     */
    private $data;

    /**
     * CreateShapeRequest constructor.
     * @param string $type
     * @param array $data
     */
    public function __construct(
        string $type,
        array $data
    ) {

        $this->type = $type;
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
