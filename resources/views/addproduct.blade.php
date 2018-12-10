@extends('layouts.app')
@section('content')
<h1>Оформление заказа</h1>
<h3>{{$product->name}}</h3>
<br>
@foreach($users as $user)
@if(Auth::id() == $user->id)
<form method="post" action="add_product">

{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleFormControlInput1">Email </label>
    <input type="email" value="{{$user->email}}"  class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Количество товара</label>
    <input type="text" id="exampleFormControlSelect1" class="form-control" name="quantity">
  </div>
  <input type="hidden" name="product_name" value="{{$product->name}}">
  <div class="form-group">
    <label for="exampleFormControlSelect1">ФИО</label>
    <input type="text" id="exampleFormControlSelect1" class="form-control" value="{{$user->name}}" name="user_name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Цена</label>
    <input type="text" id="exampleFormControlSelect1" class="form-control" value="{{$product->price}}" name="price">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Дата</label>
    <input type="date" id="exampleFormControlSelect1" class="form-control" name="date">
  </div>
  <button type="submit" class="btn btn-danger">Оформить заказ</button>
</form>
@endif
@endforeach
@endsection