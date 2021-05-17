<?php

use App\Models\WebConfig;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$aboutRouteList = [

    // Patter for Route list to create dynamically 
    // ['key' => '', 'value' => ''],

    ['key' => '/about/president', 'value' => 'pages.about.president'],
    ['key' => '/about/board_of_directors', 'value' => 'pages.about.bod'],
    ['key' => '/about/technical_&_instruction', 'value' => 'pages.about.technical'],
    ['key' => '/about/umpire_committee', 'value' => 'pages.about.umpire'],
    ['key' => '/about/tournament-committee', 'value' => 'pages.about.tournament'],
    ['key' => '/about/disciplinary-committee', 'value' => 'pages.about.disciplinary'],
    ['key' => '/about/grand-masters-promotion-committee', 'value' => 'pages.about.gMasters'],
    ['key' => '/about/grand-masters-medical-anti-doping-committee', 'value' => 'about.medical&AntiDoping'],
    ['key' => '/about/communications-development-committee', 'value' => 'pages.about.communicationsCommittee'],
    ['key' => '/about/children-development-committee', 'value' => 'pages.about.childrenDevelopment'],
    ['key' => '/about/harmony-committee', 'value' => 'pages.about.harmony'],
    ['key' => '/about/do-and-ethics-committee', 'value' => 'pages.about.doEthics'],
    ['key' => '/about/it-committee', 'value' => 'pages.about.it'],
    ['key' => '/about/audit-risk-and-compliance-committee', 'value' => 'pages.about.audit'],
    ['key' => '/about/women-committee', 'value' => 'pages.about.women'],
    ['key' => '/about/inclusion-committee', 'value' => 'pages.about.inclusion'],
    ['key' => '/about/coaches-committee', 'value' => 'pages.about.coaches'],
    ['key' => '/about/business-marketing-committee', 'value' => 'pages.about.marketing'],
    ['key' => '/about/athletes-committee', 'value' => 'pages.about.athletes'],
    ['key' => '/members', 'value' => 'pages.members.member'],
    ['key' => '/members/continental-federations', 'value' => 'pages.members.continental'],
    ['key' => '/members/national-associations', 'value' => 'pages.members.national'],
    // ['key' => '/complaint', 'value' => 'pages.complaint']



    // ['key' => '', 'value' => ''],
];


Route::get('/', function () {
    $var =  WebConfig::all();
    return view('pages.index', compact('var'));
});


// Function to add view and route 

foreach ($aboutRouteList as $route) {
    Route::get($route['key'], function () use ($route) {
        return view($route['value']);
    });
}

// Route::get('/complaint', function () {
//     $var =  WebConfig::all();
//     return view('pages.complaint', compact('var'));
// });


Route::get('/complaint', 'ComplaintsController');

// Route::get('{index.blade}', function($index)
// {
//      //
//     return View::make('index/'.$index);
// });
