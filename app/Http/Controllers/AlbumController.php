<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Album;
use App\Models\Photo;
use File;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::with('Photos')->get();
        return view('gallery.index')->with('albums', $albums);
    }

    public function show($id)
    {   
        $album = Album::with('Photos')->find($id);
        return view('gallery.show')->with('album', $album);
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $requestFileName = 'cover';
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover' => 'image|max:1999'
        ]);

        $fileProperties = $this->prepareFile($request, $requestFileName);

        $path = $request->file($requestFileName)->storeAs('public/institutional/album_covers', $fileProperties['filename']);

        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover = $fileProperties['filename'];

        $album->save();

        return redirect()->route('gallery');
    }

    public function delete($id)
    {
        $photos = Photo::where([['album_id', $id]])->get();

        foreach ($photos as $photo) 
        {
            $myFile = 'institutional/Galeria/'.$id.'/'.$photo->name;
            Storage::disk('public')->delete($myFile);
            $photo = Photo::where([['id', $photo->id],['album_id', $id]])->first();
            $photo->delete();
        }
        
        $album = Album::find($id);
        $album->delete();

        return redirect()->route('gallery');
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
