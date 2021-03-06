<?php 

    // Check if User Coming From A Request

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Assign Variables

        $user = $_POST['username'];
        $mail = $_POST['email'];
        $phone = $_POST['cellphone'];
        $msg = $_POST['message'];
        
        if (strlen($user) < 3) {
            $userError = 'Username Must Be Larger Than <strong>2</strong> Characters';
        }
        if (strlen($msg) < 10) {
            $msgError = 'Message Can\'t Be Less Than <strong>10</strong> Characters';
        }
        if (strlen($phone) < 11) {
            $phoneError = 'Phone Must Be <strong>11</strong> Numbers';
        }
    }

?>

<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Contact Form"/>
        <meta name="keywords" content="Contact Form"/>
        <meta name="author" content="Mohamed Magdy (Mag-D)"/>
        <meta http-equiv="X-UA-Compatibale" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Contact Form</title>
        <link rel="stylesheet" href="css/Contact Form.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/normalize.css"/>
        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Raleway'>
    </head>
    <body style='background-color: #f1f1f1'>

        <!-- Start Form -->

        <div class='container'>
            <h2 class='text-center'>Contact Me</h2>
            <form class='contact-form' action='<?php echo $_SERVER['PHP_SELF'] ?>' METHOD='POST'> 
                <div class='form-group'>
                    <input 
                        class="form-control" 
                        type='text' 
                        name='username' 
                        placeholder='Type Your Name'
                        value='<?php if(isset($user)) { echo $user; } ?>'/>
                    <i class="fa fa-user fa-fw"></i>
                    <span class='asterisx'>*</span>
                    <?php 
                        if (isset($userError)) {
                        echo "<div class='alert alert-danger alert-dismissible' role='start' style='margin-bottom: 10px'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>";
                            echo $userError . '<br/>';
                        echo "</div>";
                        } 
                    ?>
                </div>
                <div class='form-group'>
                    <input 
                        class="form-control" 
                        type='text' 
                        name='email' 
                        placeholder='Type a Valid Email'
                        value='<?php if(isset($mail)) { echo $mail; } ?>'
                        required/>
                    <i class="fa fa-envelope fa-fw"></i>
                    <span class='asterisx'>*</span>
                </div>
                <div class='form-group'>
                    <input 
                        class="form-control" 
                        type='text' 
                        name='cellphone' 
                        placeholder='Type Your Phone Number'
                        value='<?php if(isset($phone)) { echo $phone; } ?>'/>
                    <i class="fa fa-phone fa-fw"></i>
                    <?php 
                        if (isset($phoneError)) {
                        echo "<div class='alert alert-danger alert-dismissible' role='start' style='margin-bottom: 10px'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>";
                            echo $phoneError . '<br/>';
                        echo "</div>";
                        } 
                    ?>
                </div>
                <div class='form-group'>
                    <textarea 
                        class='form-control'
                        name='message'
                        placeholder='Type Your Message'><?php if(isset($msg)) { echo $msg; } ?></textarea>
                    <span class='asterisx'>*</span>
                    <?php 
                        if (isset($msgError)) {
                        echo "<div class='alert alert-danger alert-dismissible' role='start' style='margin-bottom: 10px'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>";
                            echo $msgError . '<br/>';
                        echo "</div>";
                        } 
                    ?>
                </div>
                <input 
                    class='btn btn-success' 
                    type="submit" 
                    value="Send Message"/>
                <i class="fa fa-send fa-fw send-icon"></i>
            </form>
        </div>

        <!-- End Form -->
        
        <script src="https://kit.fontawesome.com/b08bcb70c1.js"></script>
        <script src="js/jquery-1.11.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="js/Contact Form.js"></script>
    </body>
</html>
