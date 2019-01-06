<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\FavouriteHelper;

class FavouriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $favouriteCollections = FavouriteHelper::getFavourites();
        $favourites = [];
        if (!empty($favouriteCollections)) {
            foreach ($favouriteCollections as $favouriteCollection) {
                $songObj = $favouriteCollection->getSong();
                $favourites[] = [
                    'img' => $songObj->getImg() ? $songObj->getFullPath() : null,
                    'name' => $songObj->getName(),
                    'mp3' => $songObj->getFile() ? $songObj->getFile()->getFullPath() : null,
                    'album' => $songObj->getAlbum() ? $songObj->getAlbum()->getName() : null,
                    'genre' => $songObj->getGenre() ? $songObj->getGenre()->getName() : null,
                    'artist' => $songObj->getArtist() ? $songObj->getArtist()->getName() : null
                ];
            }
        }

        $this->setCode(__('favourite.success'));
        $this->setMessage(__('favourite.success'));
        $this->setData($favourites);

        return $this->getReturn();
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
