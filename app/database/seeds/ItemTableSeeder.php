<?php

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::connection('portal')->table('items')->delete();
        $items = array(
            array(
                'id' => 1,
                'itemname' => 'item1',
                'description' => 'item 1 description',
                'price' => '10.00'
                
            ),
			array(
                 'id' => 2,
                'itemname' => 'item2',
                'description' => 'item 2 description',
                'price' => '20.00'
            ),
			array(
                'id' => 3,
                'itemname' => 'item3',
                'description' => 'item 3 description',
                'price' => '30.00'
            )
			
        );


      
        DB::connection('portal')->table('items')->insert($items);
       
    }
}
