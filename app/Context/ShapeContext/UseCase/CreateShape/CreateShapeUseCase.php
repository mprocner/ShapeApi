<?php
declare(strict_types=1);
/**
 * File: CreateShapeUseCase.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */
namespace App\Context\ShapeContext\UseCase\CreateShape;

use App\Context\ShapeContext\Contracts\AbstractResponse;
use App\Context\ShapeContext\Contracts\RequestInterface;
use App\Context\ShapeContext\Contracts\ShapeRepositoryInterface;
use App\Context\ShapeContext\Contracts\UseCaseInterface;
use App\Context\ShapeContext\Events\ShapeCreated;
use App\Context\ShapeContext\Exceptions\InvalidShapeDataException;
use App\Context\ShapeContext\Exceptions\InvalidShapeTypeException;
use App\Context\ShapeContext\Factories\ShapeFactory;

/**
 * Class CreateShapeUseCase
 * @package App\Context\ShapeContext\UseCase\CreateShape
 */
class CreateShapeUseCase implements UseCaseInterface
{
    /**
     * @var ShapeRepositoryInterface
     */
    private $shapeRepository;

    /**
     * CreateShapeUseCase constructor.
     * @param ShapeRepositoryInterface $shapeRepository
     */
    public function __construct(
        ShapeRepositoryInterface $shapeRepository
    ) {
        $this->shapeRepository = $shapeRepository;
    }

    /**
     * @param RequestInterface $request
     * @return AbstractResponse
     */
    public function execute(RequestInterface $request): AbstractResponse
    {
        try {
            $figure = ShapeFactory::create($request->getType());
            if ($figure->validateData($request->getData())) {
                $figure->assignData($request->getData());
                $this->shapeRepository->createShape($figure);
                event(new ShapeCreated($figure));
                return new CreateShapeResponse('Shape created successfully');
            }
        } catch (InvalidShapeTypeException $e) {
            return new CreateShapeResponse('Invalid shape type');
        } catch (InvalidShapeDataException $e) {
            return new CreateShapeResponse('Invalid Shape data');
        }
    }
}
