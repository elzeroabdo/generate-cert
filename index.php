
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <div class="row col-md-6">
            <h1>generate certificate</h1>
            <form action="generate.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Enter your name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
            </div>
            <dev class="mb-3">
                <label for="signature" class="form-label">Enter your signature</label>
                <input type="text" class="form-control" name="signature" id="signature" aria-describedby="emailHelp">
            </dev><br> 
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    <br><br><br>
    <!-- show all files as table name, serticats no -->
    <div class="container">
        <h1>show all certificates</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Signature</th>
                    <th scope="col">Certificate</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $files = scandir("certificate");
                    for($a = 2; $a < count($files); $a++){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $a-1 ?></th>
                            <td><?php echo explode(".", $files[$a])[0] ?></td>
                            <td><?php echo explode(".", $files[$a])[0] ?></td>
                            <td><a href="certificate/<?php echo $files[$a] ?>" target="_blank">View</a></td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div> 


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>