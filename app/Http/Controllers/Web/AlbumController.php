<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Pimcore\Model\DataObject\SongAlbum;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featuredAlbumListData = null;
        $featuredAlbumList = new SongAlbum\Listing();
        $featuredAlbumList->setLimit(20);
        $featuredAlbumList->load();
        if ($featuredAlbumList->getCount() > 0) {
            foreach ($featuredAlbumList->getObjects() as $object) {
                $tmpFeaturedAlbum['id']     = $object->getId();
                $tmpFeaturedAlbum['name']   = $object->getName();
                $tmpFeaturedAlbum['img']    = $object->getImg() ? \Pimcore\Tool::getHostUrl().$object->getImg()->getFullPath() : 'http://via.placeholder.com/240';
                $tmpFeaturedAlbum['artist'] = $object->getArtist() ? $object->getArtist()->getName() : '-';
                $featuredAlbumListData[]    = $tmpFeaturedAlbum;
            }
        }

        return view('web.album', [
            'featured_albums'   => $featuredAlbumListData,
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
