<?php
include('config.php');
if (isset($_POST['searchKey']) && $_POST['searchKey'] != "") {
     $course =  $_POST['searchKey']; // if print this things then add echo statement

    $sql = mysqli_query($conn, "SELECT * FROM `course` WHERE `course` like '%$course%'");
     $row_count = mysqli_num_rows($sql); // work this query count rows related search

    if ($row_count > 0) {

        while ($row = mysqli_fetch_assoc($sql)) {
           
?>
            <li><a  target="blank" href="<?php echo $row['courseLink']; ?>"> <?php echo  $row['course']; ?></a> </li>
            
<?php

        }
        echo "</ul>";
        # code...
    } else {
        echo  "<p style='padding:14px 20px;'> No relevant results found</p>";
    }
}

?>