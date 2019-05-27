<?php
declare(strict_types=1);
/**
 * File: DeleteShapeUseCase.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\UseCase\DeleteShape;

use App\Context\ShapeContext\Contracts\AbstractResponse;
use App\Context\ShapeContext\Contracts\RequestInterface;
use App\Context\ShapeContext\Contracts\ShapeRepositoryInterface;
use App\Context\ShapeContext\Contracts\UseCaseInterface;
use Exception;

class DeleteShapeUseCase implements UseCaseInterface
{
    /**
     * @var ShapeRepositoryInterface
     */
    private $shapeRepository;

    /**
     * DeleteShapeUseCase constructor.
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
        try {
            $this->shapeRepository->deleteShape($request->getShape());
            return new DeleteShapeResponse('Shape deleted successfully');
        } catch (Exception $e) {
            return new DeleteShapeResponse('Shape was not deleted');
        }
    }
}