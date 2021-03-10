<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Ajax Pagination</title>
  <link rel="stylesheet" href="css/style.css">
  <style media="screen">
  body{
font-family: arial;
background: #b2bec3;
padding:0;
margin: 0;
}
h1{
text-align: center;
margin: 0;
}
h1::selection{
background:#fff;
color: #2980b9;
}
#main{
width: 700px;
margin: 0 auto;
background: white;
font-size: 19px;
}
#header{
background: #2980b9;
color: #fff;
padding: 15px;
}

#table-data{
padding: 15px;
min-height: 500px;
}
#table-data th{
background:#27ae60;
color: #fff;
}
#table-data tr:nth-child(odd){
background: #ecf0f1;
}
#pagination{
text-align: center;
padding: 10px;
}
#pagination a{
background: #2980b9;
color: #fff;
text-decoration: none;
display: inline-block;
padding:5px 10px;
margin-right: 5px;
border-radius: 3px;
}
#pagination a.active{
background: #27ae60;
}

  </style>
</head>
<body>
  <div id="main">
    <div id="header">
      <h1>PHP & Ajax Pagination</h1>
    </div>

    <div id="table-data">
    </div>
  </div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    function loadTable(page){
      $.ajax({
        url: "ajax-pagination.php",
        type: "POST",
        data: {page_no :page },
        success: function(data) {
          $("#table-data").html(data);
        }
      });
    }
    loadTable();

    //Pagination Code
    $(document).on("click","#pagination a",function(e) {
      e.preventDefault();
      var page_id = $(this).attr("id");

      loadTable(page_id);
    })
  });
</script>
</body>





</html>
