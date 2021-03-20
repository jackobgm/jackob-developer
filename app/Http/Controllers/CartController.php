<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Tld;
use App\Repositories\CartRepository;
use App\Http\Controllers\AppBaseController;
use Darryldecode\Cart\Cart;
use App\Models\Website;
use FontLib\Table\Type\name;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;
use Flash;
use Laracasts\Flash\Flash as FlashFlash;
use mysql_xdevapi\Table;
use Response;
use Symfony\Component\Routing\Route;

class CartController extends AppBaseController
{


    public function add($websiteTop){

        $webs = Website::find($websiteTop);
        //return view('carts.show')->with('webs', $webs);



        \DB::table('carts')->insert([
           'user_id' => '1',
           'website_id' => $webs->id,
           'quantity' => '1',
        ]);

        //return dd($webs->id);
        return back()->with('success',"$webs->name Successfully added to cart!");
    }

    public function cart($id){
        //$cont = count($id);

        $cant = \DB::table('carts')->first();
        //$canti = \DB::table('carts')->select('website_id')->get();

        //return dd($id);

        if ($id > 0 ) {

            //$datos = Website::where('id', $canti);
            //return dd($datos);
            return view('carts.show');
        }
        else {
            return back();
        }


    }

    public function removeit($id) {
        if ($id > 0) {
            //$producto = Producto::where('id', $request->id)->firstOrFail();
            \DB::table('carts')->where('website_id', $id)->delete();
            //return dd($removeit);
            $verify = \DB::table('carts')->count();
            //return dd($verify);
            if ($verify > 0) {
                //return dd('1');
                return back()->with('success', "Producto eliminado con éxito de su carrito.");

            }
            else{
                return view('welcome');
            }
        }

    }

    public function clear(){

        \DB::table('carts')->delete();

        return back()->with('success',"The shopping cart has successfully been added to the shopping cart!");
    }


    /*
    public function orderDetail(){
        if(count(\Session::get('cart')) <= 0) return redirect()->route('welcome.index');
        $cart = \Session::get('cart');
        $total = $this->total();

        return view('cart.order-detail')
            ->with('cart', $cart)
            ->with('total', $total);
    }


    private function total()
    {
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->price * $item->quantity;
        }
        return $total;
    }

    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        Cart::add(array(
            'id' => $request->id?$request->id:'1', // inique row ID
            'name' => $request->name?$request->name:'example',
            'price' =>$request->price?$request->price:20.20,
            'quantity' => $request->quantity?$request->quantity:1,
            'attributes' => array(
                'color' => $request->color?$request->color:'green',
                'size' => $request->size?$request->size:'Big',
            )
        ));
        return back();
    }

    public function destroy($cart)
    {
        Cart::remove($cart);
        return back();
    }
    */
}
