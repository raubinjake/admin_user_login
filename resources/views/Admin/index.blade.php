<?php  $key = 0; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    

<link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
rel='stylesheet'>
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" >
    </script>
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.0/bootstrap-icons.svg" referrerpolicy="no-referrer" />

</head>
<body>
<div class="row" style="margin-right: 0px;margin-left: 0px;margin-top: 28px;">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">User List</h6>
                <div class="table-responsive">
                <table id="registered_user_table" class="table table-lg">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Image</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>DOB</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Modified At</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                        <tbody>
                        @foreach($users as $row)
                        @php
                            $mobile_number = str_replace(' ', '', $row['phone']);
                        @endphp
                            <tr class="driver<?= $row['user_id']; ?>">
                                <td>{{$key = $key+1}}</td>
                                <td><img src="{{asset('images').'/'.$row['profile_image']}}" class="img_circular" width="40" height="40"></td>
                                <td>{{$row['first_name']}}</td>
                                <td>{{$row['last_name']}}</td>
                                <td>{{$row['date_of_birth']}}</td>
                                <td>{{$row['phone']}}</td>
                                <td>{{$row['email']}}</td>
                                <td>{{date('m/d/y H:m',strtotime($row->created_at))}}</td>   
                                <td>{{date('m/d/y H:m',strtotime($row->updated_at))}}</td>   
                                <td>
                                    @if($row['status'] == 1)
                                        @php
                                            $active_display = 'block';
                                            $inactive_display = 'none';
                                        @endphp
                                    @else
                                        @php 
                                            $active_display = 'none';
                                            $inactive_display = 'block';
                                        @endphp
                                    @endif
                                    <div id="show_status_active{{$row['id']}}" style="display: {{ $active_display }}">
                                         <a href="#" data-target="#activeAlert{{$row['id']}}" data-active-id="{{$row['id']}}" title=""
                                        data-toggle="modal" class="badge bg-success-bright text-success">Active</a>
                                    </div>
                                    <div id="show_status_inactive{{$row['id']}}" style="display: {{ $inactive_display }}">
                                        <a href="#" data-target="#InactiveAlert{{$row['id']}}" data-inactive-id="{{$row['id']}}" title=""
                                        data-toggle="modal" class="badge bg-danger-bright text-danger">Inactive</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{url('/admin/view_dispatcher')}}/{{$row['id']}}" target="_blank" class="text-secondary set_font_sixe20" data-toggle="tooltip" title="" data-original-title="View">
                                        <i class="ti-eye"></i>
                                    </a>
                                </td>
                            </tr> 
                        @endforeach
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function(){
    $("#registered_user_table").dataTable();
  })
</script>
</body>
</html>