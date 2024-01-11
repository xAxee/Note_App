<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class NotesController extends Controller
{
    public function Index(){
        $count = Note::count(); 
        return View("Welcome", ['count' => $count]);
    }

    public function List(){
        return View("notes.list", [
            'notes' => Note::orderBy('updated_at', 'desc')->paginate(10)
        ]);
    }
    public function AuthorList(string $author){
        return View("notes.list", [
            'notes' => Note::orderBy('updated_at', 'desc')->where('Author', "=", $author)->paginate(10)
        ], ['author' => $author]);
    }

    public function Create(){
        return View("notes.create");
    }
    public function Delete(int $id){
        $Note = Note::find($id);
        if($Note == null) return;
        return View("notes.delete", ['Note' => $Note]);
    }
    public function Details(int $id){
        $Note = Note::find($id);
        return View("notes.details", ['Note' => $Note]);
    }

    public function Edit(int $id){
        $Note = Note::find($id);
        return View("notes.edit", ['Note' => $Note]);
    }

    public function Store(Request $request){
        $request->validate([
            'Author' => ['required', 'max:30'],
            'Title' => ['required', 'max:30'],
            'Content' => ['required', 'max:1000'],
        ]);
        $Note = new Note();
        $Note->Author = $request->Author;
        $Note->Title = $request->Title;
        $Note->Content = $request->Content;
        $Note->save();

        return redirect()->route('notes');
    }
    public function Remove(int $id){
        Note::find($id)->delete();

        return redirect()->route('notes');
    }
    public function Update(int $id, Request $request){
        $request->validate([
            'Author' => ['required', 'max:30'],
            'Title' => ['required', 'max:30'],
            'Content' => ['required', 'max:1000'],
        ]);
        $Note = Note::find($id);
        $Note->Author = $request->Author;
        $Note->Title = $request->Title;
        $Note->Content = $request->Content;
        $Note->save();

        return redirect()->route('notes');
    }
}
