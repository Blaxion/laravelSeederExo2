<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompagnieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnies')->insert([
            [
                "name"=>'corp1',
                "adress"=>'adress1',
                "mail"=>'corp1@gmail.com',
                "phone"=>'1111/11.11.11',
                "contactname"=>'perso1',
                "contactlastname"=>'persoLast1',
                "img"=>'logo.jpg',
            ],
            [
                "name"=>'corp2',
                "adress"=>'adress2',
                "mail"=>'corp2@gmail.com',
                "phone"=>'2222/22.22.22',
                "contactname"=>'perso2',
                "contactlastname"=>'persoLast2',
                "img"=>'logo.jpg',
            ],
            [
                "name"=>'corp3',
                "adress"=>'adress3',
                "mail"=>'corp3@gmail.com',
                "phone"=>'3333/33.33.33',
                "contactname"=>'perso3',
                "contactlastname"=>'persoLast3',
                "img"=>'logo.jpg',
            ],
            [
                "name"=>'corp4',
                "adress"=>'adress4',
                "mail"=>'corp1@gmail.com',
                "phone"=>'4444/44.44.44',
                "contactname"=>'perso4',
                "contactlastname"=>'persoLast4',
                "img"=>'logo.jpg',
            ],
            [
                "name"=>'corp5',
                "adress"=>'adress5',
                "mail"=>'corp1@gmail.com',
                "phone"=>'5555/55.55.55',
                "contactname"=>'perso5',
                "contactlastname"=>'persoLast5',
                "img"=>'logo.jpg',
            ],
            [
                "name"=>'corp6',
                "adress"=>'adress6',
                "mail"=>'corp6@gmail.com',
                "phone"=>'6666/66.66.66',
                "contactname"=>'perso6',
                "contactlastname"=>'persoLast6',
                "img"=>'logo.jpg',
            ]
            ]);
    }
}
