<?php
require_once 'connection.php';
$sql = "SELECT * FROM students" ;
$all = $conn->query($sql);
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Student Information</title>
    <link rel="stylesheet" href="result.css">
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightcoral;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

         .result {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .result p {
            margin: 0;
        } 

        .error {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Retrieve Student Information</h1>
        <form method="POST">
            
            <label for="technology">Choose a technology:</label>
    <select name="technology" required>
      <option value="Python">Python</option>
      <option value="JavaScript">JavaScript</option>
      <option value="PHP">PHP</option>
      <option value="Java">Java</option>
      <option value="C#">C#</option>
    </select>
            <input type="submit" value="Retrieve">
        </form></div>
        <div id="result" class="result">
            <!-- Result will be displayed here -->
            <?php
            $tech=$_POST['technology'];
        while($row = mysqli_fetch_assoc($all)){      
            
            if($row["technology"]==$tech)
            {
            ?>

            <div class="card">
            
    <div class="caption">
    <p class="rate">
   <?php for($i=0; $i<$row["rating"]; $i++)
    {
        echo "<i class=\"bx bxs-star\"></i>" ;
    }
    ?>
    </p>
                <p class="product_name"><?php echo $row["fullname"]?></p>
                <p class="price"><b><?php echo $row["technology"]?></b></p>
                
            </div>
    
        </div>
            
            
        </div>
    <?php }}?>
    </div>
</body>
</html>
