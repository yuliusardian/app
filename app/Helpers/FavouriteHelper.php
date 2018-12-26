<?php
/**
 * Created by PhpStorm.
 * User: yuliusardian
 * Date: 12/26/18
 * Time: 6:13 PM
 */

namespace App\Helpers;

use Pimcore\Model\DataObject\User as UserPimcore;
use Pimcore\Model\DataObject\Song;
use Pimcore\Model\DataObject;

class FavouriteHelper
{
    public static function checkAndAdd($songId)
    {
        $favouriteCollections = new DataObject\Fieldcollection();
        $userPimcore = UserPimcore::getById(auth()->id(), 1);
        $songObj = Song::getById($songId, 1);
        $favouriteList = $userPimcore->getFavourite() ? $userPimcore->getFavourite()->getItems() : null;
        if ($favouriteList) {
            foreach ($favouriteList as $favourite) {
                $favouriteCollection = new DataObject\Fieldcollection\Data\Favourite();
                $favouriteCollection->setSong($favourite->getSong());
                $favouriteCollections->add($favouriteCollection);
            }
        }
        $favouriteCollection = new DataObject\Fieldcollection\Data\Favourite();
        $favouriteCollection->setSong($songObj);

        $favouriteCollections->add($favouriteCollection);

        $userPimcore->setFavourite($favouriteCollections);
        $userPimcore->save();

        return true;
    }

    public static function getFavourites()
    {
        $user = UserPimcore::getById(auth()->id(), 1);
        $favouriteCollections = $user->getFavourite() ? $user->getFavourite()->getItems() : null;
        return $favouriteCollections;
    }
}