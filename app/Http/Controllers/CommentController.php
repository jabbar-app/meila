<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'attendance' => 'required|string',
            'comment' => 'required|string',
        ]);

        $comment = Comment::create([
            'name' => $request->name ?? 'anonymous',
            'attendance' => $request->attendance,
            'comment' => $request->comment,
        ]);

        return response()->json([
            'name' => $comment->name,
            'attendance' => $comment->attendance,
            'comment' => $comment->comment,
            'created_at' => $comment->created_at->format('d M Y H:i')
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
