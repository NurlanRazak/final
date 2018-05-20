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
  
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <link href="../chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <script src="../chartist-js/dist/chartist.min.js"></script>
    <script src="../chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
      <head>
	       <h1 align="center">Полная информация о сотруднике</h1>
      </head>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
  <table class="table table-bordered">
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Departament</th>
            <th>Title</th>
            <th>salary</th>
            <th>Hire date</th>
          </tr>
            @foreach($sal1 as $key => $value)
            <tr>
            <td>{{$value->emp_no}}</td>
            <td>{{$value->first_name}}</td>
            <td>{{$value->last_name}}</td>
            <td>{{$value->gender}}</td>
            <td>{{$value->dept_name}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->salary}}</td>
            <td>{{$value->hire_date}}</td>
      
          
           </tr>
           @endforeach

  </table>


  <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                 <h4 class="card-title">Informatioin about table</h4>
                              <div id="salary" class="p-relative" style="height:360px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>





   <script>
    $(document).ready(function() {
     $(function () {
    "use strict";
    // ============================================================== 
    // Sales overview
    // ============================================================== 
     new Chartist.Line('#salary', {
         labels: [
         @foreach($salary as $key)
        '{{$key->from_date}}',
         @endforeach
        ]
        , series: [
          {meta:"Earning ($)", data: [@foreach($salary as $key)
           {{$key->salary}},
         @endforeach]}
      ]
    }, {
        low: 0
        , high:100000
        , showArea: true
        , divisor: 10
        , lineSmooth:false
        , fullWidth: true
        , showLine: true
        , chartPadding: 30
        , axisX: {
            showLabel: true
            , showGrid: false
            , offset: 50
        }
        , plugins: [
            Chartist.plugins.tooltip()
        ], 
        // As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
        
      
    });
         });
         });
    </script>
</main>
</html>