<?php
/**
 * Created by PhpStorm.
 * User: yuliusardian
 * Date: 12/27/18
 * Time: 2:49 PM
 */

namespace App\Helpers;


use Pimcore\Model\DataObject\SongGenre;

class GenreHelper
{
    public static function getGenre()
    {
        $genres = [];
        $genreList = new SongGenre\Listing();
        $genreList->setLimit(50);
        $genreList->setOrderKey('o_id');
        $genreList->setOrder('desc');
        $genreList->load();
        if ($genreList->getCount() > 0) {
            foreach ($genreList->getObjects() as $genre) {
                $genres[] = [
                    'id' => $genre->getId(),
                    'name' => $genre->getName(),
                    'img' => $genre->getImg() ? $genre->getImg()->getFullPath() : 'http://via.placeholder.com/240',
                ];
            }
            return $genres;
        }
        return $genres;
    }
}