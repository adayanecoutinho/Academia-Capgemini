<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RelatorioController extends Controller
{
    /**
     * chama a view filtrorelatorio
     */
    public function lista(){
		return view('filtrorelatorio');
    }
}
