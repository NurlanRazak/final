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
	<h1 align="center">Показ всех сотрудников с пагинацией</h1>
</head>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
<table class="table table-bordered">
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            
            <th>Hire date</th>
          </tr>
   
		@foreach($show as $sar)
        <tr>
        <td><a href="/employees/{{$sar->emp_no}}">{{$sar->emp_no}}</a></td>
			<td>{{$sar->first_name}}</td>
			<td>{{$sar->last_name}}</td>
			<td>{{$sar->gender}}</td>
			
			<td>{{$sar->hire_date}}</td>
	
			
        </tr>
	  @endforeach


	  <!--
<th>Title</th>
            <th>salary</th>  
            <th>from date</th>
            <th>to date</th>

	<td>{{$sar->title}}</td>
			<td>{{$sar->salary}}</td>
			<td>{{$sar->from_date}}</td>
			<td>{{$sar->to_date}}</td>
	  -->
		
	 
	 
  </table>
  {{$show->links()}}
</main>
</html>