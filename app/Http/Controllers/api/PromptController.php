<?php

namespace App\Http\Controllers\Api;

use App\Models\Prompt;
use App\Http\Requests\PromptRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PromptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Prompt::all();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(PromptRequest $request)
    {
        $validated = $request->validated();

        $prompt = Prompt::create([
            'prompt'    =>$request ->prompt,
            'sender'    =>$request ->sender,
            'user_id'   =>$request ->user_id,
        ]);

        return $prompt;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Prompt::findorfail($id);
    }

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prompt = Prompt::findorfail($id);
        $prompt->delete();

        return $prompt;
    }
}
