<html>
	<head>
		<title> Javascript Form </title>
	</head>
	<body style>
		<h1> Student Record </h1>
		<table id="student_table">
		</table>
		
		<script>
			const studentTable = document
				.getElementById("student_table");
				
			console.log(studentTable);
			const row1 = studentTable.insertRow();
			const row1col1= row1.insertCell();
			const row1col2= row1.insertCell();
			
			row1col1.innerHTML = "LAST NAME";
			row1col2.innerHTML = "FIRST NAME";
		</script>
	</body>
</html>
