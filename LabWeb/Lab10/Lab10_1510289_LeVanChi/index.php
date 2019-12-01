

<!DOCTYPE html>

    <meta charset="UTF-8">
    <title>Lab10_1510289_LeVanChi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
    <script type="text/javascript" src="jquery-3.3.1.min.js"> </script>
    <script type="text/javascript" src="main.js"></script>
   
</html>

<body>
   
    <div align="center">
        <h3>Processing an AJAX Form</h3>
        <form id= "form_create" action="process.php" method="POST" style="width:400px">
            
            <div id="name-group" class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
                <!-- errors will go here -->
            </div>

            <div id="year-group" class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" name="year">
                <!-- errors will go here -->
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    
</body>
</html>

