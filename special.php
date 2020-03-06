<<!DOCTYPE html>
<html>
<head>
    <title>
        Forms
    </title>
</head>
<body>
    <?php
   
        if(isset($_POST['upload']))
        {
            
            if(( $_FILES['image']['type'] == 'image/jpeg' || $_FILES['image']['type'] =='image/png') && $_FILES['image']['size'] <  5000000) // to restrict type of files to be accepted
            {
                $tmp = $_FILES['image']['tmp_name']; //directory of the uploaded image
                //$img_name = $_FILES['image']['name']; //name of the uploaded image
                $img_name = uniqid().".jpg"; //gives each uploaded file a unique name so that they may not collide
                move_uploaded_file($tmp, "photos/".$img_name); //upload(the temporary directory that was create when file uploaded, the destiantion)
            }
            //else if($_FILES['image']['size'] ==0) echo "Pls choose a file";
            else echo "File Not supported";
        }
    ?>
    <form method="POST" action="" enctype="multipart/form-data">
    	<input type="text" name="name" placeholder="Enter your name"><br>
    	<input type="email" name="email" placeholder="Enter your email"><br>
        <input type="file" name="image" accept="image/*"><br>
        
        <!-- type can be the type of input such as button(type is submit), dropdown etc -->
        <!--name is the name of the attribute that will be used in php-->
        <!-- value is the name that will be displayed on the button or input -->
        <input type="submit" name="upload" value="upload">
    </form>
 
 
</body>
</html>