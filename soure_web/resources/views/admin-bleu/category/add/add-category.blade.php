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
                                Thêm Category
                            </h1>
                            
                            
 {!! Form::open(['route'=>'postcate','method'=>'POST','files'=>true, 'enctype' => 'multipart/form-data']) !!}

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
                                        <th>{!! Form::label('Nhập  Tên Category') !!}</th>
                                        <td> {!! Form::text('category_name') !!}</td>
                                    </tr>
                                    
                                   

                                </table>
                                
                                {!! Form::submit('Thêm', ['style' => 'float:right;']) !!}

                                <div style="clear: both;"></div>
                            </div>
                                
 {!! Form::close() !!}                              
                                
                                
                        </div>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>


    </body>
</html>
