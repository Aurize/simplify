<?php

namespace App\Http\Controllers\Api;

use App\Visit;
use App\Transformers\VisitTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;

class VisitController extends ApiController
{
    /**
     * @var VisitTransformer
     */
    protected $transformer;

    /**
     * VisitController constructor.
     * @param $transformer
     */
    public function __construct(VisitTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visits = Visit::all();

        return $this->respond([
            'data' => $this->transformer->transformCollection($visits)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Visit::create($request->all());

        return $this->respondOK();
    }

    /**
     * Display the specified resource.
     *
     * @param Visit $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        return $this->respond([
            'data' => $this->transformer->transform($visit)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Visit $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        $visit->update($request->all());

        return $this->respondOK();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Visit $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        $visit->delete();

        return $this->respondOK();
    }
}
