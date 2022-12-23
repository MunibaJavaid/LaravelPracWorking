<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    @if (session('status'))
    <script>alert("{{ session('status') }}")</script>
            <!-- <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
            </div> -->
  
    @elseif(session('success'))
    <script>alert("{{ session('success') }}")</script>
                <!-- <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
                </div> -->
    @endif
       
    <a  class="btn btn-primary m-5" href="{{route('products.create')}}" role="button">Add Product</a>
<div class="container mt-5">
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price </th>
                <th>Email</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Image</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Prod as $item)
                
          
            <tr>
                <td>{{$item->Pname}}</td>
                <td>{{$item->Price}}</td>
                <td>{{$item->Email}}</td>
                <td>{{$item->Description}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td><img src="{{$item->ProdImage}}" alt="" width = "80" height="80"></td>

                <td> <a  href = "{{route('products.show',$item->id)}}" name="" id="" class="btn btn-success" href="#" role="button">Detail</a> </td>
                <td><a href = "{{route('products.edit',$item->id)}}" name="" id="" class="btn btn-primary" href="#" role="button">Edit</a></td>
                <td><a name="" id="" class="btn btn-danger" href="#" role="button">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
      
</div>
  
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>