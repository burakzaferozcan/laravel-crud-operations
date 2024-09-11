@extends("layout")

@section("content")
    <br>
    <a href="{{route('product.create')}}" class="btn btn-success" type="button">ÜRÜN EKLE</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ÜRÜN ADI</th>
            <th scope="col">AÇIKLAMA</th>
            <th scope="col">FİYAT</th>
            <th scope="col">AYRINTI GÖSTER</th>
            <th scope="col">DÜZENLE</th>
            <th scope="col">SİL</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td><a href="{{route('product.show',$product->id)}}" class="btn btn-info">GÖSTER</a></td>
                <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-warning">GÜNCELLE</a></td>
                <td><a href="" class="btn btn-danger">SİL</a></td>
            </tr>

        @endforeach

        </tbody>
    </table>
@endsection

