@extends('layouts.app')

@section('content')
<h1>Список заказов</h1>
@foreach($orders as $order)
<h2>{{$order->product_name}}</h2>
<h3>{{$order->user_name}}</h3>
<p>Дата: {{$order->date}}</p>
<p>Количество: {{$order->quantity}}</p>
<p>Цена: {{$order->price}}</p>

<br>
<br>
<br>
<br>
@endforeach
@endsection
