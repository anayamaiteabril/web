<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            ['name' => 'Home'],
            ['name' => 'Marcas'],
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => env('ADMIN_EMAIL'),
            'password' => bcrypt(env('ADMIN_PASSWORD'))
        ]);

        DB::table('categories')->insert([
            [
                'value' => 'Electricidad',
                'slug' => 'electricidad'
            ],
            [
                'value' => 'Injección',
                'slug' => 'injeccion'
            ],
            [
                'value' => 'Iluminación',
                'slug' => 'iluminacion'
            ],
            [
                'value' => 'Tren delantero',
                'slug' => 'tren-delantero'
            ]
        ]);

        DB::table('images')->insert([
            'src' => 'abouts.jpg'
        ]);

        DB::table('abouts')->insert([
            'title' => 'Tranqui Cultivos',
            'label' => 'Somos distribuidores de zona oeste. Contamos con venta mayorista de tren delantero con gran stock de mercadería para su respaldo y reposición.',
            'image_id' => 1
        ]);

        factory(App\Product::class, 10)->create();
    }
}
