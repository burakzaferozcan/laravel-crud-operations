@extends("layout")


@section("content")
    <div class="container">
        <h1>ÜRÜN Güncelle</h1>
        <form action="{{route('product.update',$product->id)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label class="form-label">ÜRÜN ADI</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
            </div>
            <div class="mb-3">
                <label class="form-label">ÜRÜN AÇIKLAMASI</label>
                <input type="text" class="form-control" name="description" value="{{$product->description}}">
            </div>
            <div class="mb-3">
                <label class="form-label">ÜRÜN FİYATI</label>
                <input type="text" class="form-control" name="price" value="{{$product->price}}">
            </div>
            <input type="submit" class="btn btn-info text-white" value="GÖNDER">
        </form>
    </div>
@endsection

