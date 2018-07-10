<!DOCTYPE html>
<html lang="en">
<head>
	<title>Incident Report</title>
</head>


<body>
	<div id="incident">
		<form method="post" action="<?php echo base_url().'index.php/c_home/submitForm'?>" name="incident_form" id="incident_form">
			<fieldset>
				<legend>Form Berita Acara</legend>	
			<label>Incident Title : </label>
			<input type="text" name="title">
			<br>
			<label>Incident Date : </label>
			<input type="date" name="date">
			<br>
			<label>Incident Time : </label>
			<input type="time" name="time">
			<br>
			<label>Incident Detail : </label>
			<input type="text" name="detail">
			<br>
			<label>Cause of Incident : </label>
			<input type="text" name="coi">
			<br>
			<label>Remedial Action : </label>
			<input type="text" name="ra">
			<br>
			<label>Follow up : </label>
			<input type="text" name="fu">
			<br>
			<label>Remarks : </label>
			<input type="text" name="remarks">
			<br>
			<label>Reported by : </label>
			<input type="text" name="reported">
			<br>
			<label>Check by : </label>
			<input type="text" name="check">
			<br>
			<input type="submit" name="submit">
			</fieldset>
		</form>
	</div>
</body>
</html>