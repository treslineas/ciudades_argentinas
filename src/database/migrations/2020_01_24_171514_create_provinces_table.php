<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lat');
            $table->string('lon');
            $table->timestamps();
        });


        // PROVINCES
DB::table('provinces')->insert(['id' => '54', 'name' => 'Misiones', 'lat' => '-26.875396508683', 'lon' => '-54.651696623037']); 
DB::table('provinces')->insert(['id' => '74', 'name' => 'San Luis', 'lat' => '-33.757725744914', 'lon' => '-66.028129819584']); 
DB::table('provinces')->insert(['id' => '70', 'name' => 'San Juan', 'lat' => '-30.865367997962', 'lon' => '-68.889490848684']); 
DB::table('provinces')->insert(['id' => '30', 'name' => 'Entre Ríos', 'lat' => '-32.058873543645', 'lon' => '-59.201447551464']); 
DB::table('provinces')->insert(['id' => '78', 'name' => 'Santa Cruz', 'lat' => '-48.815485182706', 'lon' => '-69.955762167197']); 
DB::table('provinces')->insert(['id' => '62', 'name' => 'Río Negro', 'lat' => '-40.40579571788', 'lon' => '-67.229329893694']); 
DB::table('provinces')->insert(['id' => '26', 'name' => 'Chubut', 'lat' => '-43.788623352988', 'lon' => '-68.526759394335']); 
DB::table('provinces')->insert(['id' => '14', 'name' => 'Córdoba', 'lat' => '-32.142932663607', 'lon' => '-63.801753274166']); 
DB::table('provinces')->insert(['id' => '50', 'name' => 'Mendoza', 'lat' => '-34.629887305896', 'lon' => '-68.58312281838']); 
DB::table('provinces')->insert(['id' => '46', 'name' => 'La Rioja', 'lat' => '-29.685776298315', 'lon' => '-67.181735969443']); 
DB::table('provinces')->insert(['id' => '10', 'name' => 'Catamarca', 'lat' => '-27.335833281022', 'lon' => '-66.947682429993']); 
DB::table('provinces')->insert(['id' => '42', 'name' => 'La Pampa', 'lat' => '-37.131553773595', 'lon' => '-65.446654660695']); 
DB::table('provinces')->insert(['id' => '86', 'name' => 'Santiago del Estero', 'lat' => '-27.782411655094', 'lon' => '-63.252386656859']); 
DB::table('provinces')->insert(['id' => '18', 'name' => 'Corrientes', 'lat' => '-28.774304704641', 'lon' => '-57.801219197791']); 
DB::table('provinces')->insert(['id' => '82', 'name' => 'Santa Fe', 'lat' => '-30.706927158812', 'lon' => '-60.949836943024']); 
DB::table('provinces')->insert(['id' => '90', 'name' => 'Tucumán', 'lat' => '-26.947800183079', 'lon' => '-65.364757944148']); 
DB::table('provinces')->insert(['id' => '58', 'name' => 'Neuquén', 'lat' => '-38.64175758246', 'lon' => '-70.11857051806']); 
DB::table('provinces')->insert(['id' => '66', 'name' => 'Salta', 'lat' => '-24.2991344492', 'lon' => '-64.814462960063']); 
DB::table('provinces')->insert(['id' => '22', 'name' => 'Chaco', 'lat' => '-26.386430906123', 'lon' => '-60.76583074386']); 
DB::table('provinces')->insert(['id' => '34', 'name' => 'Formosa', 'lat' => '-24.894972594871', 'lon' => '-59.932440580087']); 
DB::table('provinces')->insert(['id' => '38', 'name' => 'Jujuy', 'lat' => '-23.320078421135', 'lon' => '-65.764252218034']); 
DB::table('provinces')->insert(['id' => '02', 'name' => 'Ciudad Autónoma de Buenos Aires', 'lat' => '-34.614493411969', 'lon' => '-58.445856354543']); 
DB::table('provinces')->insert(['id' => '06', 'name' => 'Buenos Aires', 'lat' => '-36.676941518053', 'lon' => '-60.558831981572']); 
DB::table('provinces')->insert(['id' => '94', 'name' => 'Tierra del Fuego, Antártida e Islas del Atlántico Sur', 'lat' => '-82.52151781221', 'lon' => '-50.742748604979']); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
