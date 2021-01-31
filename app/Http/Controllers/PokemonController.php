<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function ListarPokemon(){

        $pokemonsResponse = Http::get('https://pokeapi.co/api/v2/pokemon?limit=20');
        $bodyResult = json_decode($pokemonsResponse->body(), true);       
        $result = $bodyResult['results'];
        $arrayDePokemon = [];
        foreach ($result as $pokemon) {
            
            $nomePokemon = $pokemon['name'];
            $responsepokemon = Http::get('https://pokeapi.co/api/v2/pokemon/' . $nomePokemon);
            $resutaldoDetalhe = json_decode($responsepokemon->body(), true);
            $foto = $resutaldoDetalhe['sprites']['other']['official-artwork']['front_default'];
            $novoPokemon = new Pokemon();
            $novoPokemon->nome = $nomePokemon;
            $novoPokemon->fotoUrl = $foto;
            array_push($arrayDePokemon, $novoPokemon);

        }
        return view('listar', ['pokemons' => $arrayDePokemon]);
    }


    public function DetalhesPokemon($nomepokemon){  
        $responsepokemon = Http::get('https://pokeapi.co/api/v2/pokemon/' . $nomepokemon);
        $resultado = json_decode($responsepokemon->body(), true);
        return view('detalhespoke', [
            'nomePokemon' => $resultado['name'], 
            'abilities' => $resultado['abilities'],
            'sprites' => $resultado['sprites'],
            'types' => $resultado['types'],
            'weight' => $resultado['weight'],
            ]
        );
        
    }  

}
