<?php
    require_once(__DIR__ . "/../model/config.php");
    //getting the config php file out of the folder called model 
?>

<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title" />
        <!--creating a box and makingthe title thing pop out on the side of the box-->
    </div>
    
    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
        <!--doing the same thing just like the other one but for post--> 
    </div>
    
    <div>
        <button type="submit">Submit</button>
        <!--creating a summit button called submit-->
    </div>
</form>