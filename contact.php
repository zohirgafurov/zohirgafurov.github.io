<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; 
 ini_set();
 ?>


    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>


    <?php

     


if(isset($_POST['submit'])){
    $to='adkhamboy@bk.ru';
    $subject=wordwrap($_POST['subject']);
    $header="From: ".$_POST['email'];
    $message=$_POST['text'];
    mail($to, $subject, $message,$header);
    

}









    


   

    ?>
    
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                   
                <h1>Contact</h1>
                    <form role="form" action="" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Emai</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Desired Email">
                        </div>
                         <div class="form-group">
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" name="subject" id="email" class="form-control" placeholder="Subject">
                        </div>
                         <div class="form-group">
                            <label for="user_password" class="sr-only">Text</label>
                            <textarea type="textarea" name="text" id="key" class="form-control" placeholder="Text"></textarea>
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Send">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "includes/footer.php";?>
