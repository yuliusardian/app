<?php
/**
 * Created by PhpStorm.
 * User: yuliusardian
 * Date: 12/27/18
 * Time: 2:01 PM
 */

namespace App\Helpers;

use Pimcore\Model\DataObject\SongAlbum;

class AlbumHelper
{
    public static function getAlbum()
    {
        $featuredAlbumListData = [];
        $featuredAlbumList = new SongAlbum\Listing();
        $featuredAlbumList->setLimit(20);
        $featuredAlbumList->setOrder('desc');
        $featuredAlbumList->setOrderKey('o_id');
        $featuredAlbumList->load();
        if ($featuredAlbumList->getCount() > 0) {
            foreach ($featuredAlbumList->getObjects() as $object) {
                $tmpFeaturedAlbum['id']     = $object->getId();
                $tmpFeaturedAlbum['name']   = $object->getName();
                $tmpFeaturedAlbum['img']    = $object->getImg() ? \Pimcore\Tool::getHostUrl().$object->getImg()->getFullPath() : 'http://via.placeholder.com/240';
                $tmpFeaturedAlbum['artist'] = $object->getArtist() ? $object->getArtist()->getName() : '-';
                $featuredAlbumListData[]    = $tmpFeaturedAlbum;
            }
            return $featuredAlbumListData;
        }
        return $featuredAlbumListData;
    }
}
