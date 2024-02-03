<html> 
    <head> 
        <title> FETCH DATA</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </head> 
    <body>
    <table class="table" border="1"> 

    <tr class="table-info">
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT</th>
      <th scope="col">AGE</th>
      <th scope="col">CITY</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">ZIP</th>
      
      <th scope="col">ACTION</th>
    </tr>  

    @foreach ($user as $u)
      <tr class='table-dark'> 
         <td>{{$u -> id}}</td>
         <td>{{$u -> name}}</td>
         <td>{{$u -> email}}</td>
         <td>{{$u -> contact}}</td>
         <td>{{$u -> age}}</td>
         <td>{{$u -> city}}</td>
         <td>{{$u -> address}}</td>
         <td>{{$u -> zip}}</td>  

         <td> <a class='btn btn-outline-info' href="{{route('edit',$u->id)}}">EDIT </a>  
             <a class ='btn btn-outline-danger' onclick="return confirm('Are you sure?')" href="{{route('destroy',$u->id)}}">DELETE</a>
        </td>
        </tr>
    @endforeach 

</table> 
<br> 
<br>  
<div class="Container d-flex align-items-center justify-content-center my-4">
<a class="btn btn-outline-success" href="{{route('form')}}">GO TO USER FORM</a> 
</div> 
</body> 
</html>