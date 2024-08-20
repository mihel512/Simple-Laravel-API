<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionRequest;
use App\Jobs\ProcessSubmissionJob;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class SubmissionController extends Controller
{

    public function store(SubmissionRequest $request): JsonResponse
    {
        ProcessSubmissionJob::dispatch($request->validated());

        return response()->json([], Response::HTTP_OK);
    }
}
