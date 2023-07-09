@extends('layout/main')

@section('container')
<body>
    <div class="column.center">

        <!-- @php
            $gadget = DB::table('gadget')->get();
        @endphp -->

        @foreach($gadget as $key => $item )        
        <div id="container">	

            <div class="product-details">

            <h1>{{$item->nama_barang}}</h1>

                <br>
                </br>
                
                <p class="information">{{$item->detail_barang}}</p>
      
            <!-- 		Control -->
            <div class="control">
                
            <!-- Start Button buying -->
                <button class="btn">
            <!-- 		the Price -->
                 <span class="price">Rp. {{$item->harga}}</span>
            <!-- 		shopping cart icon-->
               <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
            <!-- 		Buy Now / ADD to Cart-->
               <span class="buy">Buy Now</span>
             </button>

            </div>        
            </div>
                
            <div class="product-image">
                
                <img src="{{$item->gambar}}" alt="Omar Dsoky">
                
            <!-- 	product Information-->
            </div>
            <!--  End product image  -->
            
            
            </div>
        @endforeach
    
    
      </div>
</body>
@endsection