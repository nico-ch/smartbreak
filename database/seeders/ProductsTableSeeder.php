<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Patatine'],
            ['name' => 'Crackers'],
            ['name' => 'Snack Dolci'],
            ['name' => 'Bibite'],
            ['name' => 'Succhi Brick'],
            ['name' => 'Snack salati'],
            ['name' => 'Panini'],
        ]);

        $products=array(
            array("name"=>"Patatine Vivace","description"=>"Patatine San Carlo gusto Vivace","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipolle.png","category_id"=>1,"site_id"=>1),
            array("name"=>"Patatine Lime","description"=>"Patatine San Carlo gusto Lime","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"angryonions.png","category_id"=>1,"site_id"=>1),
            array("name"=>"Patatine Rustica","description"=>"Patatine San Carlo rustiche","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"insalata.png","category_id"=>1,"site_id"=>1),
            array("name"=>"Patatine Classica","description"=>"Patatine San Carlo classiche","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"formaggio.png","category_id"=>1,"site_id"=>1),
            array("name"=>"Patatine Highlander pomodoro","description"=>"Patatine Highlander gusto pomodoro","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"salsa.png","category_id"=>1,"site_id"=>1),
            array("name"=>"Wacko's BBQ","description"=>"Patatine Wacko's gusto barbeque","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"bacon.png","category_id"=>1,"site_id"=>1),
            array("name"=>"Wacko's Ketchup","description"=>"Patatine Wacko's gusto ketchup","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollepastellate.png","category_id"=>1,"site_id"=>1),
            array("name"=>"Fonzies","description"=>"Patatine Fonzies da 23.5gr","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"prosciutto.png","category_id"=>1,"site_id"=>1),
            array("name"=>"Crackers RisosuRiso","description"=>"Crackers RisosuRiso classici","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollefritte.png","category_id"=>2,"site_id"=>1),
            array("name"=>"Crackers RisosuRiso integrali","description"=>"Crackers RisosuRiso integrali","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"insalatina.png","category_id"=>2,"site_id"=>1),
            array("name"=>"Crackers RisosuRiso cioccolato","description"=>"Crackers RisosuRiso gusto cioccolato","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipolle.png","category_id"=>2,"site_id"=>1),
            array("name"=>"Baiocchi","description"=>"Baiocchi Mulino Bianco biscotti","allergens"=>"uova, lattosio","price"=>0.80,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"formaggio.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Ringo cacao","description"=>"Ringo gusto cacao","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"salsa.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Ringo vaniglia","description"=>"Ringo gusto vaniglia","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"bacon.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Crostatina cioccolato","description"=>"Crostatina gusto cioccolato","allergens"=>"uova, lattosio","price"=>0.40,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollepastellate.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Ciambellina","description"=>"Ciambellina","allergens"=>"uova, lattosio","price"=>0.40,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"prosciutto.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Kinder Maxi","description"=>"Kinder Maxi","allergens"=>"lattosio","price"=>1.20,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"acqua.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Kinder Fiesta","description"=>"Kinder Fiesta","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"pepperjack.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Kinder Delice","description"=>"Kinder Delice","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollefritte.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Kinder Bueno","description"=>"Kinder Bueno","allergens"=>"lattosio","price"=>1.20,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"insalatina.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Kinder Cereali","description"=>"Kinder Cereali","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipolle.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Kinder Duplo","description"=>"Kinder Duplo","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"angryonions.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Waffle YooHoo cacao","description"=>"Waffle YooHoo gusto cacao","allergens"=>"uova, lattosio","price"=>0.80,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"insalata.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Tre Marie wafer nocciola","description"=>"Tre Marie wafer gusto nocciola da 45gr","allergens"=>"lattosio","price"=>0.60,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"formaggio.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Tre Marie wafer gianduia nero","description"=>"Tre Marie wafer gusto gianduia e cioccolato fondente da 45gr","allergens"=>"lattosio","price"=>0.60,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"salsa.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Barretta proteica Nuts e protein","description"=>"Barretta proteica nocciole e proteine","allergens"=>"","price"=>1.30,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"bacon.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Barretta proteica snack mandorle","description"=>"Barretta proteica mandorle","allergens"=>"","price"=>1.30,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollepastellate.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Barretta proteica nocciole e cioccolato","description"=>"Barretta proteica nocciole e cioccolato","allergens"=>"","price"=>1.30,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"prosciutto.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Wafer nocciola","description"=>"Wafer gusto nocciola","allergens"=>"","price"=>0.80,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"acqua.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Wafer cioccolato","description"=>"Wafer gusto cioccolato","allergens"=>"","price"=>0.80,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"pepperjack.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Biscotto farcito vaniglia","description"=>"Biscotto farcito gusto vaniglia","allergens"=>"","price"=>0.80,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollefritte.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Mandorle","description"=>"Il bene della frutta Mandorle sgusciate","allergens"=>"","price"=>1.00,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"insalatina.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Noci","description"=>"Il bene della frutta Noci sgusciate","allergens"=>"","price"=>1.00,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipolle.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Vitalità mix","description"=>"Il bene della frutta Mandorle, Arachidi e Uva","allergens"=>"","price"=>1.00,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"angryonions.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Cookies nocciole","description"=>"Biscotti gusto nocciole","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"insalata.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Cookies cioccolato","description"=>"Biscotti gusto cioccolato","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"formaggio.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Il buono della frutta barretta fit active","description"=>"Il buono della frutta barretta con frutta secca e cioccolato","allergens"=>"lattosio","price"=>0.80,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"salsa.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Gullòn Twins cioccolato","description"=>"Gullòn Twins gusto cioccolato al latte","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"bacon.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Gullòn Twins oreo","description"=>"Gullòn Twins gusto oreo","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollepastellate.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Gullòn Gallette riso e cioccolato","description"=>"Gullòn gallette di riso integrale con cioccolato","allergens"=>"","price"=>0.60,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"prosciutto.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Nuts barretta mandorle, pistacchi e cioccolato","description"=>"Nuts barretta con mandorle, pistacchi e cioccolato (con glutine)","allergens"=>"","price"=>0.80,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"acqua.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Gullòn Cuor di cereale biscotti frutti rossi e crema yogurt","description"=>"Gullòn biscotti gusto cereali, frutti rossi e yogurt","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"pepperjack.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Gullòn Cuor di cereale biscotti multifrutta","description"=>"Gullòn biscotti gusto multifrutta","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollefritte.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Gullòn Cuor di cereale brownie al cioccolato","description"=>"Gullòn brownie gusto coccolato","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"insalatina.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Gullòn Cuor di cereale biscotti avena e frutti rossi","description"=>"Gullòn biscotti gusto avena, frutti rossi e yogurt","allergens"=>"lattosio","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipolle.png","category_id"=>3,"site_id"=>1),
            array("name"=>"Acqua naturale","description"=>"Acqua naturale da 500ml","allergens"=>"","price"=>0.30,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"formaggio.png","category_id"=>4,"site_id"=>1),
            array("name"=>"Acqua frizzante","description"=>"Acqua frizzante da 500ml","allergens"=>"","price"=>0.30,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"salsa.png","category_id"=>4,"site_id"=>1),
            array("name"=>"Coca cola","description"=>"Coca cola lattina da 330ml","allergens"=>"","price"=>0.80,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"bacon.png","category_id"=>4,"site_id"=>1),
            array("name"=>"Fanta","description"=>"Fanta lattina da 330ml","allergens"=>"","price"=>0.80,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollepastellate.png","category_id"=>4,"site_id"=>1),
            array("name"=>"Pepsi","description"=>"Pepsi lattina da 330ml","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"prosciutto.png","category_id"=>4,"site_id"=>1),
            array("name"=>"Lemonsoda","description"=>"Lemonsoda lattina da 330ml","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"acqua.png","category_id"=>4,"site_id"=>1),
            array("name"=>"Oransoda","description"=>"Onansoda lattina da 330ml","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"pepperjack.png","category_id"=>4,"site_id"=>1),
            array("name"=>"The limone","description"=>"The gusto limone da 0.5ml","allergens"=>"","price"=>0.90,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollefritte.png","category_id"=>4,"site_id"=>1),
            array("name"=>"Aranciata S.Pellegrino","description"=>"Aranciata S.Pellegrino lattina da 330ml","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"insalatina.png","category_id"=>4,"site_id"=>1),
            array("name"=>"The Yotea pesca 0.33ml","description"=>"The Yotea gusto pesca da 0.33ml","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipolle.png","category_id"=>4,"site_id"=>1),
            array("name"=>"The Yotea limone 0.33ml","description"=>"The Yotea gusto limone da 0.33ml","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"angryonions.png","category_id"=>4,"site_id"=>1),
            array("name"=>"Pesca","description"=>"Brick alla pesca","allergens"=>"","price"=>0.50,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"salsa.png","category_id"=>5,"site_id"=>1),
            array("name"=>"Pera","description"=>"Brick alla pera","allergens"=>"","price"=>0.50,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"bacon.png","category_id"=>5,"site_id"=>1),
            array("name"=>"Mela","description"=>"Brick alla mela","allergens"=>"","price"=>0.50,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollepastellate.png","category_id"=>5,"site_id"=>1),
            array("name"=>"Albicocca","description"=>"Brick all'albicocca","allergens"=>"","price"=>0.50,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"prosciutto.png","category_id"=>5,"site_id"=>1),
            array("name"=>"Ace","description"=>"Brick all'ace","allergens"=>"","price"=>0.50,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"acqua.png","category_id"=>5,"site_id"=>1),
            array("name"=>"Nuvole gusto pizza","description"=>"Snatt's nuvole gusto pizza con cereali e soia","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"insalatina.png","category_id"=>6,"site_id"=>1),
            array("name"=>"Mr Corn mais tostato","description"=>"Mister Corn mais tostato da 40gr","allergens"=>"","price"=>0.60,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipolle.png","category_id"=>6,"site_id"=>1),
            array("name"=>"Arachidi Rois classici","description"=>"Arachidi Rois crispy classici","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"angryonions.png","category_id"=>6,"site_id"=>1),
            array("name"=>"Arachidi Rois BBQ","description"=>"Arachidi Rois crispy gusto BBQ","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"insalata.png","category_id"=>6,"site_id"=>1),
            array("name"=>"Arachidi tostate","description"=>"Arachidi tostate da 30gr","allergens"=>"","price"=>0.40,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"formaggio.png","category_id"=>6,"site_id"=>1),
            array("name"=>"Semi di girasole","description"=>"Semi di girasole da 30gr","allergens"=>"","price"=>0.40,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"salsa.png","category_id"=>6,"site_id"=>1),
            array("name"=>"Tarallini","description"=>"Tarallini classici in busta","allergens"=>"","price"=>0.40,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"bacon.png","category_id"=>6,"site_id"=>1),
            array("name"=>"Ritz mini","description"=>"Ritz mini da 35gr","allergens"=>"","price"=>0.70,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollepastellate.png","category_id"=>6,"site_id"=>1),
            array("name"=>"Castagne al vapore","description"=>"Castagne al vapore","allergens"=>"","price"=>1.20,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollepastellate.png","category_id"=>6,"site_id"=>1),
            array("name"=>"Panino al prosciutto cotto","description"=>"panino al cotto e formaggio","allergens"=>"lattosio","price"=>0.5,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"pepperjack.png","category_id"=>7,"site_id"=>1),
            array("name"=>"Panino al salame","description"=>"Panino salame, insalata","allergens"=>"","price"=>0.5,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipollefritte.png","category_id"=>7,"site_id"=>1),
            array("name"=>"Panino al Tonno","description"=>"Panino Tonno, maionese","allergens"=>"","price"=>0.5,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"insalatina.png","category_id"=>7,"site_id"=>1),
            array("name"=>"Panino Caprese","description"=>"Panino al pomodoro e mozzarella","allergens"=>"lattosio","price"=>1.0,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"cipolle.png","category_id"=>7,"site_id"=>1),
            array("name"=>"Panino al prosciutto crudo","description"=>"Panino Prosciutto crudo, insalata, formaggio","allergens"=>"lattosio","price"=>1.0,"num_items"=>100,"default_daily_stock"=>50,"photo_path"=>"formaggio.png","category_id"=>7,"site_id"=>1)
          );

        DB::table('products')->insert($products);

    }
}
