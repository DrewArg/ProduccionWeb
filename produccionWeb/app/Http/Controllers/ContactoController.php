<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;


class ContactoController extends Controller
{
    public function index()
    {
        return view('common.contacto.index', [
        ]);
    }

}
