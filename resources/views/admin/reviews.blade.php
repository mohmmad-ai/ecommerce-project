<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <style>

    table{
      border: 2px solid skyblue;
      text-align: center;
    }

    th{
      background-color: skyblue;
      padding: 10px;
      font-size: 18px;
      font-weight: bold;
      text-align: center;
      color: white;
    }
    .table_center{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    td{
      color: white;
      padding: 10px;
      border: 1px solid skyblue;
    }
   </style>
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')
    
 
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <div class="table_center">
                <table>
              <tr>
                <th>Customer name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
              </tr>
    
              @foreach ($data as $data )
                
             
              <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->message}}</td>
              </tr>
              @endforeach
    
            </table>
           </div>
             
              </div>
    
            </div> 
         
          </div>

    </div>
    <!-- JavaScript files-->
   @include('admin.js')
  </body>
</html>