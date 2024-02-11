
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
      
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <table>
                     <tr style="background-color: grey;">
                       <td style="padding: 20px">Phone</td>
                       <td style="padding: 20px">Address</td>
                       <td style="padding: 20px">Product title</td>
                       <td style="padding: 20px">Price</td>
                       <td style="padding: 20px">Quantity</td>
                       <td style="padding: 20px">Status</td> 
                       <td style="padding: 20px">Action</td> 
                     </tr>
                     @foreach($orders as $order)

                     <tr align="center" style="background-color: black;">
                        <td style="padding: 20px">{{$order->name}}</td>
                        <td style="padding: 20px">{{$order->phone}}</td>
                        <td style="padding: 20px">{{$order->address}}</td>
                        <td style="padding: 20px">{{$order->product_name}}</td>
                        <td style="padding: 20px">{{$order->quantity}}</td>
                        <td style="padding: 20px">{{$order->status}}</td>
                        <td style="padding: 20px"><a class="btn btn-success" href="{{url('updatestatus', $order->id)}}">Delivered</a></td>
                     </tr>
                     @endforeach
                </table>

            </div>
       @include('admin.script')
        </body>
</html>