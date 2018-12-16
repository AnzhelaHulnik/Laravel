<?php

namespace App\Http\Controllers;

use App\Shop;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $request->user()->authorizeRoles(['employee', 'manager']);
         $shops = Shop::all();

                return view('shops.index', compact('shops')
    );


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Shop::create($request->all());
        return redirect(route('shops.index'))
            ->with('success', 'Продукт успешно создан');
    }

        /* dd($request->all());
         $shop = new Shop();
         $shop->name=$request->input('name');
    }
         $shop->save;*/

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shops
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
         /* $shop=Shop::find('$id');
          $shop=Shop::select(['id','img','name','city','address','email','telephone','URL'])->where('id',$id)->first();
       */
          /* dump($shop);
        dump($id);*/
       return view('shops.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop $shops
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('shops.edit', compact($shop));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shops
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        Shop::find($shop->id)->update($request->all());

        // редирект на список продуктов
        return redirect(route('shops.index'))
            ->with('updated', 'Продукт успешно обновлен');
        /*Shop::update($request->all());
        return redirect(route('shops.index'));*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop $shops
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Shop $shop)
    {
        $request->user()->authorizeRoles('manager');
        Shop::find($shop->id)->delete();

        // редирект на список продуктов
        return redirect(route('shops.index'));
    }
}
