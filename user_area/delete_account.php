<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete account</title>
</head>
<body>
    <h3 class="text-danger mb-3 mt-5">Delete Account</h3>
    <form action="" method="post" class="mt-3">
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="delete" value="Delete Account">
        </div>
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="dont_delete" value="Do not Delete Account">
        </div>
    </form>
</body>
</html>


<?php
$username_session=$_SESSION['username'];
if(isset($_POST['delete'])){
    $delete_query="Delete from `usertable` where username='$username_session'";
    $result=mysqli_query($conn,$delete_query);
    if($result){
        session_destroy();
        echo "<script>alert('Account Deleted successfuly')</script>";
        echo "<script>window.open('./index.php','_self')</script>";
    }
}
if(isset($_POST['dont_delete'])){
    echo "<script>window.open('profile.php','_self')</script>";
}
?>