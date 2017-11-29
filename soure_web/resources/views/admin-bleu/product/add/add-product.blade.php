<script type="text/javascript">
            
             function readURL(input, thumbimage) {
                if (input.files[1] && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#thumbimage").attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#thumbimage").show();
                } else {
                    $("#thumbimage").attr('src', input.value);
                    $("#thumbimage").show();
                }
                $('.filename').text($("#uploadfile").val());
                $('.Choicefile').css('background', '#C4C4C4');
                $('.Choicefile').css('cursor', 'default');
                $(".Choicefile").unbind('click');
                $(".removeimg").show();
            }
            $(document).ready(function () {
                $(".Choicefile").bind('click', function () {
                    $("#uploadfile").click();

                });
                $(".removeimg").click(function () {
                    $("#thumbimage").attr('src', '').hide();
                    $("#myfileupload").html('<input type="file" id="uploadfile" onchange="readURL(this);" />');
                    $(".removeimg").hide();
                    $(".Choicefile").bind('click', function () {
                        $("#uploadfile").click();
                    });
                    $('.Choicefile').css('background', '#0877D8');
                    $('.Choicefile').css('cursor', 'pointer');
                    $(".filename").text("");
                });
            })
        </script>
        <style type="text/css">
            .Choicefile
            {
                display:block;
                background:#0877D8;
                border:1px solid #fff;
                color:#fff;
                width:100px;
                text-align:center;
                text-decoration:none;
                cursor:pointer;
                padding:5px 0px;
            }
            #uploadfile,.removeimg
            {
                display:none;
            }
            #thumbbox
            {
                position:relative;
                width:100px;
            }
            .removeimg
            {
                background: url("http://png-3.findicons.com/files/icons/2181/34al_volume_3_2_se/24/001_05.png") repeat scroll 0 0 transparent;

                height: 24px;
                position: absolute;
                right: 5px;
                top: 5px;
                width: 24px;

            }
        </style>

        <script>
                    (function (i, s, o, g, r, a, m) {
                        i['GoogleAnalyticsObject'] = r;
                        i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                        a = s.createElement(o),
                                m = s.getElementsByTagName(o)[0];
                        a.async = 1;
                        a.src = g;
                        m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-42755476-1', 'bootstrap-tagsinput.github.io');
            ga('send', 'pageview');
        </script>

        <style>
            #set {
                font-weight: bold;
                font-size: 16px;
                background: #575757;
                color: white;
                padding: 0 5px;
                border-radius: 100% ;
            }
        </style>
    </head>
    <body>
        <div class="admin">
            <div class="head_admin">

            </div>
            <div class="content_admin">
                <div class="col2">
                  @include('admin-bleu.soure_module.sidebar-admin')
                    <div style="clear: both;"></div>
                </div>
                <div class="col10">
                    <div class="contentfull">
                        <div class="content">
                            <h1 id="h1">
                                Thêm Sản Phẩm
                            </h1>
                            
                            
 {!! Form::open(['route'=>'postproduct','method'=>'POST','files'=>true, 'enctype' => 'multipart/form-data','id' => 'addproduct']) !!}

                            <div class="content-item">
                                @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    <ul> 
                                    @foreach($errors->all() as $error)
                                     <li>{!! $error !!}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                                <table class="table table-bordered">
                                    
                                    <tr>
                                        <th>{!! Form::label('Chọn Category Sản Phẩm') !!}</th>
                                        
                                        <td> <select name="category_slug">
                                                  <option value="0">Không Chọn</option>
                                                  @foreach ($datacategory as $data)
                                                <option value="{{$data->categories_slug}}">{{$data->categories_name}}</option>
                                                  @endforeach
                                            </select>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <th>{!! Form::label('Nhập Tên Sản Phẩm') !!}</th>
                                        <td> {!! Form::textarea('product_name',null,['size' => '50x4']) !!}</td>
                                    </tr>
                                    <tr>
                                        <th>{!! Form::label('Nhập Giá Sản Phẩm') !!}</th>
                                        <td> {!! Form::textarea('product_price',null,['size' => '50x4']) !!}</td>
                                    </tr>
                                    <tr>
                                        <th>{!! Form::label('Nhập material Sản Phẩm') !!}</th>
                                        <td> {!! Form::textarea('product_material',null,['size' => '50x4']) !!}</td>
                                    </tr>
                                    <tr>
                                        <th>{!! Form::label('Nhập size Sản Phẩm') !!}</th>
                                        <td> {!! Form::textarea('product_size',null,['size' => '50x4']) !!}</td>
                                    </tr>
                                 
                                    
                                    
                                    <tr>
                                        <th>{!! Form::label('Chọn Image') !!}</th>
                                        <td>{!! Form::file('myfile') !!}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th>{!! Form::label('Trạng Thái Hàng ') !!}</th>
                                        <td><input id='chekone' class="field"  name="check" checked="checked" type="checkbox" value="1" onclick="checkbox();"> Còn Hàng || <input id='chektwo' class="field" name="check" type="checkbox" value="0" onclick="checkbox2();">Hết Hàng </td>
                                   
                                   </tr>
                                </table>
                                
                                <div>
                                    <h1 style ="margin-bottom: 20px;"> Detailed information</h1>
                                    <table class="table table-bordered">
                                    <tr>
                                        <th>{!! Form::label('Nhập sizedetail Sản Phẩm') !!}</th>
                                        <td> {!! Form::textarea('product_sizedetail',null,['size' => '50x4']) !!}</td>
                                    </tr>
                                    <tr>
                                        <th>{!! Form::label('Nhập maker Sản Phẩm') !!}</th>
                                        <td> {!! Form::textarea('product_maker',null,['size' => '50x4']) !!}</td>
                                    </tr>
                                    <tr>
                                        <th>{!! Form::label('Nhập origin Sản Phẩm') !!}</th>
                                        <td> {!! Form::textarea('product_origin',null,['size' => '50x4']) !!}</td>
                                    </tr>
                                    <tr>
                                        <th>{!! Form::label('Nhập handing Sản Phẩm') !!}</th>
                                        <td> {!! Form::textarea('product_handing',null,['size' => '50x4']) !!}</td>
                                    </tr>
                                    <tr>
                                        <th>{!! Form::label('Nhập manufacturing Sản Phẩm') !!}</th>
                                        <td> {!! Form::textarea('product_manufacturing',null,['size' => '50x4']) !!}</td>
                                    </tr>
                                    <tr>
                                        <th>{!! Form::label('Nhập srandarbs Sản Phẩm') !!}</th>
                                        <td> {!! Form::textarea('product_srandarbs','1. Please check the size, materials and care instructions of the product.<br>
2. If there are any issues with your order or have any issues concerning compensation damages please email help@peaceminusone.com.<br>
3. If there are any issues with your order or product leading to exchanges, returns, refunds, and/or compensation damages it will be handled per South Korean compliances and regulations.',['size' => '50x5']) !!}</td>
                                    </tr>
                                    <tr>
                                        <th>{!! Form::label('Nhập derector Sản Phẩm') !!}</th>
                                        <td> {!! Form::textarea('product_derector','Gee Eundo / 02-549-5275',['size' => '50x4']) !!}</td>
                                    </tr>
                                 
                                     </table>
                                </div>
                                <div class="list-image">
                                    @for($i = 1 ; $i <=3; $i++)
                                    <tr>
                                        <th>{!! Form::label('Chọn Image Detail') !!}</th>
                                        <td><input name="imgaedetail[]" multiple type="file"></td>
                                    </tr>
                                    @endfor
                                </div>
                                {!! Form::submit('Thêm', ['style' => 'float:right;width:20%;color:black']) !!}

                                <div style="clear: both;"></div>
                            </div>
                                
 {!! Form::close() !!}                              
                                
                                
                        </div>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        
        <script>
                function checkbox(){
                     document.getElementById("chektwo").checked = false;
                }
                function checkbox2(){
                    document.getElementById("chekone").checked = false;
                }
        </script>
        
        
        <script>
             $("#addproduct").validate({
                                                                            rules:{
                                                                                product_name:{
                                                                                    required:true
                                                                                    
                                                                                },
                                                                                product_price:{
                                                                                    required:true
                                                                                    
                                                                                },
                                                                                product_material:{
                                                                                    required:true
                                                                                   
                                                                                },
                                                                                product_size:{
                                                                                    required:true
                                                                                    
                                                                                },
                                                                                myfile:{
                                                                                    required:true
                                                                                    
                                                                                },
                                                                                product_sizedetail:{
                                                                                    required:true
                                                                                    
                                                                                },
                                                                                product_maker:{
                                                                                    required:true
                                                                                    
                                                                                },product_origin:{
                                                                                    required:true
                                                                                    
                                                                                },
                                                                                product_handing:{
                                                                                    required:true
                                                                                    
                                                                                },product_manufacturing:{
                                                                                    required:true
                                                                                    
                                                                                },
                                                                                product_srandarbs:{
                                                                                    required:true
                                                                                    
                                                                                },
                                                                                product_derector:{
                                                                                    required:true
                                                                                    
                                                                                }
                                                                                
                                                                               
                                                                            },
                                                                            messages:{
                                                                               product_name:{
                                                                                    required:"Vui Lòng Nhập Tên Sản Phẩm"
                                                                                    
                                                                                },
                                                                                product_price:{
                                                                                    required:"Vui Lòng Nhập Giá Sản Phẩm"
                                                                                    
                                                                                },
                                                                                product_material:{
                                                                                    required:"Vui Lòng Nhập Material Sản Phẩm"
                                                                                    
                                                                                },
                                                                                product_size:{
                                                                                    required:"Vui Lòng Nhập Size Sản Phẩm"
                                                                                    
                                                                                },
                                                                                myfile:{
                                                                                    required:"Vui Lòng Chọn Hình Ảnh"
                                                                                    
                                                                                },
                                                                                product_sizedetail:{
                                                                                    required:"Vui Lòng Nhập Sizedetail Sản Phẩm"
                                                                                    
                                                                                },
                                                                                product_maker:{
                                                                                    required:"Vui Lòng Nhập Maker Sản Phẩm"
                                                                                    
                                                                                },product_origin:{
                                                                                    required:"Vui Lòng Nhập Origin Sản Phẩm"
                                                                                    
                                                                                },
                                                                                product_handing:{
                                                                                    required:"Vui Lòng Nhập Handing Sản Phẩm"
                                                                                    
                                                                                },product_manufacturing:{
                                                                                    required:"Vui Lòng Nhập Manufacturing Sản Phẩm"
                                                                                    
                                                                                },
                                                                                product_srandarbs:{
                                                                                    required:"Vui Lòng Nhập Srandarbs Sản Phẩm"
                                                                                    
                                                                                },
                                                                                product_derector:{
                                                                                    required:"Vui Lòng Nhập Derector Sản Phẩm"
                                                                                   
                                                                                }
                                                                            }
                                                                        });
        </script>
    </body>
</html>
