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

        $fileProperties = $this->prepareFile($request, $fileName);

        $path = $request->file($requestFileName)->storeAs('institutional/album_covers', $fileProperties['filename']);

        $path = $fileProperties['path'];

        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover = $fileProperties['filename'];

        $album->save();

        return redirect()->route('gallery');
    }

    public function show($id)
    {   
        $album = Album::with('Photos')->find($id);
        return view('gallery.show')->with('album', $album);
    }

    public function upload($id, Request $request)
    {
        $requestFileName = 'file';
        if($request->hasFile('file'))
        {
            $fileProperties = $this->prepareFile($request, $requestFileName);
            
            $path = $request->file($requestFileName)->storeAs('public/institutional/Galeria/'.$id, $fileProperties['filename']);

            $photo = new Photo;
            $photo->album_id = $id;
            $photo->name = $fileProperties['filename'];

            $photo->save();

            return response()->json(['Status' => true, 'Album' => $id]);
        }
    }

    public function delete($albumId, $photoId, Request $request)
    {
        $photo = Photo::where([['id', $photoId],['album_id', $albumId]])->first();
        $myFile = 'institutional\\Galeria\\'.$albumId.'\\'.$photo->name;
        dd(Storage::disk('public'));
        File::delete('C:\xampp\htdocs\techgodscamping\storage\app\public\institutional\Galeria\2\tiger_1527815953.png');
        dd('n deu');
        return response()->json(['Status' => true, 'Album' => 'aa']);
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
