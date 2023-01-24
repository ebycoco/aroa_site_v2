<?php

use Illuminate\Support\Facades\DB;

$english = DB::table('translates')->select('lang_key', 'english')->get();
$english = json_decode(json_encode($english), true);



 $anglais = array();
 foreach ($english as $en) {
     $anglais[$en['lang_key']] = $en['english'];
 }
 return $anglais;
// return [
//     'Impulsez votre création de valeur' => 'Emporing your ...',
// ];