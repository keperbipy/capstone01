<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capstone</title>
    <link rel="stylesheet" href="../styles/sidebarStyle.css">
    <link rel="stylesheet" href="../styles/cardstyle.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../scripts/sidebar.js" defer></script>

</head>

<body>
    
    <?php include '../html/sidebar.html';?>

    <div>
        <div class="ones">
            <div class="contentCard">
                <div class="cardHeader" id="availHeader">
                    <span>My availability</span>
                </div>
                <div class="cardBody" id="availBody">
                    <div class="availDay">
                        <div class="availDayHeader">
                            Monday
                        </div>
                        <div class="availDayBody">
                            <form action="post" style="display:table">
                                <p>
                                    <label for="monAvail"> Unavailable:&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                                    <input type="checkbox" id="monAvail" name="monAvail" value="noMon">
                                </p>
                                <p>
                                    <label for="monStrt">Available from: </label>
                                    <input type="time" id="appt" name="monStrt" min="06:00" max="23:59" required>
                                </p>
                                <p>
                                    <label for="monEnd">Until:</label>
                                    <input type="time" id="appt" name="monEnd" min="06:00" max="23:59" required>
                                </p>


                            </form>
                        </div>
                    </div>
                    <div class="availDay">
                        <div class="availDayHeader">
                            Tuesday
                        </div>
                        <div class="availDayBody">
                            <form action="post" style="display:table">
                                <p>
                                    <label for="monAvail"> Unavailable:&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                                    <input type="checkbox" id="monAvail" name="monAvail" value="noMon">
                                </p>
                                <p>
                                    <label for="monStrt">Available from: </label>
                                    <input type="time" id="appt" name="monStrt" min="06:00" max="23:59" required>
                                </p>
                                <p>
                                    <label for="monEnd">Until:</label>
                                    <input type="time" id="appt" name="monEnd" min="06:00" max="23:59" required>
                                </p>


                            </form>
                        </div>
                    </div>
                    <div class="availDay">
                        <div class="availDayHeader">
                            Wednesday
                        </div>
                        <div class="availDayBody">
                            <form action="post" style="display:table">
                                <p>
                                    <label for="monAvail"> Unavailable:&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                                    <input type="checkbox" id="monAvail" name="monAvail" value="noMon">
                                </p>
                                <p>
                                    <label for="monStrt">Available from: </label>
                                    <input type="time" id="appt" name="monStrt" min="06:00" max="23:59" required>
                                </p>
                                <p>
                                    <label for="monEnd">Until:</label>
                                    <input type="time" id="appt" name="monEnd" min="06:00" max="23:59" required>
                                </p>

                            </form>
                        </div>
                    </div>
                    <div class="availDay">
                        <div class="availDayHeader">
                            Thursday
                        </div>
                        <div class="availDayBody">
                            <form action="post" style="display:table">
                                <p>
                                    <label for="monAvail"> Unavailable:&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                                    <input type="checkbox" id="monAvail" name="monAvail" value="noMon">
                                </p>
                                <p>
                                    <label for="monStrt">Available from: </label>
                                    <input type="time" id="appt" name="monStrt" min="06:00" max="23:59" required>
                                </p>
                                <p>
                                    <label for="monEnd">Until:</label>
                                    <input type="time" id="appt" name="monEnd" min="06:00" max="23:59" required>
                                </p>


                            </form>
                        </div>
                    </div>
                    <div class="availDay">
                        <div class="availDayHeader">
                            Friday
                        </div>
                        <div class="availDayBody">
                            <form action="post" style="display:table">
                                <p>
                                    <label for="monAvail"> Unavailable:&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                                    <input type="checkbox" id="monAvail" name="monAvail" value="noMon">
                                </p>
                                <p>
                                    <label for="monStrt">Available from: </label>
                                    <input type="time" id="appt" name="monStrt" min="06:00" max="23:59" required>
                                </p>
                                <p>
                                    <label for="monEnd">Until:</label>
                                    <input type="time" id="appt" name="monEnd" min="06:00" max="23:59" required>
                                </p>


                            </form>
                        </div>
                    </div>
                    <div class="availDay">
                        <div class="availDayHeader">
                            Saturday
                        </div>
                        <div class="availDayBody">
                            <form action="post" style="display:table">
                                <p>
                                    <label for="monAvail"> Unavailable:&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                                    <input type="checkbox" id="monAvail" name="monAvail" value="noMon">
                                </p>
                                <p>
                                    <label for="monStrt">Available from: </label>
                                    <input type="time" id="appt" name="monStrt" min="06:00" max="23:59" required>
                                </p>
                                <p>
                                    <label for="monEnd">Until:</label>
                                    <input type="time" id="appt" name="monEnd" min="06:00" max="23:59" required>
                                </p>


                            </form>
                        </div>
                    </div>
                    <div class="availDay">
                        <div class="availDayHeader">
                            Sunday
                        </div>
                        <div class="availDayBody">
                            <form action="post" style="display:table">
                                <p>
                                    <label for="monAvail"> Unavailable:&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                                    <input type="checkbox" id="monAvail" name="monAvail" value="noMon">
                                </p>
                                <p>
                                    <label for="monStrt">Available from: </label>
                                    <input type="time" id="appt" name="monStrt" min="06:00" max="23:59" required>
                                </p>
                                <p>
                                    <label for="monEnd">Until:</label>
                                    <input type="time" id="appt" name="monEnd" min="06:00" max="23:59" required>
                                </p>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="scheduleContainer">
        <div class="ones">
            <div class="contentCard">
                <div class="cardHeader"><span>Schedule</span></div>
                <div class="cardBody">
                    <div class="tableFilter">
                        <div class="filterButtonsContainer">
                            <ul>
                                <li>All</li>
                                <li>Mgr</li>
                                <li>FoH</li>
                                <li>BoH</li>
                            </ul>

                            <ul>
                                <li>All</li>
                                <li>Day</li>
                                <li>Night</li>
                            </ul>
                        </div>
                        <div class="tableSearch">
                            <input type="text">
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                    </div>

                    <table>
                        <tr>
                            <th> <input type="checkbox" id="all" name="all" value="all"></th>
                            <th>Name</th>
                            <th>Wed.</th>
                            <th>Thr.</th>
                            <th>Fri.</th>
                            <th>Sat.</th>
                            <th>Sun.</th>
                            <th>Mon.</th>
                            <th>Tue.</th>
                        </tr>

                        <tr>
                            <td> <input type="checkbox" id="all" name="all" value="all"></td>
                            <td>Wayne D</td>
                            <td>Open</td>
                            <td>4-C</td>
                            <td>0-4</td>
                            <td>X</td>
                            <td>O-4</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox" id="all" name="all" value="all"></td>
                            <td>Erin Q</td>
                            <td>Open</td>
                            <td>4-C</td>
                            <td>0-4</td>
                            <td>X</td>
                            <td>O-4</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox" id="all" name="all" value="all"></td>
                            <td>Ari W</td>
                            <td>Open</td>
                            <td>4-C</td>
                            <td>0-4</td>
                            <td>X</td>
                            <td>O-4</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox" id="all" name="all" value="all"></td>
                            <td>Jenna S</td>
                            <td>Open</td>
                            <td>4-C</td>
                            <td>0-4</td>
                            <td>X</td>
                            <td>O-4</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox" id="all" name="all" value="all"></td>
                            <td>Boone P</td>
                            <td>Open</td>
                            <td>4-C</td>
                            <td>0-4</td>
                            <td>X</td>
                            <td>O-4</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox" id="all" name="all" value="all"></td>
                            <td>Abby B</td>
                            <td>Open</td>
                            <td>4-C</td>
                            <td>0-4</td>
                            <td>X</td>
                            <td>O-4</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox" id="all" name="all" value="all"></td>
                            <td>Josh M</td>
                            <td>Open</td>
                            <td>4-C</td>
                            <td>0-4</td>
                            <td>X</td>
                            <td>O-4</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                    </table>
                    <div class="tableFooter">
                        Sorting the days by ascending descending by time worked?
                    </div>
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