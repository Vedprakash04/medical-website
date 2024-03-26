
<!DOCTYPE html>
<html>
 
<head>
    <title>grievance</title>
</head>
 
<body>
    <center>
        <?php
 
        $conn = mysqli_connect("localhost", "root", "", "shardadb");
         
        // Check connection
        if($conn === false){
            die("ERROR: Sorry please complaint again. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
	$name = $_POST['cjob'];
    $contact= $_POST['contact'];
    $address= $_POST['address'];
    $complaint= $_POST['complaint'];
	$feedback = $_POST['feedback'];

	
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO grievance VALUES ('$name','$contact', '$address','$complaint','$feedback')";
         
        if(mysqli_query($conn, $sql)){
           header("Location:error.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>