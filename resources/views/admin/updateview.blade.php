
<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->

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
   @include('admin.css')
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
  
            <form action="{{url('updateproduct', $data->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
            <div style="padding: 15px">
              <label>Prodct title</label>
  
              <input style="color: black" type="text" name="title" value="{{$data->title}}" required>
            </div>
            <div style="padding: 15px">
              <label>Price</label>
  
              <input style="color: black" type="number" name="price" value="{{$data->price}}" required>
            </div>
            <div style="padding: 15px">
              <label>Description</label>
  
              <input style="color: black" type="text" name="des" value="{{$data->description}}" required>
            </div>
            <div style="padding: 15px">
              <label>Quantity</label>
  
              <input style="color: black" type="text" name="quantity" value="{{$data->quantity}}" required>
            </div>
            <div style="padding: 15px">
              <label>Old image</label>
              <img height="100" width="100" src="/productimage/{{$data->image}}" alt="">
              </div>
  
            <div style="padding: 15px">
            <label>Change Image</label>
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