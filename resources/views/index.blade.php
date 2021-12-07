<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application - laravelcode.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>


<div class="row" style="margin-top: 5rem;">
       <div class="col-lg-12 margin-tb">
           <div class="pull-left">
               <h2>Insert Data</h2>


   </div>
   <div><br><br><br>
     <form action="{{url('store')}}" method="post">
       @csrf
      <label >Name:</label><input type="text" name="name" /><br>
        <label >Email:</label><input type="text" name="email" /><br>
          <label >Phone:</label><input type="text" name="phone" /><br>
            <label >Marks:</label><input type="number" name="marks" /><br>
              <label >Price:</label><input type="number" name="price"  step="0.01"/><br>
              <div class="form-group">
     <label>City</label>
     <select class="form-control" name="city" style="width:auto">
         <option selected>select city</option>
         <option value="Delhi">Delhi</option>
         <option value="Mumbai">Mumbai</option>
         <option value="Pune">Pune</option>
     </select>

 </div>
<input type="submit">
</form>
</div>
 </div>
</div>




</body>
</html>
