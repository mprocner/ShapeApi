<?php
declare(strict_types=1);
/**
 * File: ShowShapeUseCase.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\UseCase\ShowShape;

use App\Context\ShapeContext\Contracts\AbstractResponse;
use App\Context\ShapeContext\Contracts\RequestInterface;
use App\Context\ShapeContext\Contracts\UseCaseInterface;

/**
 * Class ShowShapeUseCase
 * @package App\Context\ShapeContext\UseCase\ShowShape
 */
class ShowShapeUseCase implements UseCaseInterface
{
    /**
     * @param RequestInterface $request
     * @return AbstractResponse
     */
    public function execute(RequestInterface $request): AbstractResponse
    {
        $shape = $request->getShape();
        $shape->figure;
        $response = new ShowShapeResponse('show Shape', $shape->toArray());
        return $response;
    }
}
