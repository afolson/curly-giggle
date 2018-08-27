<?php

use Illuminate\Database\Seeder;


use Carbon\Carbon;
// use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;

class PokemonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon')->insert([
            'name' => 'Bulbasaur',
            'number' => '1',
            'description' => 'A strange seed was planted on its back at birth. The plant sprouts and grows with this Pokémon.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Ivysaur',
            'number' => '2',
            'description' => 'When the bulb on its back grows large, it appears to lose the ability to stand on its hind legs.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Venusaur',
            'number' => '3',
            'description' => 'The plant blooms when it is absorbing solar energy. It stays on the move to seek sunlight.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charmander',
            'number' => '4',
            'description' => 'Obviously prefers hot places. When it rains, steam is said to spout from the tip of its tail.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charmeleon',
            'number' => '5',
            'description' => 'When it swings its burning tail, it elevates the temperature to unbearably high levels.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charizard',
            'number' => '6',
            'description' => 'Spits fire that is hot enough to melt boulders. Known to cause forest fires unintentionally.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Squirtle',
            'number' => '7',
            'description' => 'After birth, its back swells and hardens into a shell. Powerfully sprays foam from its mouth.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Wartortle',
            'number' => '8',
            'description' => 'Often hides in water to stalk unwary prey. For swimming fast, it moves its ears to maintain balance.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Blastoise',
            'number' => '9',
            'description' => 'A brutal Pokémon with pressurized water jets on its shell. They are used for high speed tackles.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
