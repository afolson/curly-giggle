<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;
use App\Transformers\PokemonTransformer;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PokemonController extends Controller {

    // TODO: constructor
    /**
     * GET /pokemon
     *
     * @return array
     */
    public function index()
    {
        // return response()->json(Pokemon::all());
        return response()->json(Pokemon::paginate(2));
    }

    public function all()
    {
        // return response()->json(Pokemon::all());
        return response()->json(Pokemon::all());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'number' => 'required|unique:pokemon',
            'description' => 'required'
        ],[
            'number.unique' => 'Must b uneek.',
            'description.required' => 'Please fill out the :attribute.'
        ]);

        $pokemon = Pokemon::create($request->all());

        return response()->json($pokemon, 201, [
            'Location' => route('pokemon.show', ['id' => $pokemon->id])
        ]);
    }

    public function show($id)
    {
        //return $this->item(Pokemon::findOrFail($id), new PokemonTransformer());

        //return response()->json(Pokemon::findOrFail($id));

        try {
            $pokemon = Pokemon::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
            'error' => [
                'code' => '404',
                'message' => 'Pokémon not found. Consider adding it!'
            ] ], 404);
        }
        return response()->json(Pokemon::findOrFail($id));

    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $turd = $request->all();
        print_r($turd);
//        $this->validate($request, [
//            'title' => 'required|max:255',
//            'description' => 'required',
//            'author_id' => 'exists:authors,id'
//        ], [
//            'description.required' => 'Please fill out the :attribute.'
//        ]);

    //     try {
    //         $pokemon = Pokemon::findOrFail($id);
    //     } catch (ModelNotFoundException $e) {
    //         return response()->json([
    //         'error' => [
    //             'message' => 'Pokémon not found. Consider adding it!'
    //         ] ], 404);
    //     }

    // print_r($request->all());

        // $this->validate($request, [
        //     'name' => 'required|max:255',
        //     'number' => 'required',
        //     'description' => 'required'
        // ],[
        //     'description.required' => 'Please fill out the :attribute.'
        // ]);

        //print_r($pokemon);

        // $pokemon->fill($request->all());
        // $pokemon->save();

        // //return $this->item($pokemon, new PokemonTransformer());
        // return response()->json($pokemon, 201, [
        //     'Location' => route('pokemon.show', ['id' => $pokemon->id])
        // ]);

        //return response()->json(Pokemon::findOrFail($id));

    }

    public function destroy($id)
    {
        try {
            $pokemon = Pokemon::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
            'error' => [
                'message' => 'Pokémon not found. Consider adding it!'
            ] ], 404);
        }
        $pokemon->delete();

        return response(null, 204);
    }
}