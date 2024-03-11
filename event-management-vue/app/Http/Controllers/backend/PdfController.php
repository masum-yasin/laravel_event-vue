<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
// use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;




class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function generate_pdf($id)
    {        
        $bookings = Booking::all()->where('id', $id);
        // $data = [
        //     'title' => "Invoice of PESTKIT",
        //     'date' => date('m/d/Y'),
        //     'orders' => $orders
        // ];

        $pdf = Pdf::loadView('backend.booking_invoice', compact('bookings'));
        return $pdf->stream('booking-invoice');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
