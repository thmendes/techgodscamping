<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Album;
use App\Models\Photo;
use File;

class PhotosController extends Controller
{
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
        $myFile = 'institutional/Galeria/'.$albumId.'/'.$photo->name;
        
        Storage::disk('public')->delete($myFile);

        $photo->delete();

        $album = Album::with('Photos')->find($albumId);

        return redirect()->back()->with('album', [$album]);
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
