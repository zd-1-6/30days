<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vatinvoice;

class VatinvoiceController extends Controller
{
    public function vatinvoices()
    
    {
        $vatinvoices = Vatinvoice::query()
           ->orderBy('date_of_service', 'desc')
           ->paginate(24);
        
        return view('airbnb_reservations.vatinvoices',
           ['vatinvoices' => $vatinvoices]);
    }
}










