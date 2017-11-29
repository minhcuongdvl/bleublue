<div class="detail-bleu">
    <div id="bg"><img width="100%" height="100%" src="{{ asset('public/image/background.png')}}" /></div>  
  <div class="container">
      <div class="row">
          <div class="col-md-1">
              
          </div>
          <div class="col-md-10">
              <div class="row">
        <h1 class="text-center">MAISON BLEUBLUE</h1>
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <div class="tabbable tabs-left">
           
            <div class="tab-content col-md-9 col-lg-9 col-sm-8 col-xs-8">
                @foreach($cateimg as $img)
                <div class="tab-pane" id="{{ $img->id }}">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="profile-image">
                                
                                <img src="{{ asset('public/bleu-blue/image-detail/')}}/{{ $img->images }}"  >
                            </div>
                        </div>
                    </div>
                </div>
               
                 @endforeach
            </div>
        
             <ul class="nav nav-tabs col-md-3 col-lg-3 col-sm-4 col-xs-4">
                 @foreach($cateimg as $img)
                <li class="">
                    <a href="#{{ $img->id }}" data-toggle="tab" aria-expanded="false">
                        <img src="{{ asset('public/bleu-blue/image-detail/')}}/{{ $img->images }}" >
                    </a>
                </li>
                 @endforeach
               
               
            </ul>
        </div>
        </div>
            <div class="col-md-1"></div>

    </div>
       @foreach($dataproduct as $product)
      <div class="row">
          <div class="parameter">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
             
              <div class="name-product">
                        <p>{!! $product->product_name !!}</p>
              </div>
              <div class="dec-product">
                        <span>{!! $product->product_price !!} VND</span>
                        <p>*{!! $product->product_material !!}</p>
                        <p>*{!! $product->product_size !!}</p>

              </div>
          </div>
        <div class="col-sm-1"></div>
      </div>
          </div>
      
      <div class="row">
      <div class="details-poduct">
         <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
      <h4 class="panel-title">
        
        Detailed information
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse ">
        <div class="panel-body">
           <table id="product-table" style="border-collapse: collapse; width: 100%;">
                  <tbody><tr>
                    <td>SIZE</td>
                    <td>{!! $product->product_sizedetail !!}</td>
                  </tr>
                  <tr>
                    <td>MAKER/IMPORTER</td>
                    <td>{!! $product->product_maker !!}</td>
                  </tr>
                  <tr>
                    <td>COUNTRY OF MANUFACTURE</td>
                    <td>{!! $product->product_origin !!}</td>
                  </tr>
                  <tr>
                    <td>HANDLING CARE INSTRUCTIONS</td>
                    <td>{!! $product->product_handing !!}</td>
                  </tr>
                  <tr>
                    <td>MANUFACTURING MONTH AND YEAR</td>
                    <td>{!! $product->product_manufacturing !!}</td>
                  </tr>
                  
                  
                  <tr>
                    <td>QA STANDARDS</td>
                    <td>
                      {!! $product->product_srandarbs !!}
                    </td>
                  </tr>
                  <tr>
                    <td>AS DIRECTOR AND PHONE</td>
                    <td>{!! $product->product_derector !!}</td>
                  </tr>

            </tbody></table>
            
        </div>
    </div>
  </div>
             @endforeach
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
      <h4 class="panel-title">
       
        Shipping/ Payment Information
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
             <table id="shipping-regulation-table" style="border-collapse: collapse;" >
                  <tbody><tr>
                    <th colspan="3">Shipping / Payment Information</th>
                  </tr>
                  <tr>
                    <td rowspan="5">Shipping Guide</td>
                    <td>Shipping Company</td>
                    <td>- Korchina Logistics</td>
                  </tr>
                  <tr>
                    <td>Courier Service</td>
                    <td>- Domestic : Korea Post<br>- International : TNT<br> - China, Hongkong, Taiwan : SF Express</td>
                  </tr>
                  <tr>
                    <td>Shipping Cost</td>
                    <td>- Domestic : Buyer (Varies by location)<br>- International : Buyer (Varies by country)</td>
                  </tr>
                  <tr>
                    <td>Shipping Information</td>
                    <td>- Delivery Date : Order will be shipped within 3 business days of payment</td>
                  </tr>
                  <tr>
                    <td>Tracking</td>
                    <td>
                      - Domestic : Korea Post <a href="https://service.epost.go.kr/iservice/usr/trace/usrtrc001k01.jsp">https://service.epost.go.kr/iservice/usr/trace/usrtrc001k01.jsp</a><br>
                      - International : TNT <a href="https://www.tnt.com/express/ko_kr/site/home/applications/tracking.html?respLang=ko&amp;respCountry=kr">https://www.tnt.com/express/ko_kr/site/home/applications/tracking.html?respLang=ko&amp;respCountry=kr</a><br>
                - China, Hongkong, Taiwan : SF Express <a href="http://www.sf-express.com/kr/ko/">http://www.sf-express.com/kr/ko/</a>
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="3">Exchange / Cancellation / Refund Guide</td>
                    <td>Exchange / Return Policy</td>
                    <td>
                      - Returns and exchanges will not be accepted on opened or worn items. However, returns and exchanges will be accepted on packages opened for the purpose of product inspection.<br>
                      - Returns and exchanges will only be accepted within 7 days of the buyer’s receipt of the product.<br>
                      - If the product is damaged by the customer<br>
                      - If the product is used by the customer<br>
                      - <a href="" onclick="refundEmailAlert()">Refund</a><br>
                      <!-- - Returns will be processed after inspection of the products.<br/>-->
                      <!-- - Limited and sold out products will not be exchanged. <br/>-->
                    </td>
                  </tr>
                  <tr>
                    <td>Exchange / Return Terms</td>
                    <td>
                      - For exchanges and returns without cause return shipping costs will be paid by the buyer.<br>
                      - Buyer must procure courier service and return directly to Peaceminusone.<br>
                      - If there is an issue with the product, exchanges and returns will be handled after inspection of the returned goods.<br>
                    </td>
                  </tr>
                  <tr>
                    <td>Cancellation Policy</td>
                    <td>
                      - If a sold out product is purchased due to system error the full purchase price will be refunded within 3 business days.<br>
                      - Any expenses incurred on cancellations of orders without reason will be paid by the buyer.<br>
                    </td>
                  </tr>
                  <tr>
                    <td>Customer Service</td>
                    <td>Contact Information </td>
                    <td>
                      - Product Customer Service :  help@peaceminusone.com <br>
                      - Shipping Customer Service : Korchina Logistics (Phone Number 070-8277-6742)<br>
                    </td>
                  </tr>
                  <tr>
                    <td>Child Rights Protection Policy</td>
                    <td colspan="2">If an underage customer makes an order (contract) without the consent of their legal guardian, the order (contract) may be canceled by the customer, or legal guardian.</td>
                  </tr>
                </tbody></table>
        </div>
    </div>
  </div>
  
</div>
      </div>
      </div>
          </div>
          <div class="col-md-1">
              
          </div>
    
</div>
</div>
</div>
