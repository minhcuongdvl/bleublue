    <div class="sideAdmin-left">
                        <a href="#">
                           
                            <img src="{{ asset('public/image/logo4.png') }}" alt=""/>
                        </a>
                        <div class="infouser">
                            <div class="p">
                                <i class="fa fa-user"></i>
                                Admin 
                                <a href="#"><i class="fa fa-reply-all"></i></a>
                                <div style="clear: both;"></div>
                            </div>

                        </div>
                        <nav id="nav">
                            <p id="res">
                                Danh mục quản lí
                                <span class="fa fa-bars"></span>
                            <div style="clear:both;"></div>
                            </p>
                            <ul>
                                <li><a href="{!! URL::route('listcate') !!}">Category Sản phẩm</a></li>
                                <li><a href="{!! URL::route('listproduct') !!}">Sản phẩm</a></li>

                            </ul>
                        </nav>

                    </div>