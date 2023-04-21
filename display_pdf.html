<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style media="screen">
       body{
            margin: 0;
        }

      embed{
        border: 2px solid black;
        margin-top: 0;
      }
      .container{
        margin: 0;
        
        
      }
    </style>
  </head>

<body>
<header>
    <h1>OLMS</h1>
    <nav>
      <ul class="link">
        <li ><a href="index.html">Home</a></li>
        <li><a href="logout.php" ><i class="fas fa-sign-out-alt" style="color: black;"></i>  LogOut</a></li>

      </ul>
    </nav>
  </header>
  <br>
<center>
    <div class="container">
      <?php
      $conn=mysqli_connect("localhost","root","","group");

      $sql="SELECT pdf from courses";
      $query=mysqli_query($conn,$sql);


      function get_pdf_files() {
        global $conn;
        $pdf_files = array();
        $sql = "SELECT * FROM courses"; // Replace pdf_files with the name of your table
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pdf_files[] = array(
                    'pdf' => $row['pdf'], 
                    'file_path' => 'pdf/' . $row['pdf'] // Assuming the PDF files are stored in the pdf/ directory
               
                  );
                }
                
        }
        return $pdf_files;
      }

?>

<?php

$conn=mysqli_connect("localhost","root","","group");

$sql="SELECT pdf from courses";
$query=mysqli_query($conn,$sql);
      $pdf_files = get_pdf_files(); // This function should return an array of PDF files with their file name, file path, etc.

// Check if a PDF file ID or index is specified in the URL

$selected_file_id = isset($_GET['id']) ? $_GET['id'] : null;
      if ($selected_file_id !== null && isset($pdf_files[$selected_file_id])) {
        $selected_file = $pdf_files[$selected_file_id];
        
        echo '<embed type="application/pdf" src="' . $selected_file['file_path'] . '" width="100%" height="800">';
        
    } else {
        // Otherwise, display the list of PDF files with links
        foreach ($pdf_files as $id => $pdf) {
            echo '<a href="?id=' . $id . '">' . $pdf['pdf'] . '</a>';
        }
      }


      ?>
</center>
  </body>
</html>
