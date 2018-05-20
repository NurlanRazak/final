<html>
<link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<head>
	<h1 align="center">Показ всех менеджеров </h1>
</head>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
<table class="table table-bordered">
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
            <th>Date</th>
          </tr>
   
		@foreach ($manager as $key => $value)
        <tr>
        <td><a href="/employees/{{$value->emp_no}}">{{$value->emp_no}}</a></td>
			<td>{{$value->first_name}}</td>
			<td>{{$value->last_name}}</td>
			<td>{{$value->dept_name}}</td>
			
			<td>{{$value->from_date}}  {{$value->to_date}}</td>
	
			
        </tr>
	  @endforeach


		
	 
	 
  </table>
  
</main>
</html>