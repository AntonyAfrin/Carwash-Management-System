<div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
<?php 
$sql = "SELECT * from tblpages where type='contact'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $result)
{       
?>

                            <p><i class="fa fa-map-marker-alt"></i>Bus stand opposite,Tirunelveli</p>
                            <p><i class="fa fa-phone-alt"></i>0073393561</p>
                            <p><i class="fa fa-envelope"></i>antony123@gmail.com</p>

                        <?php } ?>
                           
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="about.php" >About</a>
                            <a href="washing-plans.php" >Washing Plans</a>
                            <a href="location.php" >Washing Points</a>
                    
                            <a href="feedback.php" >Feedback</a>
                            <a href="admin" >Admin</a>
                        </div>
                    </div>
             
                </div>
            </div>
        </div>
        
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>