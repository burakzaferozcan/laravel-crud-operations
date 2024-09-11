@extends("layout")


@section("content")
    <div class="container">
        <h1>ÜRÜN EKLE</h1>
        <form action="{{route('product.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">ÜRÜN ADI</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">ÜRÜN AÇIKLAMASI</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="mb-3">
                <label class="form-label">ÜRÜN FİYATI</label>
                <input type="text" class="form-control" name="price">
            </div>
            <input type="submit" class="btn btn-info text-white" value="GÖNDER">
        </form>
    </div>
@endsection

