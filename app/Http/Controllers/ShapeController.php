<?php
declare(strict_types=1);
/**
 * File: ShapeController.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Http\Controllers;

use App\Context\ShapeContext\UseCase\CreateShape\CreateShapeRequest;
use App\Context\ShapeContext\UseCase\CreateShape\CreateShapeUseCase;
use App\Http\Requests\CreateShapeFormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * Class ShapeController
 * @package App\Http\Controllers
 */
class ShapeController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return 'asdf';
    }

    public function store(CreateShapeFormRequest $formRequest, CreateShapeUseCase $useCase)
    {
        $request = new CreateShapeRequest(
            $formRequest->input('type'),
            $formRequest->input('data')
        );

        $useCase->createShape($request);

        return JsonResponse::create([], 201);
    }
}
