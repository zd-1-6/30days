<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reservations()
    {
        $reservations = Reservation::latest('booked')->paginate(50);
        
        return view('airbnb_reservations.reservations', [
            'reservations' => $reservations
        ]);
    }

    public function search(Request $request)
    {
        $query = Reservation::query();
        
        if ($request->filled('q')) {
            $search = $request->q;
            $query->where(function($q) use ($search) {
                $q->where('guest_name', 'like', '%' . $search . '%')
                  ->orWhere('confirmation_code', 'like', '%' . $search . '%')
                  ->orWhere('listing_name', 'like', '%' . $search . '%');
            });
        }

        $reservations = $query->latest('booked')->paginate(50);

        return view('airbnb_reservations.search', [
            'reservations' => $reservations
        ]);
    }
}

