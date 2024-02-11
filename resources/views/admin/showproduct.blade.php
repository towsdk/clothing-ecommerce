
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
   @include('admin.css')
  </head>
  <body>
       @include('admin.sidebar')
      <!-- partial -->
       @include('admin.navbar')
        <!-- partial -->

        <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
            <div class="container" align="center">

                @if(session()->has('message'))

                <div class="alert alert-success">
                <button type="button" class="close" data-dissmiss="alert">x</button>
                {{session()->get('message')}}
                </div>

                @endif

                <table>
                    <tr style="background-color: grey;">
                    
                        <td style="padding:20px;">Title</td>
                        <td style="padding:20px;">Description</td>
                        <td style="padding:20px;">Quantity</td>
                        <td style="padding:20px;">Price</td>
                        <td style="padding:20px;">Image</td>
                        <td style="padding:20px;">Update</td>
                        <td style="padding:20px;">Delete</td>
                    </tr>

                    @foreach($data as $product)

                    <tr align=center; style="background-color: black; ">
                    
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>${{$product->price}}</td>
                    <td>
                        <img width="100" height="100" src="/productimage/{{$product->image}}" alt="">
                    </td>

                    <td>
                        <a class="btn btn-success" href="{{url('updateview', $product->id)}}">Update</a>
                    </td>
                    <td>
                        <a onclick="return confirm('Are You sure?')" class="btn btn-danger" href="{{url('deleteproduct', $product->id)}}">Delete</a>
                    </td>
                    </tr>

                    @endforeach

                </table>
            </div>
        </div>

       @include('admin.script')
        </body>
</html>