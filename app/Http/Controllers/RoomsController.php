<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomsController extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room = Rooms::all();
        return response()->json($room);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->getValidationFactory()
            ->make($request->all(), [
                'name' => 'required',
                'src' => 'required',
                'info' => 'required',
                'star' => 'required|between:0,5',
                'price' => 'required|min:0',
                'defprice' => 'required|min:0',
                'type' => 'required|min:0'
            ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $room = Rooms::create($input);
        $success['id'] =  $room->id;
        $success['name'] =  $room->name;
        return response()->json(['success' => $success], $this->successStatus);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function infoRooms()
    {
        $Rooms['current'] = DB::table('rooms')->count();
        $Rooms['available'] = DB::table('rooms')->where('stats', 'available')->count();
        $Rooms['uncleaned'] = DB::table('rooms')->where('stats', 'uncleaned')->count();
        $Rooms['repair'] = DB::table('rooms')->where('stats', 'repair')->count();
        return response()->json(['rooms'=>$Rooms], $this->successStatus);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
