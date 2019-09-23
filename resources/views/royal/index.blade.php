@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Dary Product</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                   
@endif
  
                            
                        </div> 
                        <div class="site-section" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
         
        </div>
                        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="images/milk.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">Milk</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                </div>
                <p class="mb-4">Drink our milk produck for your better day toway life. </p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="images/curd.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">Curd</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist active"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                </div>
                <p class="mb-4">Our product is one of the best product of Nepal.</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="images/ghee.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">Ghee</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                </div>
                <p class="mb-4">100% Pure ghee.</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

                    
@endsection