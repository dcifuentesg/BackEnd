<?php include("db.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamite Team</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">Dynamite Team</a>
        </div>
    </nav>

    <main class="container p-4">
        <div class="row">
            <div class="col-md-4">
            <!-- MESSAGES -->

            <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } ?>

            <!-- ADD TASK FORM -->
            <div class="card card-body">
                <form action="save.php" method="POST">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Comment Title" autofocus>
                </div>
                <div class="form-group">
                    <textarea name="description" rows="2" class="form-control" placeholder="Comment Description"></textarea>
                </div>
                <input type="submit" name="save_comment" class="btn btn-success btn-block" value="Save Comment">
                </form>
            </div>
            </div>
            <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $query = "SELECT * FROM comment";
                $result_tasks = mysqli_query($conn, $query);    

                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $row['id']?>" class="bx bx-edit">
                        <i class="fas fa-marker"></i>
                    </a>
                    <a href="delete.php?id=<?php echo $row['id']?>" class="bx bx-trash-alt">
                        <i class="far fa-trash-alt"></i>
                    </a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </main>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>