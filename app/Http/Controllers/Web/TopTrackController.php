<?php

namespace App\Http\Controllers\Web;

use App\Helpers\FavouriteHelper;
use App\Helpers\QueueHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Pimcore\Model\DataObject\Song;

class TopTrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songList = new Song\Listing();
        $songList->load();
        $songs = [];
        if (!empty($songList->getObjects())) {
            foreach ($songList->getObjects() as $song) {
                $tmp[] = [
                    'id' => $song->getId(),
                    'image' => $song->getImg() ? $song->getImg()->getThumbnail() : 'http://via.placeholder.com/100',
                    'title' => $song->getName(),
                    'artist' => $song->getArtist()->getName(),
                    'mp3' => $song->getFile() ? $song->getFile() : 'http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3',
                    'option' => ''
                ];
            }
            $songs = $tmp;
        }

//        $addQueue = QueueHelper::checkAndAdd(74);
//        dd($addQueue);

//        $addFavourite = FavouriteHelper::checkAndAdd(74);
//        dd($addFavourite);

        return view('web.toptrack', ['songs' => $songs]);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
