<?php
/**
 * Created by PhpStorm.
 * User: yuliusardian
 * Date: 12/27/18
 * Time: 6:28 PM
 */

namespace App\Helpers;

use Pimcore\Model\DataObject\User as UserPimcore;
use Pimcore\Model\DataObject\Song;
use Pimcore\Model\DataObject;

class HistoryHelper
{
    public static function checkAndAdd($songId)
    {
        $recentlyPlayedCollections = new DataObject\Fieldcollection();
        $userPimcore = UserPimcore::getById(auth()->id(), 1);
        $songObj = Song::getById($songId, 1);
        $recentlyPlaylist = $userPimcore->getQueue() ? $userPimcore->getQueue()->getItems() : null;
        if ($recentlyPlaylist) {
            foreach ($recentlyPlaylist as $recentlyPlayed) {
                $recentlyPlayedCollection = new DataObject\Fieldcollection\Data\RecentlyPlayed();
                $recentlyPlayedCollection->setSong($recentlyPlayed->getSong());
                $recentlyPlayedCollections->add($recentlyPlayedCollection);
            }
        }
        $recentlyPlayedCollection = new DataObject\Fieldcollection\Data\RecentlyPlayed();
        $recentlyPlayedCollection->setSong($songObj);

        $recentlyPlayedCollections->add($recentlyPlayedCollection);

        $userPimcore->setRecentlyPlayed($recentlyPlayedCollections);
        $userPimcore->save();

        return true;
    }
}