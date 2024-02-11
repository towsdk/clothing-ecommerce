
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
   @include('admin.css')

   <style>
     .title{
       color:white;
       padding-top: 25px;
       font-size: 25px;
     }

     label{
      display: inline-block;
      width: 200px;
     }
   </style>
  </head>
  <body>
       @include('admin.sidebar')
      <!-- partial -->
       @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

          <div class="container" align="center">
          <h1 class="title">This is product</h1>

          @if(session()->has('message'))

          <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
          {{session()->get('message')}}
          </div>
          @endif

          <form action="{{url('uploadproduct')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div style="padding: 15px">
            <label>Prodct title</label>

            <input style="color: black" type="text" name="title" placeholder="Product title" required>
          </div>
          <div style="padding: 15px">
            <label>Price</label>

            <input style="color: black" type="number" name="price" placeholder="Product price" required>
          </div>
          <div style="padding: 15px">
            <label>Description</label>

            <input style="color: black" type="text" name="des" placeholder="Product Description" required>
          </div>
          <div style="padding: 15px">
            <label>Quantity</label>

            <input style="color: black" type="text" name="quantity" placeholder="Product Quantity" required>
          </div>

          <div style="padding: 15px">
          <input type="file" name="file">
        
          </div>
          <div class="btn btn-success" style="padding: 15px">
          <input type="submit" name="">
          </div>

        </form>
        </div>
        </div>

        @include('admin.script')
        </body>
</html>