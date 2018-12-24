<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Pimcore\Model\DataObject\Ads;

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
        $adLists = new Ads\Listing();
        $adLists->setCondition('validDate > ?', [Carbon::now()->timestamp]);
        $adLists->load();
        $ads = [];
        if (!empty($adLists->getObjects())) {
            foreach ($adLists->getObjects() as $ad) {
                $ads[] = [
                    'img' => $ad->getImg() ? \Pimcore\Tool::getHostUrl('https').$ad->getImg()->getThumbnail() : ''
                ];
            }
        }
        return view('home', [
            'ads' => $ads
        ]);
    }
}
