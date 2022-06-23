<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Note::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $note = new Note();
        $note->Author = $data["Author"];
        $note->Title = $data["Title"];
        $note->Content = $data["Content"];

        $note->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $note = Note::find($id);
        return $note;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $data = $request->all();
        $note = Note::find($id);
        $note->Author = $data["Author"];
        $note->Title = $data["Title"];
        $note->Content = $data["Content"];
        $note->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Note::find($id)->delete();
    }
}
