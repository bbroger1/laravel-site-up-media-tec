<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Produto;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categoria::class, 5)->create()->each(function($c){
            for($i = 1 ; $i <= 10; $i++) {
                $c->produto()->save(factory(Produto::class)->make());
            }
        });
    }
}
