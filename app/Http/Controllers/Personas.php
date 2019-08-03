<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DateTime;

class Personas extends Controller
{

    public function datos(){

        $anioActual = date('Y');
        $titles = array('Rut','Nombre','Apellido','Direccion','Fecha nacimineto','Edad');
        $headers = [
            'Content-Type' => 'application/json',
            'STK-KEY' => 'OK',
        ];
        $client = new Client([
            'base_uri' => 'http://104.155.172.194/RaspiLogerReport/rep/inc/',
            'headers' => $headers
        ]);
        $response = $client->get('personReport');
        $data = json_decode($response->getBody()->getContents());

        foreach ($data as $index => $persona) {
            $fechaNacimineto = new DateTime($persona->fechaNacimiento);
            $anioNacimiento = $fechaNacimineto->format('Y');
            $persona->fechaNacimiento = $fechaNacimineto->format('d-m-Y');
            $persona->edad = $anioActual - $anioNacimiento;
        }
        
        usort($data, function($a, $b) {
            return $a->rut - $b->rut;
        });

        return view('personas', [
            'titles' => $titles,
            'response' => $data,
        ]);
    }
}
