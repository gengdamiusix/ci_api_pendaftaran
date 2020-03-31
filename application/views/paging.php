  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://www.js-tutorials.com/demos/jquery_bootstrap_pagination_example_demo/jquery.twbsPagination.min.js"></script>
  <div class="container" style="padding:10px 20px;">
    <h2>Bootstrap Pagination Example Using jQuery</h2>
	<div id="header"></div>
	<table id="employee" class="table table-bordered table table-hover" cellspacing="0" width="100%">
		<colgroup><col width="20%"><col width="35%"><col width="40%"></colgroup>
	<thead>
		<tr>
			<th>Name</th>
			<th >Salary</th>
			<th>Age</th>
		</tr>
	</thead>
	<tbody id="emp_body">
	</tbody>
	</table>
	<div id="pager">
		<ul id="pagination" class="pagination-sm"></ul>
	</div>
	<div class="col-sm-10" style="margin:20px 0px 20px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="https://www.js-tutorials.com/javascript-tutorial/simple-example-pagination-using-jquery-bootstrap/">Back to Tutorial</a>
	</div>
	<div id="footer"></div>
  </div>
  
  <script type="text/javascript">
  $(document).ready(function(){

	
	var $pagination = $('#pagination'),
		totalRecords = 0,
		records = [],
		displayRecords = [],
		recPerPage = 10,
		page = 1,
		totalPages = 0;
           
	$.ajax({
		url: "https://www.js-tutorials.com/source_code/api_data/employee_all.php",
		async: true,
		dataType: 'json',
		success: function (data) {
			records = data;
			console.log(records);
			totalRecords = records.length;
			totalPages = Math.ceil(totalRecords / recPerPage);
			apply_pagination();
		}
	});
	function generate_table() {
		var tr;
		$('#emp_body').html('');
		for (var i = 0; i < displayRecords.length; i++) {
			tr = $('<tr/>');
			tr.append("<td>" + displayRecords[i].employee_name + "</td>");
			tr.append("<td>" + displayRecords[i].employee_salary + "</td>");
			tr.append("<td>" + displayRecords[i].employee_age + "</td>");
			$('#emp_body').append(tr);
		}
	}
	function apply_pagination() {
		$pagination.twbsPagination({
			totalPages: totalPages,
			visiblePages: 6,
			onPageClick: function (event, page) {
				displayRecordsIndex = Math.max(page - 1, 0) * recPerPage;
				endRec = (displayRecordsIndex) + recPerPage;
				console.log(displayRecordsIndex + 'ssssssssss'+ endRec);
				displayRecords = records.slice(displayRecordsIndex, endRec);
				generate_table();
			}
		});
	}
  });
</script>