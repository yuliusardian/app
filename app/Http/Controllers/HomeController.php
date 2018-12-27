<?php

namespace App\Http\Controllers;

use App\Helpers\AdHelper;
use App\Helpers\AlbumHelper;
use App\Helpers\ArtistHelper;
use App\Helpers\GenreHelper;
use App\Helpers\SongHelper;
use Illuminate\Http\Request;
use Pimcore\Model\DataObject\Song;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = AdHelper::getAds();
        $isFreeUser = $this->isFree();
        if (!$isFreeUser) {
            $ads = [];
        }

        $topAlbum = AlbumHelper::getAlbum();
        $newRilis = SongHelper::getSong();
        $topArtist = ArtistHelper::getArtist();
        $topWeekly = SongHelper::getSong();
        $topGenre = GenreHelper::getGenre();

        return view('home', [
            'ads' => $ads,
            'topAlbum' => $topAlbum,
            'newRealease' => $newRilis,
            'topArtist' => $topArtist,
            'topWeekly' => $topWeekly,
            'genres' => $topGenre
        ]);
    }
}
