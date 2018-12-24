<?php

namespace App\Http\Controllers\Web;

use Pimcore\Model\DataObject\Song;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InteractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function play($song_id)
    {
        $validator = Validator::make(['song_id' => $song_id], [
            'song_id' => 'required'
        ]);
        if ($validator->fails()) {
            return response($validator->errors(), 200);
        }
        return response($song_id, 200);
    }

    public function favourite($song_id)
    {
        $validator = Validator::make(['song_id' => $song_id], [
            'song_id' => 'required'
        ]);
        if ($validator->fails()) {
            return response($validator->errors(), 200);
        }
        return response($song_id, 200);
    }


    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'keyword' => 'required'
        ]);
        if ($validator->fails()) {
            return view('web.searchresult')->withErrors($validator->errors());
        }
        $result = [];
        $songLists = new Song\Listing();
        $songLists->setCondition('name = ?', [$request->keyword]);
        $songLists->load();
        if (!empty($songLists->getObjects())) {
            foreach ($songLists->getObjects() as $object) {
                $result[] = [
                    'name' => $object->getName(),
                    'img' => $object->getImg() ? \Pimcore\Tool::getHostUrl('https').$object->getImg()->getThumbnail() : ''
                ];
            }
        }
        $datas = [
            'keyword' => $request->keyword,
            'result' => $result
        ];
        return view('web.searchresult')->with($datas);
    }
}
