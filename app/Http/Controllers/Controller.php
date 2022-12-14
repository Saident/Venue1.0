<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\City;
use App\Models\Faq;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getPemesanan()
    {
        $venue = Venue::all();
        return view("hasilpencarian", ["message" => "get all venue", "venue" => $venue]);
    }
    public function getVenue()
    {
        return view('venues');
    }

    public function indexHomepage()
    {
        $carousel = Galeri::all()->take(6);
        $lembaga = Lembaga::all()->take(8);
        return view("frontend.index", ["title" => "Beranda", 'carousel' => $carousel, 'lembaga' => $lembaga]);
    }

    public function GetDetailVenue(Request $request){
        $id_reservation = Str::random(8);
        $id = $request->id;
        $venue = Venue::with('category', 'city', 'facility', 'faq', 'review')->find($id)->setHidden(['created_at', 'updated_at']);
        $days_count = date_diff(date_create($request->start), date_create($request->end));
        $sum_price = $days_count->d * $venue->price;
        return view("detail", ["id_reservation" => $id_reservation, "venue" => $venue,
        "sumprice" => $sum_price, "id" => $id]);
    }

    public function createReservation(Request $request)
    {
        $id = $request->id;
        $venue = Venue::find($id);
        $id_reservation = Str::random(8);
        // $days_count = date_diff(date_create($request->start), date_create($request->end));
        $price = $venue->price;
        // $sum_price = $days_count->d * $price->price;
        $reservation = Reservation::create([
            'email' => Auth::user()->email,
            'id_reservation' => $id_reservation,
            'id_venue' => $venue->id,
            'price' => $venue->price,
        ]);
        return view("pembayaran", ["venue" => $venue, "id_reservation" => $id_reservation]);
        // $bill = Reservation::with(['customer', 'venue'])->find($id_reservation)->setHidden(['updated_at']);

    }



    public function getAllProvince()
    {
        $provinces = Province::all(['id', 'province']);
        return response()->json([
            'status' => 'success',
            'message' => "All province has displayed.",
            'list' => $provinces
        ], 200);
    }

    public function getCityByProvince($id)
    {
        $cities = City::where('id_province', 'like', $id)->get(['id', 'city']);
        return response()->json([
            'status' => 'success',
            'message' => "All city has displayed.",
            'List' => $cities
        ], 200);
    }

    public function createVenue(Request $request)
    {
        $venue = Venue::create([
            'name' => $request->name,
            'vendor' => $request->vendor,
            'id_category' => $request->id_category,
            'address' => $request->address,
            'id_city' => $request->id_city,
            'description' => $request->description,
            'policy' => $request->policy,
            'id_facility' => $request->id_facility,
            'picture' => $request->picture,
            'price' => $request->price
        ]);
        return response()->json([
            'status' => 'success',
            'message' => "$venue->name by $venue->vendor has been added."
        ], 200);
    }

    public function GetAllVenue()
    {
        $venues = Venue::with('category', 'city')->get(['id', 'name', 'vendor', 'id_category', 'address', 'id_city', 'description', 'policy', 'picture', 'price']);
        $venueList = [];
        foreach ($venues as $venue) {
            $venueList[] = [
                'id' => $venue->id,
                'name' => $venue->name,
                'vendor' => $venue->vendor,
                'category' => $venue->category->category,
                'address' => $venue->address,
                'city' => $venue->city->city,
                'province' => $venue->city->province->province,
                'description' => $venue->description,
                'policy' => $venue->policy,
                'picture' => $venue->picture,
                'price' => $venue->price
            ];
        }

    }



    public function AddVenueFacility(Request $request)
    {
        $venue = Venue::find($request->id_venue);
        $venue->facility()->attach($request->id_facility);
        return response()->json([
            'status' => 'success',
            'message' => "Facility has been added."
        ], 200);
    }


    public function forTransaction($id)
    {
        $bill = Reservation::with(['customer'])->find($id)->setHidden(['updated_at']);
        return response()->json([
            'status' => 'success',
            'message' => 'Reservation has been added.',
            'reservation' => [
                'id_reservation' => $bill->id_reservation,
                'customer' => $bill->customer->name,
                'price' => $bill->price,
                'desc' => $bill->desc,
            ]
        ]);
    }
}
