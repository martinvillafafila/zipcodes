<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use StdClass;

class ZipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $settlements=[];
        $zipcodes = new stdClass();
        $results =  DB::table('zipcodes')->where('d_codigo', $id)->get();


        foreach($results as $result){
            $settlement=array(
                "key"=>$result->id_asenta_cpcons,
                "name"=>strtoupper($result->d_asenta),
                "zone_type"=>strtoupper($result->d_zona),
                "settlement_type"=>array(
                    "name"=>$result->d_tipo_asenta,
                )
            );
            array_push($settlements, $settlement);
        }

        #En el caso de que no exista el codigo en la BD
        if ( empty($result) ){
            return "no se encontraron coincidencias para el id: ".$id;
         }

        $zipcodes->zip_code= (string)$result->d_codigo;
        $zipcodes->locality= strtoupper($result->d_ciudad);
        $zipcodes->federal_entity= array(
            "key"=>$result->c_estado,
            "name"=>strtoupper($result->d_estado),
            "code"=>$result->c_CP
        );

        $zipcodes->settlements=$settlements;
        $zipcodes->municipality = array(
            "key"=>$result->c_estado,
            "name"=>strtoupper($result->d_estado),

        );


        return $zipcodes;
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
