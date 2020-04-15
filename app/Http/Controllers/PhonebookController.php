<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    public function home()
    {

        $jsonData = file_get_contents('http://www.mocky.io/v2/581335f71000004204abaf83');

        $userData = json_decode($jsonData, true);
        $contacts = $userData['contacts'];

        $key = isset($_REQUEST['q']) ? $_REQUEST['q'] : 'name';

        if(isset($_REQUEST['search'])) {
            $this->filterArray($contacts, $key, $_REQUEST['search']);
        }

        $this->sortArray($contacts, $key);

        return view('list', compact('contacts'));

    }

    private function filterArray(&$arr, $key, $search)
    {
        $arr = array_filter($arr, function($array) use($key, $search) {
            $res = stripos($array[$key], $search, 0);

            if($res === false) {
                return false;
            } else {
                return true;
            }
        });
    }

    private function sortArray(&$arr, $key)
    {
        usort($arr, function($a, $b) use($key) {
            return $a[$key] <=> $b[$key];
        });
    }
}
