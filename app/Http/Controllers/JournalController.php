<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;

class JournalController extends Controller
{
    public function index()
    {
        $journals = Journal::latest()->get();
        return view('journal.index')->with('journals', $journals);
    }

    public function create()
    {
        return view('journal.create');
    }

    public function store(Request $request)
    {
        $requestFileName = 'cover';

        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile($requestFileName))
        {
            $fileProperties = $this->prepareFile($request, $requestFileName);
            $path = $request->file($requestFileName)->storeAs('public/institutional/journal_covers', $fileProperties['filename']);
            $requestFileName = $fileProperties['filename'];
        }

        $journal = new Journal;
        $journal->title = $request->input('title');
        $journal->subtitle = $request->input('subtitle');
        $journal->body = $request->input('body');
        $journal->cover = $requestFileName;

        $journal->save();

        return redirect()->route('journal');
    }

    private function prepareFile(Request $request, $requestFileName)
    {
        $filenameWithExt = $request->file($requestFileName)->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file($requestFileName)->getClientOriginalExtension();
        $filenameToStore = $filename.'_'.time().'.'.$extension;

        return $fileProperties = array(
            'filename' => $filenameToStore
        );
    }
}
