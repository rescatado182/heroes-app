<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {

        $json = $this->getHeroesContent();
        $json = json_encode($json);

        return view('pages.index')->with('heroes', json_decode($json, true));
    }

    public function view(Request $request) {

        $name = $request->get("name");

        $json = $this->getHeroesContent();
        $json = json_encode($json);

        $heroe = $this->getHeroeInfo($json, $name);

        return view('pages.view')->with('heroe', $heroe);
    }

    public function votes() {

        return view('pages.votes');
    }

    public function getHeroesContent()
    {
        $body       = "";
        $jsonurl    = "http://35.162.46.100/superheroes/";
        $html       = file_get_contents($jsonurl);

        if (preg_match('~<body[^>]*>(.*?)</body>~si', $html, $body)){ 
            $json  = json_decode($body[1]);
        }

        return response()->json($json);
    }

    private function getHeroeInfo($json, $heroeName) 
    {
        $result = array();

        if( !empty($json) ) 
        {
            $data = json_decode($json, true);

            foreach( $data["original"] as $member ) {

                if( $member["name"] == $heroeName) {
                    $result = $member;
                    break;
                }
            }

            return $result;
        }

        return;
    }

    private function paginate($data, $page = 1, $perPage = 2) 
    {
        $x = ($page - 1) * $perPage;
        $z = $page * $perPage;
        $y = ($z > count($data)) ? count($data) : $z;
        for(; $x < $y; $x++) {
           echo $data[$x]['name'];
        }
     }
}
