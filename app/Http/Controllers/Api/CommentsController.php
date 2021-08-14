<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\AbstractApiController;
use Illuminate\Http\Request;
use App\Repositories\CommentRepository;
use App\Http\Requests\Api\CommentRequest;

class CommentsController extends AbstractApiController
{
    private $reviewRepository;

    public function __construct() {
        $this->reviewRepository = new CommentRepository();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $comments = $this->reviewRepository->all()->toArray();
        $commentsGroup = [];
        if(!empty($comments)) {
            foreach($comments as $comment) {
                $commentsGroup[$comment['parent_id']][] = $comment;
            }
        }
        $this->json['comments'] = $commentsGroup;
        $this->json['status'] = true;
        $this->json['deep'] = config('comment.deep');

        return $this->displayData();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CommentRequest $request)
    {
        return $this->addElement(
            $request->all(),
            $this->reviewRepository,
            __('comment.add_success') , 
            __('comment.add_error')
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
