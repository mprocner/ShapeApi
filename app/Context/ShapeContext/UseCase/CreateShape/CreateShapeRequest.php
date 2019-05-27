<?php
declare(strict_types=1);
/**
 * File: CreateShapeRequest.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\UseCase\CreateShape;

use App\Context\ShapeContext\Contracts\RequestInterface;

/**
 * Class CreateShapeRequest
 * @package App\Context\ShapeContext\UseCase\CreateShape
 */
class CreateShapeRequest implements RequestInterface
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
