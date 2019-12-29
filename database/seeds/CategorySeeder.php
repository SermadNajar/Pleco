<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {

        DB::table('categories')->insert([
            [

                'id'             => 1,
                'name'           => 'Anden fremstillingsvirksomhed'
            ],
            [
                'id'             => 2,
                'name'           => 'Fremstilling af andre ikke-metalholdige mineralske produkter'
            ],
            [
                'id'             => 3,
                'name'           => 'Fremstilling af andre transportmidler'
            ],
            [
                'id'             => 4,
                'name'           => 'Fremstilling af beklædningsartikler'
            ],
            [
                'id'             => 5,
                'name'           => 'Fremstilling af computere, elektroniske og optiske produkter'
            ],
            [
                'id'             => 6,
                'name'           => 'Fremstilling af drikkevarer'
            ],
            [
                'id'             => 7,
                'name'           => 'Fremstilling af elektrisk udstyr'
            ],
            [
                'id'             => 8,
                'name'           => 'Fremstilling af farmaceutiske råvarer og farmaceutiske præparater'
            ],
            [
                'id'             => 9,
                'name'           => 'Fremstilling af fødevarer'
            ],
            [
                'id'             => 10,
                'name'           => 'Fremstilling af gummi- og plastprodukter'
            ],
            [
                'id'             => 11,
                'name'           => 'Fremstilling af kemiske produkter'
            ],
            [
                'id'             => 12,
                'name'           => 'Fremstilling af koks og raffinerede mineralolieprodukter'
            ],
            [
                'id'             => 13,
                'name'           => 'Fremstilling af læder og lædervarer'
            ],
            [
                'id'             => 14,
                'name'           => 'Fremstilling af maskiner og udstyr i.a.n'
            ],
            [
                'id'             => 15,
                'name'           => 'Fremstilling af metal'
            ],
            [
                'id'             => 16,
                'name'           => 'Fremstilling af møbler'
            ],
            [
                'id'             => 17,
                'name'           => 'Fremstilling af motorkøretøjer, påhængsvogne og sættevogne'
            ],
            [
                'id'             => 18,
                'name'           => 'Fremstilling af papir og papirvarer'
            ],
            [
                'id'             => 19,
                'name'           => 'Fremstilling af tekstiler'
            ],
            [
                'id'             => 20,
                'name'           => 'Fremstilling af tobaksprodukter'
            ],
            [
                'id'             => 21,
                'name'           => 'Fremstilling af træ og varer af træ og kork, undtagen møbler; fremstilling af varer af strå og flettematerialer'
            ],
            [
                'id'             => 22,
                'name'           => 'Jern- og metalvareindustri, undtagen maskiner og udstyr'
            ],
            [
                'id'             => 23,
                'name'           => 'Reparation og installation af maskiner og udstyr'
            ],
            [
                'id'             => 24,
                'name'           => 'Trykning og reproduktion af indspillede medier'
            ]
        ]);
    }
}