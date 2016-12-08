<?php

namespace App\Http\Controllers\Api;

use App\Place;
use App\Transformers\PlaceTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;

class PlaceController extends ApiController
{
    /**
     * @var PlaceTransformer
     */
    protected $transformer;

    /**
     * PlaceController constructor.
     * @param $transformer
     */
    public function __construct(PlaceTransformer $transformer)
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
        $places = Place::all();

        return $this->respond([
            'data' => $this->transformer->transformCollection($places)
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
        Place::create($request->all());

        return $this->respondOK();
    }

    /**
     * Display the specified resource.
     *
     * @param Place $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return $this->respond([
            'data' => $this->transformer->transform($place)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Place $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $place->update($request->all());

        return $this->respondOK();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Place $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        $place->delete();

        return $this->respondOK();
    }
}
