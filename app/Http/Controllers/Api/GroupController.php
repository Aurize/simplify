<?php

namespace App\Http\Controllers\Api;

use App\Group;
use App\Transformers\GroupTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;

class GroupController extends ApiController
{
    /**
     * @var GroupTransformer
     */
    protected $transformer;

    /**
     * GroupController constructor.
     * @param $transformer
     */
    public function __construct(GroupTransformer $transformer)
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
        $groups = Group::all();

        return $this->respond([
            'data' => $this->transformer->transformCollection($groups)
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
        Group::create($request->all());

        return $this->respondOK();
    }

    /**
     * Display the specified resource.
     *
     * @param Group $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return $this->respond([
            'data' => $this->transformer->transform($group)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Group $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $group->update($request->all());

        return $this->respondOK();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Group $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return $this->respondOK();
    }
}
