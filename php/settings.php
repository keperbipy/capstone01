<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capstone</title>
    <link rel="stylesheet" href="../styles/sidebarStyle.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../scripts/sidebar.js" defer></script>
    <link rel="stylesheet" href="../styles/cardstyle.css">
    <link rel="stylesheet" href="../styles/colorPick.css">
    <!-- The following line applies the dark theme -->
    <link rel="stylesheet" href="../styles/colorPick.dark.theme.css">
    <style>
        .picker {
            border-radius: 5px;
            width: 36px;
            height: 36px;
            cursor: pointer;
            -webkit-transition: all linear .2s;
            -moz-transition: all linear .2s;
            -ms-transition: all linear .2s;
            -o-transition: all linear .2s;
            transition: all linear .2s;
            border: thin solid #eee;
        }
        
        .picker:hover {
            transform: scale(1.1);
        }
    </style>

</head>

<body>
    
    <?php include '../html/sidebar.html';?>

     <div class="settingsContainer">
         <div class="profileCard">
             <img src="../images/default.png" alt="">
             <span>Josh Miller</span>
             <span>919-455-6590</span>
             <span>millerjr7@appstate.edu</span>
             <i class="far fa-edit"></i>

             <div class="colorSelector">
                            <div class="innerDiv">
                                <div class="picker" id="picker1"></div>

                            </div>
                        </div>
         </div>
     </div>

            
    <?php include '../html/footer.html';?>

</body>

<script src="../scripts/colorPick.js"></script>

<script>
    $("#picker1").colorPick({
        'initialColor': '#8e44ad',
        'palette': ["#1abc9c", "#16a085", "#2ecc71", "#27ae60", "#3498db", "#2980b9", "#9b59b6", "#8e44ad", "#34495e", "#2c3e50", "#f1c40f", "#f39c12", "#e67e22", "#d35400", "#e74c3c", "#c0392b", "#ecf0f1"],
        'onColorSelected': function() {
            console.log("The user has selected the color: " + this.color)
            this.element.css({
                'backgroundColor': this.color,
                'color': this.color
            });
            $("#sidebar").css("background-color",this.color);
            


        }
    });
</script>

</html>