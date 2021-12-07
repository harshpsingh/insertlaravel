<!DOCTYPE html>
<html>
<head>
    <title>Laravel </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>


<div class="row" style="margin-top: 5rem;">
       <div class="col-lg-12 margin-tb">
           <div class="pull-left">
               <h2>Show Data</h2>


   </div><br><br>

     <form action="{{url('show')}}" method="post">
       @csrf
       <div class="mb-3">
                         <label for="names" class="form-label">Name:</label>
                         <select class="form-control" name="names" id="names">

                             @foreach ($profile as $row)
                             <option value="{{ $row->name }}">{{ $row->name}}</option>
                             @endforeach
                         </select>
                     </div>
<input type="submit">
</form>
</div>
 </div>
</div>




</body>
</html>
