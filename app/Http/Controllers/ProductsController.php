<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repository\ProductsRepository;
use App\Repository\UsersRepository;
use App\Repository\Repository;

class ProductsController extends SiteController
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(ProductsRepository $p_rep, UsersRepository $u_rep){

        $this->p_rep=$p_rep;
        $this->u_rep=$u_rep; 
    }

    public function getProducts(){
        $products= $this->p_rep->get('*');

        return $products;
    }

     public function getUsers(){
        $users= $this->u_rep->get('*');

        return $users;
    }

    public function index()
    {
        //
        $products = $this->getProducts();
        //dd($products);
        return view('home')->with('products', $products);
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
        //
        $product = $this->getproduct_first($id);

        $users = $this->getUsers();
        //dd($users);
        return view('addproduct')->with(array('product'=>$product, 'users'=>$users));
    }

    public function getproduct_first($id){

        $news = $this->p_rep->one($id);

        return $news;
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
