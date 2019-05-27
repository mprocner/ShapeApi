<?php
declare(strict_types=1);
/**
 * File: ShapeController.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Http\Controllers;

use App\Context\ShapeContext\Contracts\ShapeRepositoryInterface;
use App\Context\ShapeContext\Entities\Shape;
use App\Context\ShapeContext\UseCase\CreateShape\CreateShapeRequest;
use App\Context\ShapeContext\UseCase\CreateShape\CreateShapeUseCase;
use App\Context\ShapeContext\UseCase\DeleteShape\DeleteShapeRequest;
use App\Context\ShapeContext\UseCase\DeleteShape\DeleteShapeUseCase;
use App\Context\ShapeContext\UseCase\ShowShape\ShowShapeRequest;
use App\Context\ShapeContext\UseCase\ShowShape\ShowShapeUseCase;
use App\Context\ShapeContext\UseCase\UpdateShape\UpdateShapeRequest;
use App\Context\ShapeContext\UseCase\UpdateShape\UpdateShapeUseCase;
use App\Http\Requests\ShapeFormRequest;
use App\Http\Requests\UpdateShapeFormRequest;
use Illuminate\Http\JsonResponse;

/**
 * Class ShapeController
 * @package App\Http\Controllers
 */
class ShapeController extends Controller
{

    /**
     * @var ShapeRepositoryInterface
     */
    private $shapeRepository;

    /**
     * ShapeController constructor.
     * @param ShapeRepositoryInterface $shapeRepository
     */
    public function __construct(
        ShapeRepositoryInterface $shapeRepository
    ) {
        $this->shapeRepository = $shapeRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $shapes = $this->shapeRepository->all();
        return JsonResponse::create($shapes, 200);
    }

    /**
     * @param ShapeFormRequest $formRequest
     * @param CreateShapeUseCase $useCase
     * @return JsonResponse
     */
    public function store(ShapeFormRequest $formRequest, CreateShapeUseCase $useCase): JsonResponse
    {
        $request = new CreateShapeRequest(
            $formRequest->input('type'),
            $formRequest->input('data')
        );

        $response = $useCase->execute($request);

        return JsonResponse::create(['message' => $response->getMessage()], 201);
    }

    /**
     * @param UpdateShapeFormRequest $formRequest
     * @param UpdateShapeUseCase $useCase
     * @param Shape $shape
     * @return JsonResponse
     */
    public function update(UpdateShapeFormRequest $formRequest, UpdateShapeUseCase $useCase, Shape $shape): JsonResponse
    {
        $request = new UpdateShapeRequest(
            $formRequest->input('type'),
            $formRequest->input('data'),
            $shape
        );
        $response = $useCase->execute($request);
        return JsonResponse::create(['message' => $response->getMessage()], 200);
    }

    /**
     * @param ShowShapeUseCase $useCase
     * @param Shape $shape
     * @return JsonResponse
     */
    public function show(ShowShapeUseCase $useCase, Shape $shape)
    {
        $request = new ShowShapeRequest(
            $shape
        );
        $response = $useCase->execute($request);

        return JsonResponse::create(['message' => $response->getMessage(), 'data' => $response->getData()], 200);
    }

    /**
     * @param DeleteShapeUseCase $useCase
     * @param Shape $shape
     * @return JsonResponse
     */
    public function destroy(DeleteShapeUseCase $useCase, Shape $shape): JsonResponse
    {
        $request = new DeleteShapeRequest(
            $shape
        );
        $response = $useCase->execute($request);

        return JsonResponse::create(['message' => $response->getMessage()], 200);
    }
}
