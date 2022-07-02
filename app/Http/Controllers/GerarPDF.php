<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Dompdf\Options;
use Illuminate\Support\Facades\App;

class GerarPDF extends Controller
{
    public function pdf(Request $request)
    {


        $minhaVariavel = $request->renan;

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $caminho = './imgs/logoIF.png';



        $pdf = App::make('dompdf.wrapper');
        $a = '<img src="' . $minhaVariavel . '" width="200">
              <img src="' . $caminho . '" width="200">';


        $pdf->loadHTML($a);

        return $pdf->stream();
    }
}
