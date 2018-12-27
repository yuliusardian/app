<?php
/**
 * Created by PhpStorm.
 * User: yuliusardian
 * Date: 12/27/18
 * Time: 10:35 AM
 */

namespace App\Helpers;

use Carbon\Carbon;
use Pimcore\Model\DataObject\Ads;

class AdHelper
{
    public static function getAds()
    {
        $adLists = new Ads\Listing();
        $adLists->setCondition('validDate > ?', [Carbon::now()->timestamp]);
        $adLists->load();
        $ads = [];
        $songs = [];
        if (!empty($adLists->getObjects())) {
            foreach ($adLists->getObjects() as $ad) {
                $ads[] = [
                    'img' => $ad->getImg() ? \Pimcore\Tool::getHostUrl('https').$ad->getImg()->getThumbnail() : ''
                ];
            }
            return $ads;
        }
        return $ads;
    }
}