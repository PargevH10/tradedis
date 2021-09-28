<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Symbol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SymbolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Symbol';
        $page_description = 'This is Symbol page';
        $symbols = Symbol::all();

        return view('admin.pages.symbol.symbol', compact('page_title', 'page_description', 'symbols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Symbol create';
        $page_description = 'This is Symbol create page';

        return view('admin.pages.symbol.symbol-create', compact('page_title', 'page_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $file = $request->file('logo');
        $fileName = $file->getClientOriginalName();
        $symbolName = $request['symbol_name'];
        $symbolDescription = $request['symbol_description'];
        $bid = $request['bid'];
        $quantity1 = $request['quantity1'];
        $ask = $request['ask'];
        $quantity2 = $request['quantity2'];
        $cost = $request['cost'];
        $strike = $request['strike'];
        $lastTrade = $request['last_trade'];
        $percent = $request['percent'];
        $destinationPath = public_path('symbol-logo');
        $file->move($destinationPath,$fileName);

        $symbol = new Symbol();
        $symbol->logo = $fileName;
        $symbol->symbol_name = $symbolName;
        $symbol->symbol_description = $symbolDescription;
        $symbol->bid = $bid;
        $symbol->quantity1 = $quantity1;
        $symbol->ask = $ask;
        $symbol->quantity2 = $quantity2;
        $symbol->cost = $cost;
        $symbol->strike = $strike;
        $symbol->last_trade = $lastTrade;
        $symbol->percent = $percent;
        $symbol->save();

        return redirect()->route('symbol.index');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'logo' => ['required', 'mimes:jpeg,png,jpg', 'max:10000'],
            'symbol_name' => ['required', 'string', 'max:255'],
            'symbol_description' => ['required', 'string', 'max:255'],
            'bid' => ['required', 'between:0,99.99'],
            'quantity1' => ['required', 'integer'],
            'ask' => ['required', 'between:0,99.99'],
            'quantity2' => ['required', 'integer'],
            'cost' => ['required', 'between:0,99.99'],
            'strike' => ['required', 'between:0,99.99'],
            'last_trade' => ['required', 'between:0,99.99'],
            'percent' => ['required', 'between:0,99.99'],
        ]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Symbol';
        $page_description = 'This is Edit Symbol page';
        $symbol = Symbol::where('id', $id)->first();

        return view('admin.pages.symbol.symbol-edit', compact('page_title', 'page_description', 'symbol'));
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
        if ($request['logo'] == null){
            $this->validator1($request->all())->validate();
            $fileName = $request['logo_name'];
        }
        else{
            $this->validator($request->all())->validate();
            $file = $request->file('logo');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path('symbol-logo');
            $file->move($destinationPath,$fileName);
        }

        $symbolName = $request['symbol_name'];
        $symbolDescription = $request['symbol_description'];
        $bid = $request['bid'];
        $quantity1 = $request['quantity1'];
        $ask = $request['ask'];
        $quantity2 = $request['quantity2'];
        $cost = $request['cost'];
        $strike = $request['strike'];
        $lastTrade = $request['last_trade'];
        $percent = $request['percent'];

        $symbol = Symbol::where('id', $id)->first();
        $symbol->logo = $fileName;
        $symbol->symbol_name = $symbolName;
        $symbol->symbol_description = $symbolDescription;
        $symbol->bid = $bid;
        $symbol->quantity1 = $quantity1;
        $symbol->ask = $ask;
        $symbol->quantity2 = $quantity2;
        $symbol->cost = $cost;
        $symbol->strike = $strike;
        $symbol->last_trade = $lastTrade;
        $symbol->percent = $percent;
        $symbol->update();

        return redirect()->route('symbol.index');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator1(array $data)
    {
        return Validator::make($data, [
            'logo_name' => ['required', 'string', 'max:255'],
            'symbol_name' => ['required', 'string', 'max:255'],
            'symbol_description' => ['required', 'string', 'max:255'],
            'bid' => ['required', 'between:0,99.99'],
            'quantity1' => ['required', 'integer'],
            'ask' => ['required', 'between:0,99.99'],
            'quantity2' => ['required', 'integer'],
            'cost' => ['required', 'between:0,99.99'],
            'strike' => ['required', 'between:0,99.99'],
            'last_trade' => ['required', 'between:0,99.99'],
            'percent' => ['required', 'between:0,99.99'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $symbol = Symbol::where('id', $id)->first();
        if ($symbol){
            $symbol->delete();
        }

        return redirect()->route('symbol.index');
    }
}
