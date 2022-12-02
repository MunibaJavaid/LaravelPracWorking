
    @include('Layout.header')

    <div class="container"> <br>
  <h3>Insert Data In DataBase</h3> <br>

  <form action="{{url('/save_record')}}" method = "post" enctype="multipart/form-data">

    <div class = "row">

    
      <div class = "col-sm-12 col-lg-6">

        <div class="form-group">
          <label for="name">EmpName:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Your Emp name" name="name">
        </div>


        <div class="form-group">
          <label for="pwd">Salary:</label>
          <input type="text" class="form-control" id="edu" placeholder="Enter your salary" name="salary">
        </div>


        

        <button type="submit" class="btn btn-primary" name = "ins">Submit</button>
  
      </div>
    </div>


  </form>
</div>  

@include('Layout.footer')
