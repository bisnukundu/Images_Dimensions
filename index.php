<?php

if (isset($_REQUEST["btn"])) {
    $img = $_FILES["img"]["tmp_name"];
    if ($img) {
        list($width, $height, $type, $attr) = getimagesize($img);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Check Height & Width</title>
</head>

<body class="bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="display-6 text-white text-center mt-5">Check your image Height and Width</h4>
                <form class="mt-5" action="" method="POST" enctype="multipart/form-data">

                    <div class="custom-file mb-3">
                        <input name="img" type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <button name="btn" type="submit" class="btn btn-primary btn-block">Check W&H</button>
                </form>
            </div>
            <!-- Show Result  -->
            <?php
            if (isset($_REQUEST["btn"])) {
                if ($img) {
            ?>
                    <div class="row m-auto">
                        <div class="col-12">
                            <table class="table mt-5 table-bordered text-white">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Width</th>
                                        <td><?php echo "{$width} Pixels"; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Height</th>
                                        <td><?php echo "{$height} Pixels";  ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>

    </div>


</body>

</html>