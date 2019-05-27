<?php
declare(strict_types=1);
/**
 * File: UpdateShapeRequest.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\UseCase\UpdateShape;

use App\Context\ShapeContext\Contracts\RequestInterface;
use App\Context\ShapeContext\Entities\Shape;

/**
 * Class UpdateShapeRequest
 * @package App\Context\ShapeContext\UseCase\UpdateShape
 */
class UpdateShapeRequest implements RequestInterface
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
     * @var Shape
     */
    private $shape;

    /**
     * CreateShapeRequest constructor.
     * @param string $type
     * @param array $data
     * @param Shape $shape
     */
    public function __construct(
        string $type,
        array $data,
        Shape $shape
    ) {

        $this->type = $type;
        $this->data = $data;
        $this->shape = $shape;
    }

    /**
     * @return Shape
     */
    public function getShape(): Shape
    {
        return $this->shape;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
