<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $faker = Faker::create();
          $pizzas=['Italian Pizza','Greek Pizza','Caucasian Pizza','American Pizza','Tomatoe Pie','Margherita'];
            for($i = 1; $i <= 6; $i++) {
                App\Pizza::create([
                    'title'=>$pizzas[$i-1],
                    'description'=>'Italian sausage, pesto, feta cheese, bell peppers, tomato sauce, Mozzarella cheese',  
                'img_url'=>'/images/pizza-'.$i.'.jpg',
              'price' => $faker->randomFloat(2,20,30),
                
            ]);
        };
    
}
};