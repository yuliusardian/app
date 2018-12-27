<?php
/**
 * Created by PhpStorm.
 * User: yuliusardian
 * Date: 12/27/18
 * Time: 2:28 PM
 */

namespace App\Helpers;

use Pimcore\Model\DataObject\Song;

class SongHelper
{
    public static function getSong()
    {
        $songs = [];
        $songList = new Song\Listing();
        $songList->setLimit(50);
        $songList->setOrderKey('o_id');
        $songList->setOrder('desc');
        $songList->load();
        if (!empty($songList->getObjects())) {
            foreach ($songList->getObjects() as $song) {
                $songs[] = [
                    'id' => $song->getId(),
                    'image' => $song->getImg() ? $song->getImg()->getFullPath() : 'http://via.placeholder.com/100',
                    'title' => $song->getName(),
                    'artist' => $song->getArtist()->getName(),
                    'mp3' => $song->getFile() ? $song->getFile()->getFullPath() : 'http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3',
                    'option' => ''
                ];
            }
            return $songs;
        }
        return $songs;
    }
}