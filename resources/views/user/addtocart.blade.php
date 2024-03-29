<!DOCTYPE html>
<html lang="en">

@include('user/hedarfile')
<body>
  <!-- Topbar Start -->
  @include('user/hedar')
                          
  @include('user/navbar2')

  <div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Image</th>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    {{-- @if($cart->count() > 0) --}}
                    <tr>
                           @foreach ($products as $product)
                        <td class="align-middle"><img src="{{ url('public/Image/'.$product->product_image)}}" alt="" style="width: 50px;"></td> <td class="align-middle">{{$product->product_name}}</td>
                        <td class="align-middle">{{$product->product_price}}</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus" >
                                    <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">{{$product->product_price}}</td>
                        <td class="align-middle">
                            <a href="/removecartlist/{{$product->cart_id}}" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach 
                    {{-- @else 
                        <h4> There are no product in your cart</h4> --}}
                    {{-- @endif --}}
                   
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-5" action="">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">₹ 3301800</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">Free</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">₹ 3301800</h5>
                    </div>
                    <a href="chekout" type="button" class="btn btn-block btn-primary my-3 py-3" >Proceed To checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Start -->
@include('user/footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

@include('user/footerfile')

</body>

</html>