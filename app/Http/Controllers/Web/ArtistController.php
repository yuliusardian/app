<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Pimcore\Model\DataObject\SongArtist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featuredArtistListData = null;
        $featuredArtistList = new SongArtist\Listing();
        $featuredArtistList->setLimit(20);
        $featuredArtistList->load();
        if ($featuredArtistList->getCount() > 0) {
            foreach ($featuredArtistList->getObjects() as $object) {
                $tmpFeaturedArtist['id']    = $object->getId();
                $tmpFeaturedArtist['name']  = $object->getName();
                $tmpFeaturedArtist['img']   = $object->getImg() ? \Pimcore\Tool::getHostUrl().$object->getImg()->getFullPath() : 'http://via.placeholder.com/240';
                $featuredArtistListData[]   = $tmpFeaturedArtist;
            }
        }

        $topArtistListData = null;
        $topArtistList = new SongArtist\Listing();
        $topArtistList->setLimit(20);
        $topArtistList->load();
        if ($topArtistList->getCount() > 0) {
            foreach ($topArtistList->getObjects() as $item) {
                $tmpTopArtist['id']     = $item->getId();
                $tmpTopArtist['name']   = $item->getName();
                $tmpTopArtist['img']    = $item->getImg() ? \Pimcore\Tool::getHostUrl().$item->getImg()->getFullPath() : 'http://via.placeholder.com/240';
                $topArtistListData[]    = $tmpTopArtist;
            }
        }

        return view('web.artist', [
            'featured_artists'  => $featuredArtistListData,
            'top_artists'       => $topArtistListData
        ]);
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
