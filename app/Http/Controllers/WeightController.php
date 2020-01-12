<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WeightRequest;
use App\Weight;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Weight::orderBy('tanggal', 'ASC')->get();
        $len = sizeof($data);
        $min = Weight::sum('min') / $len;
        $max = Weight::sum('max') / $len;
        $args = [
            'weights' => Weight::orderBy('tanggal', 'ASC')->get(),
            'min' => $min,
            'max' => $max
        ];
        return view('weights.index', $args);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $weight = new Weight();
        return view('weights.create', compact('weight'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\WeightRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WeightRequest $request)
    {
        Weight::create($request->only('tanggal', 'max', 'min'));
        return redirect()->route('weights.index')
            ->with('success', 'Berat berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function show(Weight $weight)
    {
        return view("weights.show", compact('weight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function edit(Weight $weight)
    {
        return view("weights.edit", compact('weight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\WeightRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WeightRequest $request, Weight $weight)
    {
        $weight->update($request->only('max', 'min'));
        return redirect('/weights')
            ->with('success', 'Berat berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weight $weight)
    {
        $weight->delete();
        return redirect('/weights')
            ->with('success', 'Your Weight has been deleted');
    }
}
