<?php
declare(strict_types=1);
/**
 * File: UseCaseInterface.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\Contracts;

interface UseCaseInterface
{
    /**
     * @param RequestInterface $request
     * @return AbstractResponse
     */
    public function execute(RequestInterface $request): AbstractResponse;
}
