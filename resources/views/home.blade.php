@extends('layouts.app')

@section('content')

<h2>Здравствуйте, приветсвуем вас в нашем магазине</h2>

<!-- Section: Blog v.3 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Товары</h2>
  <!-- Section description -->
  <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Вы можете заказать любой из присутствующих товаров</p>

@foreach($products as $product)
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="{{$product->img}}" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>{{$product->name}}</strong></h3>
      <!-- Excerpt -->
      <p> <a class="font-weight-bold"> Цена товара: {{$product->price}}руб</a></p>
      <p class="dark-grey-text">{{$product->text}}</p>
      @if($product->delivery == 1)
      <p class="dark-grey-text">Способ доставки: {{$product->delivery_method}}</p>
      <p class="dark-grey-text">Цена доставки: {{$product->price_delivery}}</p>
    
      @else
      <p class="dark-grey-text">Доставка отсутсвует</p>
      @endif
      <!-- Post data -->
      
      <!-- Read more button -->
      <a href="{{route('add.show',['id'=>$product->id])}}" class="btn btn-primary btn-md">Заказать</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">
 @endforeach 


</section>
<!-- Section: Blog v.3 -->

@endsection
