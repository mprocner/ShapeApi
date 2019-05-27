<?php
declare(strict_types=1);
/**
 * File: AbstractResponse.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\Contracts;

abstract class AbstractResponse
{
    /**
     * @var string
     */
    private $message;
    /**
     * @var array
     */
    private $data;

    /**
     * ShowShapeResponse constructor.
     * @param string $message
     * @param array $data
     */
    public function __construct(string $message = '', array $data = [])
    {
        $this->message = $message;
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}
