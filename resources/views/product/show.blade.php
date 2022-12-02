@include('Layout.header')

   <a href="{{route('products.create')}}" class = "btn btn-primary m-5 ">Create Product</a>

    <table class = "container table table-stripped table-bordered">
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>Xyz</td>
            <td>1200</td>
            <td>Desccc...</td>
        </tr>
    </table>



    @include('Layout.footer')