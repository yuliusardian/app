<?php

namespace App\Http\Middleware;

use App\Helpers\QueueHelper;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class ViewVariables
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $queueCollection = QueueHelper::getQueues();
        $userPlaylist = [];
        if ($queueCollection) {
            foreach ($queueCollection as $queue) {
                $song = $queue->getSong();
                $userPlaylist[] = [
                    'id' => $song->getId(),
                    'image' => $song->getImg() ? \Pimcore\Tool::getHostUrl('http').$song->getImg()->getFullPath() : 'http://via.placeholder.com/100',
                    'title' => $song->getName(),
                    'artist' => $song->getArtist()->getName(),
                    'mp3' => $song->getFile() ? $song->getFile()->getFullPath() : 'http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3',
                    'option' => ''
                ];
            }
        }
        view()->share('userPlaylist', $userPlaylist);

        return $next($request);
    }
}
