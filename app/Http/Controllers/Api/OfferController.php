<?php

namespace App\Http\Controllers\Api;

use App\Offer;
use App\Transformers\OfferTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class OfferController extends ApiController
{
    /**
     * @var OfferTransformer
     */
    protected $transformer;

    /**
     * OfferController constructor.
     * @param $transformer
     */
    public function __construct(OfferTransformer $transformer)
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
        $limit = Input::get('limit') ? : 10;
        $offers = Offer::paginate($limit);

        return $this->respondWithPagination($offers, [
            'data' => $this->transformer->transformCollection($offers),
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
        Offer::create($request->all());

        return $this->respondOK();
    }

    /**
     * Display the specified resource.
     *
     * @param Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return $this->respond([
            'data' => $this->transformer->transform($offer)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $offer->update($request->all());

        return $this->respondOK();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();

        return $this->respondOK();
    }
}
