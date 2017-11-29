<div class="list-bleu">
    <div id="bg"><img width="100%" height="100%" src="{{ asset('public/image/background.png')}}" /></div>  
    <div class="container">
        <div class="row">
            <div class='head'>
            <div class="col-sm-6 col-xs-2">
                <div class='logo'>
                    <p  class="button w3-black"> MENU</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class='login-acnout'>
                    <a href="#">LOGIN / ACNOUT</a>
                </div>
            </div>
                </div>
        </div>
        
        <div class="row">
            <div class="col-sm-2 ">
                <div class="list-menu">
                <ul>
                    @foreach($datacat as $cat)
                    <li><a href="{!! URL::route('list-productcat',$cat->categories_slug) !!}">{{$cat->categories_name}}</a></li>
                   
                    @endforeach

                    
                    
                                                            
                </ul>
              </div>

            </div>
            <div class="col-sm-8">
                <div class="list">
                <div class="row">
                    <div class="title">
                        <p>MAISON BLEUBLUE</p>
                    </div>
                     @foreach($dataproduct as $product)
                     @if(!empty($product))
                    <div class="col-md-4 col-sm-6">
                           <div class="list-product">
                               <a href="{!! URL::route('detail-product',$product->id) !!}">
                                <img src="{{ asset('public/bleu-blue/image/')}}/{{ $product->product_image }}" alt=""/>
                                <figure class="bginfo">
                            <span class="name">{{ $product->product_name }}</span>
                            <strong>{{ $product->product_price }} VNĐ</strong>
                                
                        </figure>
                               </a>
                            </div>
                        
                     </div>
                    @endif
                    
                    @endforeach
                    
                   
                </div>
                </div>
            </div>
            
            <div class="col-sm-2">
                
            </div>
            
        </div>
    </div>
</div>