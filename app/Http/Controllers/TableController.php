<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Table;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::paginate(10);
        return view('tables.index', compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  =>  'required',
            'capacity'  =>  'required',
        ]);
        $table = new Table;
        $table->name = $request->name;
        $table->capacity = $request->capacity;
        $table->status = $request->status;
        $table->save();
        Session::flash('msg', 'Table created successfully');
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $this->validate($request, [
            'name'  =>  'required',
            'capacity'  =>  'required',
        ]);

        $table = Table::findOrFail($request->table_id);

        $table->update($request->all());

        Session::flash('msg', 'Table updated successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $table = Table::findOrFail($request->table_id);
        $table->delete();
        Session::flash('msg', 'Table successfully deleted');
        return back();
    }
}
