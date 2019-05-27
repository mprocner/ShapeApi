<?php
declare(strict_types=1);
/**
 * File: UpdateShapeUseCase.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\UseCase\UpdateShape;

use App\Context\ShapeContext\Contracts\AbstractResponse;
use App\Context\ShapeContext\Contracts\RequestInterface;
use App\Context\ShapeContext\Contracts\ShapeRepositoryInterface;
use App\Context\ShapeContext\Contracts\UseCaseInterface;
use App\Context\ShapeContext\Entities\Shape;
use Exception;

/**
 * Class UpdateShapeUseCase
 * @package App\Context\ShapeContext\UseCase\UpdateShape
 */
class UpdateShapeUseCase implements UseCaseInterface
{
    /**
     * @var ShapeRepositoryInterface
     */
    private $shapeRepository;

    /**
     * UpdateShapeUseCase constructor.
     * @param ShapeRepositoryInterface $shapeRepository
     */
    public function __construct(ShapeRepositoryInterface $shapeRepository)
    {
        $this->shapeRepository = $shapeRepository;
    }

    /**
     * @param RequestInterface $request
     * @return AbstractResponse
     */
    public function execute(RequestInterface $request): AbstractResponse
    {
        /** @var Shape $shape */
        $shape = $request->getShape();
        $figure = $shape->figure;
        $figure->assignData($request->getData());
        try {
            $this->shapeRepository->updateShape($figure);
            return new UpdateShapeResponse('Shape updated succesfully');
        } catch (Exception $e) {
            return new UpdateShapeResponse('Shape was not updated');
        }
    }
}
