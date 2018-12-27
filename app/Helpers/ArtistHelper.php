<?php
/**
 * Created by PhpStorm.
 * User: yuliusardian
 * Date: 12/27/18
 * Time: 2:03 PM
 */

namespace App\Helpers;

use Pimcore\Model\DataObject\SongArtist;

class ArtistHelper
{
    public static function getArtist()
    {
        $featuredArtistListData = [];
        $featuredArtistList = new SongArtist\Listing();
        $featuredArtistList->setLimit(20);
        $featuredArtistList->setOrder('desc');
        $featuredArtistList->setOrderKey('o_id');
        $featuredArtistList->load();
        if ($featuredArtistList->getCount() > 0) {
            foreach ($featuredArtistList->getObjects() as $object) {
                $tmpFeaturedArtist['id']    = $object->getId();
                $tmpFeaturedArtist['name']  = $object->getName();
                $tmpFeaturedArtist['img']   = $object->getImg() ? \Pimcore\Tool::getHostUrl().$object->getImg()->getFullPath() : 'http://via.placeholder.com/240';
                $featuredArtistListData[]   = $tmpFeaturedArtist;
            }
            return $featuredArtistListData;
        }
        return $featuredArtistListData;
    }
}