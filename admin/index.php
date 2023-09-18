<?php
error_reporting(0);
$pass = $_GET['pass'];
if(!in_array($pass, ['yesyes', 'armiesin', 'head', 'killnft'])){
    header("Location: ../index.php");
}
$json = json_decode(file_get_contents('../img.json'), true);
$img = isset($_GET['img']) ? $_GET['img'] : '';

if(!empty($img) && file_exists('../nftimages/'.$img)){
    if(unlink('../nftimages/'.$img)){
        unset($json[$img]);
        file_put_contents('../img.json', json_encode($json));
        echo "<script>Image has been deleted</script>";
    }else{
        echo "<script>Image has not been deleted</script>";
    }
}

if(isset($_POST['upload'])){
    $target_dir = "../nftimages/";
    $target_file = $target_dir . time().basename($_FILES["images"]["name"]);
    if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
        $json[time().basename($_FILES["images"]["name"])] = ['file'=>time().basename($_FILES["images"]["name"]),'type'=>$_POST['type']];
        file_put_contents('../img.json', json_encode($json));
        echo "<script>Image has been upload</script>";
    } else {
        echo "<script>Image has not been upload</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mt-2 mb-4">Admin Access</h1>
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Upload an Image</label>
                        <input type="file" class="form-control" name="images">
                        <small  class="form-text text-muted">Please note resolution for all the images should be same.</small>
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleInputEmail1">Type</label>
                        <input type="text" class="form-control" name="type">
                    </div>
                    <button type="submit" name="upload" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <caption>List of images</caption>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Images</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if ($handle = opendir('../nftimages')) {
                            $i = 0;
                            while (false !== ($entry = readdir($handle))) {
                                $i++;
                                if ($entry != "." && $entry != "..") {?>
                                    <tr>
                                        <th scope="row"><?php echo $entry?></th>
                                        <td><img src="../nftimages/<?php echo $entry?>" height="290" width="290"></td>
                                        <td><a href="index.php?pass=<?php echo $pass?>&img=<?php echo $entry?>"><i class="fa fa-trash" style="color:red"></i></td>
                                    </tr>
                                <?php }
                            }
                        
                            closedir($handle);
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>