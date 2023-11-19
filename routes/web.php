<?php


use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');

Route::get('/team', [PublicController::class, 'team'])->name('team');












Route::get('/articolo/dettaglio/{prodottoName}', function ($prodottoName){
    $smartphones = [
        [
            'name' => 'Xiaomi Redmi 12 Pro',
            'price'=> '499,00 €',
            'img' => '/media/Xiaomi.jfif',
            'description' => 'Xiaomi Redmi Note 12 Pro+ 5G. Dimensioni schermo: 16,9 cm (6.67″), Risoluzione del display: 2400 x 1080 Pixel, Tipo di display: AMOLED. Famiglia processore: MediaTek Dimensity, Modello del processore: 1080. Capacità della RAM: 8 GB, Tipo di RAM: LPDDR4X, Capacità memoria interna: 256 GB.'
        ],
        [
            'name' => 'Iphone 15 Nero',
            'price'=> '899,00 €',
            'img' => '/media/Iphone.jpg' ,
            'description' => "Apple iPhone 15 è uno smartphone iOS con caratteristiche all'avanguardia che lo rendono una scelta eccellente per ogni tipo di utilizzo, rappresentando uno dei migliori dispositivi mobili mai realizzati. Dispone di un grande display da 6.1 pollici e di una risoluzione da 2556x1179 pixel.iPhone 15 è completata da una fotocamera con un sensore da ben 48 megapixel permette di scattare foto con risoluzione di 8000x6000 pixel e video in 4K risoluzione di 3840x2160 pixel."
        ],
        [
            'name' => 'Samsung galaxy S23 Ultra',
            'price'=> '999,00 €',
            'img' => '/media/Samsung.jpg',
            'description' => 'Il Samsung S23 Ultra è dotato di 12 GB di RAM, che offre prestazioni fluide e multitasking senza intoppi. Per quanto riguarda la memoria interna, ha una capacità di 128 GB. La fotocamera è uno dei punti di forza di questo smartphone, con una risoluzione di 108 MP, un ultra grandangolare da 12 MP e un teleobiettivo da 10 MP con zoom 100x.'
        ],
        [
            'name' => 'Motorola Edge 40 Pro',
            'price'=> '549,00 €',
            'img' => '/media/Motorola.jpg',
            'description' => 'Display 6,67" FHD+ / 1080 x 2400 PX · Fotocamera 50 MPX ƒ/1.8 · Frontale 60 MPX ƒ/2.2 · CPU octa 3 GHz · RAM 12 GB · Memoria Interna 256 GB · Batteria 4600 mAh.'
        ],
    ];
    
    foreach($smartphones as $smartphone){
        if($smartphone['name'] == $prodottoName){
            return view('article_detail', ['telefono' => $smartphone]);
        }
    }
    abort(404);
    
})->name('article.detail');

Route::get('/team/dettaglio/{membroName}', function ($membroName){
    $members = [
        [
            'name' => 'Lara',
            'role'=> 'Social Media Menager',
            'img' => '/media/Menager.png',
        ],
        [
            'name' => 'Francesco',
            'role'=> 'Coordinatore di ufficio',
            'img' => '/media/coordinatore.jpeg',
        ],
        [
            'name' => 'Alessandro',
            'role'=> 'Il nostro amministratore',
            'img' => '/media/admin.jpg',
        ],
        [
            'name' => 'Alessia',
            'role'=> 'Conatbile',
            'img' => '/media/Mcontabile.png',
        ],
    ];

    foreach($members as $member){
        if($member['name'] == $membroName){
            return view('team-dettaglio', ['member' => $member]);
        }
    }
    abort(404);


})->name('team.detail');



