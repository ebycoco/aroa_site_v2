<?php

use Illuminate\Support\Facades\DB;

$french = DB::table('translates')->select('lang_key', 'french')->get();
$french = json_decode(json_encode($french), true);



 $francais = array();
 foreach ($french as $fr) {
     $francais[$fr['lang_key']] = $fr['french'];
 }
 return $francais;

// return [
//     'Impulsez votre création de valeur' => 'Impulsez votre création de valeur',
// ];