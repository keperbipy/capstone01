<!DOCTYPE html>
<html lang="en">

<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/tasks.css">
    <link rel="stylesheet" href="../styles/sidebarStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Tasks</title>
    <script src="../scripts/tasks.js" defer></script>
    <script src="../scripts/sidebar.js" defer></script>

</head>

<body>
    
    <?php include '../html/sidebar.html';?>

    <div class="tasksPageHeader">
        <h1>Tasks</h1>
        <div id="last">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            +
          </button>
        </div>
    </div>
    <div class="tasksPageBody">

    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add List...</h4>
                </div>
                <div class="modal-body">
                    <input type="text" name="" id="newTitle" placeholder="Enter Title">
                    <button type="button" class="btn btn-primary" style="float:right" id="saveModal">Save changes</button>
                </div>

            </div>
        </div>
    </div>
            
    <?php include '../html/footer.html';?>

</body>
<script>
        $("#sidebar").css("background-color", localStorage.getItem('sidecolor'));
</script>
</html>