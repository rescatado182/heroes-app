<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(Request $request) 
    {
        $json = $this->getHeroesContent();
        $json = json_encode($json);

        $page = 1;

        if( !empty($request->get("page")) && $request->get("page") > 1) {
            $page = $request->get("page");
        } 
        
        $rows = $this->paginate(json_decode($json, true), $page, 8);
        

        return view('pages.index')->with('heroes', $rows);
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
        $result = array();
        if( isset($data["original"]) )
        {
            $data = $data["original"];

            $x = ($page - 1) * $perPage;
            $z = $page * $perPage;
            $y = ($z > count($data)) ? count($data) : $z;

            for(; $x < $y; $x++) {
                $result[$x] = $data[$x];
            }

            return $result;
        }
    }
}
