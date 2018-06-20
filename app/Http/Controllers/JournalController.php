<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;

class JournalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $journals = Journal::latest()->get();
        return view('journal.index')->with('journals', $journals);
    }

    public function show($id)
    {
        $journal = Journal::find($id);
        return view('news')->with('journal', $journal);
    }

    public function showNews()
    {
        $journals = Journal::latest()->simplePaginate(10);
        return view('news-display-all')->with('journals', $journals);;
    }

    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);
        return view('journal.create');
    }

    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);
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

    public function delete($id)
    {
        $journal = Journal::find($id);
        $journal->delete();

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
