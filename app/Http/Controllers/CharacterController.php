<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use function Opis\Closure\serialize;
use Carbon\Carbon;
use Mockery\CountValidator\Exception;
use Illuminate\Support\Facades\Input;

class CharacterController extends Controller
{
    // json_decode function only works with UTF-8 encoded strings
    public function ShowAll()
    {
        $characters = Character::all();
        return view('character')->with('data', $characters);
    }

    public function fillTable()
    {
        $exeMessage = 'dodano dane do tabeli ';    //exeption message
        try {
            $i = 0; // table id
            $url = 'https://swapi.co/api/people/?page=1&format=json';
            do {
                $content = file_get_contents($url);
                $next_page = json_decode($content, true)['next'];
                $results = json_decode($content, true)['results'];
                foreach ($results as $key => $value) {
                    $insertArr[$i] = $value;
                    $temp = serialize($value['name']);
                    Character::firstOrCreate([
                        'name' => $value['name'],
                        'height' => $value['height'],
                        'mass' => $value['mass'],
                        'hair_color' => $value['hair_color'],
                        'skin_color' => $value['skin_color'],
                        'eye_color' => $value['eye_color'],
                        'birth_year' => $value['birth_year'],
                        'gender' => $value['gender']
                    ]);
                    $i++;
                }
                $url = $next_page;
            } while ($next_page != null);
        } catch (\Exception $ex) {
            $exeMessage = "nieudana operacja dodania danych do tabeli \n" . $ex->getMessage();
        } finally {
            return view('fillTable')
                ->with('message', $exeMessage);
        }
    }
    public function characterJson(Request $request)
    {
        $searchedChar = $request->char_name;
        $character = Character::where('name', 'LIKE', '%' . $searchedChar . '%')->first();
        return response()->json($character);
    }
    public function searchCharacter(Request $request)
    {
        return view('charsearch');
        // $searchedChar = $request->char_name;
        // $character = Character::where('name', 'LIKE', '%' . $searchedChar . '%')->first();
        // return response()->json($character);
    }
}
