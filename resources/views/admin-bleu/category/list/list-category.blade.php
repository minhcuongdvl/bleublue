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
                                Quản lí Category product
                                <a id="a1" href="./addcategory" class="fa fa-plus"> Thêm</a>
                                <div style="clear: both;"></div>
                            </h1>
                            @if(Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!! Session::get('flash_message') !!}
                            </div>
                            @endif
                            <div class="content-item">
                                <table id="myTable" class="table table-striped " cellspacing="0" width="100%">
                                    <thead>
                                        <tr id="tr-first">
                                            <th style="width: 10%;">STT</th>
                                            <th style="width:13%;">Tên Category</th>
                                           
                                            <th style="width: 15%;"></th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $id = 0;?>
                                         @foreach ($datacategory as $data)
                                         
                                        <tr>
                                            <td><?php echo $id = $id+1?></td>
                                            <td>{{$data->categories_name}}</td>                                            
                                          
                                            <td>
                                                <a href="{!! URL::route('deletecategory',$data->categories_id) !!}" style="background: #575757;padding: 5px;color: white;border-radius: 10px;" onclick="return xacnhanxoa('Bạn Có Muốn Xóa hay không')">Xóa</a>
                                                <a href="{!! URL::route('editcategory',$data->categories_id) !!}" style="background: #575757;padding: 5px;color: white;border-radius: 10px;">Sửa</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                <script>
                                    $(document).ready(function () {
                                        $('#myTable').DataTable();
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </body>
    <script>
       
   
 
    </script>
</html>