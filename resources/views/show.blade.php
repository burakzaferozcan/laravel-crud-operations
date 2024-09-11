@extends("layout")


@section("content")
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <span  class="card-subtitle">{{$product->price}}TL</span>
            <a href="{{route('product.update',$product->id)}}" class="card-link">Düzenle</a>
        </div>
    </div>
@endsection

