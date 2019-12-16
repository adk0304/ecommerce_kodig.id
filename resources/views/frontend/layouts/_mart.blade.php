<div class="c-cart-menu">
        <div class="c-cart-menu-title">
            <p class="c-cart-menu-float-l c-font-sbold">{{ count((array)session('cart')) }} item(s)</p>
            <?php $total = 0 ?>
                        
            @if(session('cart')!==null)
            @foreach(session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['quantity'] ?>
            @endforeach
            @endif

            <p class="c-cart-menu-float-r c-theme-font c-font-sbold">$ {{ $total }}</p>
        </div>
        <ul class="c-cart-menu-items">
        @if(session('cart'))
        @foreach(session('cart') as $id => $details)
            <li>
             
                
                <div class="c-cart-menu-content">
                    <p>{{ $details['quantity'] }} x
                        <span class="c-item-price c-theme-font">$ {{ $details['price'] }}</span>
                    </p>
                    <a class="c-item-name c-font-sbold">{{ $details['name'] }}</a>
                </div>
            </li>

            @endforeach
        @endif
        </ul>
        <div class="c-cart-menu-footer">
        <a href="{{route('viewC')}}" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
        @if(Auth::check())
                        <a href="/checkout" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">Checkout</a>
                        @else 
                        
                        <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">Checkout</a>      
                        @endif
        </div>
    </div>