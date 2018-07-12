<!DOCTYPE html>
<html lang="en">
<head>
	<title>Incident Report</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>


<body>
	<div id="incident">
		<form method="post" action="<?php echo base_url().'index.php/c_home/submitForm'?>" name="incident_form" id="incident_form">
			<fieldset>
				<legend>Form Berita Acara</legend>	
			<label>Incident Title : </label>
			<input type="text" name="title" required>
			<br>
			<label>Incident Date : </label>
			<input type="date" name="date" required>
			<br>
			<label>Incident Time : </label>
			<input type="time" name="time" required>
			<br>
			<label>Incident Detail : </label>
			<input type="text" name="detail" required>
			<br>
			<label>Cause of Incident : </label>
			<input type="text" name="coi" required>
			<br>
			<label>Remedial Action : </label>
			<input type="text" name="ra" required>
			<br>
			<label>Follow up : </label>
			<input type="text" name="fu">
			<br>
			<label>Remarks : </label>
			<input type="text" name="remarks">
			<br>
			<label>Reported by : </label>
			<input type="text" name="reported" required>
			<br>
			<label>Check by : </label>
			<input type="text" name="check" required>
			<br>
			</fieldset>
			
			<fieldset>
				<legend>Log detail</legend>
			<div id="container">
				<label>Time : </label>
				<input type="time" name="log_time[]">
				<label>Detail : </label>
				<input type="text" name="log_detail[]">
				<a href="#" id="add">Add more</a>
			</div>
			</fieldset>
			<input type="submit" name="submit">
		</form>
	</div>
<script>
	 $(document).ready(function(e){
	 	var html = '</p><div><label>Time : </label> <input type="time" name="log_time[]"> <label>Detail : </label>				<input type="text" name="log_detail[]"> <a href="#" id="delete">Delete</a></div> ';

	 	$("#add").click(function(e){
	 		$("#container").append(html);
	 	});

	 	$("#container").on("click","#delete",function(e){
        //alert();
        $(this).parent("div").remove();
      });

	 });

</script>
</body>
</html>