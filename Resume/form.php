<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Resume</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> -->
</head>

<body>




    <div class="container form pt-3">


        

        <div class="col-5 m-auto">


            <form action="index.php" method="post" enctype="multipart/form-data">

                <div class="name form-group">
                    <label for="name"> Image:</label>
                    <input type="file" name="profile_pic" id="name" class="form-control">
                </div>



                <div class="name form-group mt-3">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control"
                        value="Pawan Kumar">
                </div>

                <div class="email form-group mt-3">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                </div>

                <div class="phone form-group mt-3">
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" id="phone" placeholder="Phone" class="form-control">
                </div>


                <div class="email input-group mt-3">
                    <select name="profession" id="profession" class="custom-select form-control">
                        <option value="">Select Profession</option>
                        <option value="Web Developer" selected> Web Developer</option>
                        <option value="Web Designer">Web Designer</option>
                        <option value="Graphic Designer">Graphic Designer</option>
                        <option value="Video Editor">Video Editor</option>
                        <option value="3-D model">3-D Model</option>
                        <option value="Animation">Animation</option>
                    </select>
                </div>

                <div class="phone form-group mt-3">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" placeholder="Enter Your address"
                        class="form-control">
                </div>

                <div class="skils d-flex gap-2">
                    <div class="phone form-group mt-3">
                        <label for="Management" class="management">Time Management</label>
                        <input type="text" name="management" id="Management" placeholder="25"
                            class="form-control p-1 allskillll">
                    </div>

                    <div class="phone form-group mt-3">
                        <label for="Solving" class="management">Problem Solving</label>
                        <input type="text" name="Solving" id="Solving" placeholder="25"
                            class="form-control p-1 allskillll">
                    </div>
                    <div class="phone form-group mt-3">
                        <label for="Leadership" class="management">Leadership</label>
                        <input type="text" name="Leadership" id="Leadership" placeholder="25"
                            class="form-control p-1 allskillll">
                    </div>
                    <div class="phone form-group mt-3">
                        <label for="Communication" class="management">Communication</label>
                        <input type="text" name="Communication" id="Communication" placeholder="25"
                            class="form-control p-1 allskillll">
                    </div>

                </div>


                <button class="btn btn-success mt-2">Submit</button>


            </form>
        </div>

    </div>
</body>

</html>