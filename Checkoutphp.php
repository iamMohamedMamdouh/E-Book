<?php
// $conn = mysqli_connect("localhost", "root", "", "myfirstdatabase") or die("Couldn't connect");

// $FirstName = $_POST["FirstName"] ?? "";
// $LastName = $_POST["LastName"] ?? "";
// $Address = $_POST["Address"] ?? "";
// $Area = $_POST["Area"] ?? "";
// $Email = $_POST["Email"] ?? "";
// $Phone = $_POST["Phone"] ?? "";

// $insertQuery = "INSERT INTO orders (FirstName, LastName, Address, Area, Email, Phone) VALUES ('$FirstName', '$LastName', '$Address', '$Area', '$Email', '$Phone')";
// if ($conn->query($insertQuery) === true) {
//   $orderId = $conn->insert_id; // Get the ID of the inserted order
  
//   // Prepare the SQL statement to update the vodafone table with the ID
//   $updateQuery = "UPDATE vodafone SET id_orders = $orderId WHERE phone = '$Phone'";
//   if ($conn->query($updateQuery) === true) {
//     echo "<body style='background-color:hsl(0, 56%, 61%)'>
//     <br><br><br><br><br><br><br><br><br><br><br><br><br>
//         <div style='font-family: Arial, sans-serif;color:  #333333; text-align: center;margin-top: 100px;'>
//         <h1>Your Order is Placed Successfully :)</h1></div> <br>";
//     echo "<script>
//             setTimeout(function() {
//                 window.location.href = 'Payment Methods.html';
//             }, 1500);
//           </script>";
//   } else {
//     echo "Error updating vodafone table: " . mysqli_error($conn);
//   }
// } else {
//   echo "Error inserting data: " . mysqli_error($conn);
// }

// mysqli_close($conn);
///////////////////////////////////
 
$conn = mysqli_connect("localhost", "root", "", "myfirstdatabase") or die("Couldn't connect");

$FirstName = $_POST["FirstName"] ?? "";
$LastName = $_POST["LastName"] ?? "";
$Address = $_POST["Address"] ?? "";
$Area = $_POST["Area"] ?? "";
$Email = $_POST["Email"] ?? "";
$Phone = $_POST["Phone"] ?? "";


$insertQuery = "INSERT INTO orders (FirstName ,LastName ,Address ,Area ,Email ,Phone ) VALUES ('$FirstName', '$LastName' , '$Address' , '$Area' , '$Email' , '$Phone')";
 if ($conn->query($insertQuery)==true) {
    echo "<body style='background-color:hsl(0, 56%, 61%)'>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div style='font-family: Arial, sans-serif;color:  #333333; text-align: center;margin-top: 100px;'>
        <h1>Your Order is Placed Successfully :)</h1></div> <br>";
    echo "<script>
            setTimeout(function() {
                window.location.href = 'Payment Methods.html';
            }, 1500);
          </script>";

          
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

// Fetch the order details from the database
 

mysqli_close($conn);
?>