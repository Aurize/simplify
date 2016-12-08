<?php

namespace App\Http\Controllers\Api;

use App\Review;
use App\Transformers\ReviewTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;

class ReviewController extends ApiController
{
    /**
     * @var ReviewTransformer
     */
    protected $transformer;

    /**
     * ReviewController constructor.
     * @param $transformer
     */
    public function __construct(ReviewTransformer $transformer)
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
        $reviews = Review::all();

        return $this->respond([
            'data' => $this->transformer->transformCollection($reviews)
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
        Review::create($request->all());

        return $this->respondOK();
    }

    /**
     * Display the specified resource.
     *
     * @param Review $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return $this->respond([
            'data' => $this->transformer->transform($review)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Review $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $review->update($request->all());

        return $this->respondOK();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Review $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return $this->respondOK();
    }
}
