<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\Brand;
use App\Models\Unit;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $units = Unit::latest()->get();
            return DataTables::of($units)
                ->addIndexColumn()
                ->addColumn('brand', function (Unit $unit) {
                    return $unit->BrandModel->brand->name;
                })
                ->addColumn('models', function (Unit $unit) {
                    return $unit->BrandModel->name;
                })
                ->addColumn('type', function (Unit $unit) {
                    return $unit->karoseri->name;
                })
                ->addColumn('action', function ($unit) {
                    return view('dashboard.unit.button')->with('unit', $unit);
                })

                ->make(true);
        }
        return view('.dashboard.unit.index', [
            'title' => 'UNIT MANAGEMENT',
        ]);
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
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
