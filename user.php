<?php
session_start();

$successMessage = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : null;

unset($_SESSION['success_message']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Submit Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

    <!-- navbar -->
    <?php include 'nav.php'; ?>
    
<div class="container-fluid col-md-5 ms-auto a">
        <h2>Application Submit Form</h2>


        <?php if(!empty($successMessage)): ?>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-header">
                    <strong class="mr-auto">Success!</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    <?php echo $successMessage; ?>
                </div>
            </div>
        <?php endif; ?>

        <form action="save_user.php" method="post" enctype="multipart/form-data">
           

        <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" name="id" required>
            </div>
            <div class="form-group">
                <label for="vehicle_no">Vehicle No:</label>
                <input type="text" class="form-control" name="vehicle_no" required>
            </div>
            <div class="form-group">
                <label for="chess_no">Chess No:</label>
                <input type="text" class="form-control" name="chess_no" required>
            </div>
            <div class="form-group">
                <label for="photo">Passport Size Photo:</label>
                <input type="file" class="form-control-file" name="photo" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="nid_soft_copy">NID Soft Copy (Image):</label>
                <input type="file" class="form-control-file" name="nid_soft_copy" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="present_address">Present Address:</label>
                <textarea class="form-control" name="present_address" required></textarea>
            </div>
            <div class="form-group">
                <label for="permanent_address">Permanent Address:</label>
                <textarea class="form-control" name="permanent_address" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>        
    </form>
    </div>

    <?php include 'footer.php'; ?>




    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('.toast').toast('show');
        });


    </script>




</body>
</html>
