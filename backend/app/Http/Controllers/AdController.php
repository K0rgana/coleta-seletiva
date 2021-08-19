<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;

//use Illuminate\Supp\Facade\Auth;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = User::find(1);
        $ads = Auth::user()->ads()->get();

        if(sizeof($ads) == 0){
            return response('Você ainda não possui Anúncio!', 204);
        } else {
            return Auth::user()->ads()->get()->toJson();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Ad::create([
            'title' => $request->title,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'status' => $request->status,
            'image' => $request->image,

            'category_id' => $request->category,
            'address_id' => $request->address,
            'user_id' => Auth::user()->id,
        ])->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        if($ad->user_id != Auth::user()->id){
            return response('ERROR: Esse anúncio não te pertence!', 403);
        }

        return $ad->toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        if($ad->user_id != Auth::user()->id){
            return response('ERROR: Esse anúncio não te pertence!', 403);
        }

        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->quantity = $request->quantity;
        $ad->status = $request->status;
        $ad->image = $request->image;
        $ad->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        if($ad->user_id != Auth::user()->id){
            return response('ERROR: Esse anúncio não te pertence!', 403);
        }
        
        $ad->delete();
    }
}
