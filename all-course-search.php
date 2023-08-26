<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
    $('#submitform').submit(function() {
        $('#buttonhide').hide();
        $('#buttonshow').show();
    
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
        location.reload();

    });
    
</script>

<?php
include('config.php');
if (isset($_POST['searchKey']) && $_POST['searchKey'] != "") {

     $course = $_POST['searchKey'];
    $sql = mysqli_query($conn, "SELECT * FROM `course` WHERE `course` like '%$course%'");
    "" . $row_count = mysqli_num_rows($sql);

    if ($row_count > 0) {

        while ($row = mysqli_fetch_assoc($sql)) {
?>



            <div class=" col-sm-4  mb-3"">
                    <div class=" popular-courses">
                <a href="<?php echo $row['courseLink']; ?>" target="_blank">
                    <h5><?php echo $row['course']; ?></h5>
                    <p> <span>😊</span> <?php echo $row['learners']; ?></p>
                    <a href="<?php echo $row['courseLink']; ?>" class="knowmore" target="_blank">Know More <i class="icon-ac-right-arrow-1"></i> </a>
                </a>
            </div>
            </div>




<?php

        }


    } else {
        echo "<p style='text-align:center!important;'> We did not understand your query " . "<b style='color:red'>" . $course . "</b>" . " Please change your query.  </p>";
        echo   '<div style="visibility:hidden;" class="row"> <div class="col-sm-12"> <p style="text-align:center; "> We did not understand your query " . "<b style="color:red">" . $course . "</b>" . " Please change your query.  </p> </div></div>
        <div class="col-sm-6">
        
        <div style=" box-shadow: 0 3px 10px 0 rgb(0 12 105 / 6%); background-color:#fff; padding:30px; border-radius:10px;">
        <h4 class="mb-4" style=" color:#000;"> Drop us your query</h4>
        <form autocomplete="off" method="POST" action="mail" id="submitform">
        <input type="hidden" value="All Courses Page" name="comingfrom" >
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name*" name="name"  autocomplete="off" required>
            </div>
            <div class="form-group"> 
                <input type="email" class="form-control" placeholder="Your Email*" name="email" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Your Mobile No*" name="number" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Course Name*" name="course_name" required>
        </div>
            <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Type your query here*" name="query" required></textarea>
            </div>
            <div class="form-group">
                <input id="buttonhide" type="submit" name="organization_submit" class="btn btn-block" style="color:#fff; background:#ffb02e;" value="submit">
                <input id="buttonshow" class="btn btn-block" style="color:#fff; background:#ffb02e; display:none; text-align:center; cursor:none;" disabled="" value="Please Wait">
            </div>
        </form>
    </div>
        </div>

         <div class="col-sm-6">
         <div style=" border-radius:10px;  padding:30px; box-shadow: 0 3px 10px 0 rgb(0 12 105 / 6%); background-color: #fff;">
        <h4 class="mb-4" style=" color:#000;">Contact us</h4>
        <div style="background-color:#1f3b5b; padding:20px; border-radius:10px;">
            <p style="color:#fff;">Looking for Corporate Training ? </p>
            <div class="row">
                <div class="col-sm-6">
                    <a style="text-decoration:none; color:#ffb02e;" href="tel:9266-625-607"> <i class="fa fa-phone" style="border:1px solid #ffb02e;  border-radius:10px; padding:5px;"></i><span style="font-weight:700"> +91 9266-625-607</span></a>
                </div>
                <div class="col-sm-6">
                    <a style="text-decoration:none; color:#ffb02e;" href="mailto:corporate@kvch.in"> <i class="fa fa-envelope" style="border:1px solid #ffb02e;  border-radius:10px; padding:5px;"></i><span style="font-weight:700"> corporate@kvch.in</span></a>
                </div>
            </div>
        </div>

        <div class="mt-3" style="background-color:#444444; padding:20px; border-radius:10px;">
            <p style="color:#fff;">Looking for Training Yourself ? </p>
            <div class="row">
                <div class="col-sm-6">
                    <a style="text-decoration:none; color:#ffb02e;" href="tel:9510-860-860"> <i class="fa fa-phone" style="border:1px solid #ffb02e;  border-radius:10px; padding:5px;"></i><span style="font-weight:700"> +91 9510-860-860</span></a>
                </div>
                <div class="col-sm-6">
                    <a style="text-decoration:none; color:#ffb02e;" href="mailto:training@kvch.in"> <i class="fa fa-envelope" style="border:1px solid #ffb02e;  border-radius:10px; padding:5px;"></i><span style="font-weight:700"> training@kvch.in</span></a>
                </div>
            </div>
        </div>


        <div class="mt-3" style="background-color:#0f2c39; padding:20px; border-radius:10px;">
            <p style="color:#fff;">Want to become a partner? </p>
            <div class="row">
                <div class="col-sm-6">
                    <a style="text-decoration:none; color:#ffb02e;" href="tel:9212-468-525"> <i class="fa fa-phone" style="border:1px solid #ffb02e;  border-radius:10px; padding:5px;"></i><span style="font-weight:700"> + 91 9212-468-525</span></a>
                </div>
                <div class="col-sm-6">
                    <a style="text-decoration:none; color:#ffb02e;" href="mailto:info@kvch.in"> <i class="fa fa-envelope" style="border:1px solid #ffb02e;  border-radius:10px; padding:5px;"></i><span style="font-weight:700"> info@kvch.in</span></a>
                </div>
            </div>
        </div>





        </div>
        </div>';
    }
}

?>