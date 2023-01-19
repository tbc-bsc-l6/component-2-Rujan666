<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap"
    rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


<x-app-layout>
@include('header')
    <div class="display-4 text-center">
        <h1>Products</h1>
    </div>
    @if(auth()->check() && auth()->user()->is_admin == 1)
        <div class="container">
            <a href="{{url('addproduct')}}" class="btn btn-danger mt-2 p-2 text-right">Add Product</a>
        </div>
    @endif
    <div class="align-items-center justify-content-center mt-5 pt-5">
        <div class="product-center container">
            
            @foreach($products as $product)
                <div class="row">
                    <div class="col-12">
                    <div class="product">
                        <div class="product-header">
                            <img class="w-100" src="/img/{{$product->image}}" alt="" class="product-image" />
                    @if(auth()->check() && auth()->user()->is_admin == 1)
                                <ul class="icons">
                                    <a href="{{url('updateForm',$product->id)}}"><li><i class="fa fa-pencil-square-o"></i></li></a>
                                    <form action="{{url('delete',$product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                                <li><button><i class="fa fa-trash"></i></button></li>
                            </form>
                            <!-- <li><i class="fa fa-trash"></i></li> -->
                        </ul>
                    @endif
                    </div>
                    <div class="product-footer">
                    <a href="https://www.playstation.com/en-us/god-of-war/">
                        <h4 class="product-title">{{$product->title}}</h4>
                    </a>
                    <h5 class="author">By: {{$product->first_name}} {{$product->last_name}}</h5>
                    <p class="type">{{$product->product_type}}</p>
                    <h5 class="price">${{$product->price}}</h5>
                    </div>
                </div>
                </div>
                </div>
            @endforeach
            <br><br>
        </div>
    </div>
    {{$products->links()}}
</x-app-layout>

