<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-6 shadow mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="fw-bold text-center text-primary">Customers Details</h2>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">gender</label>
                                <input type="text" name="gender" class="form-control">
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">language</label>
                                    <input type="text" name="language" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">sub</label>
                                    <input type="text" name="sub" class="form-control">
                            </div>
                            <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">image</label>
                                    <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3 ">
                                <input type="submit" value="create" name="create" class="btn btn-danger d-inline-block mt-4" style="margin-left:330px;font-size:25px;">
                            </div>
                        </form>

                        <?php
                            if(isset($_POST['create'])){
                                $id = $_POST['id'];
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $gender = $_POST['gender'];
                                $phone = $_POST['phone'];
                                $language = $_POST['language'];
                                $sub = $_POST['sub'];
                                $image = $_POST['image'];

                                $query = mysqli_query($con,"insert into student_registration (name, email, gender, phone, language, sub, image) value ('$name','$email','$gender','$phone','$language','$sub','$image')");

                                if($query){
                                    echo "<script> window.open('activedeactive.php','_self')</script>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>            
        </div>
    </div>

</body>
</html>