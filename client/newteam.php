<!doctype html>
<html lang="en">

<head>
    <?php $title = "Add a Team" ?>
    <?php include("inc/head.php"); ?>
    <link rel="stylesheet" href="styles/newteam.css">
</head>

<body>
    <?php include("inc/navbar.php"); ?>

    <?php include("inc/header.php"); ?>

    <main>
        <div class="container">
            <h2 class="display-3 text-center">Make a New Team</h2>
            <!--Form to create a new team-->
            <form id="newteamForm" name="newteamForm" action="newteam.php" method="POST">
                <div class="form-group row">
                    <label for="teamname" class="col-sm-2 col-form-label">Team Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="teamname" name="teamname" value="" required>
                    </div>
                </div>
                <!--this dropdown is dynamically created-->
                <div class="form-group row">
                    <label for="leaguecode" class="col-sm-2 col-form-label">Volunteer Location</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="leaguecode" name="leaguecode">
                            <option value="chooseOne">Choose a Location</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="managername" class="col-sm-2 col-form-label">Manager's Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="managername" name="managername" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="managerphone" class="col-sm-2 col-form-label">Manager's Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="managerphone" name="managerphone" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="manageremail" class="col-sm-2 col-form-label">Manager's Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="manageremail" name="manageremail" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="maxteammembers" class="col-sm-2 col-form-label">Maximum Number of Volunteers</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="maxteammembers" name="maxteammembers" value=""
                            min="1" max="50" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="minmemberage" class="col-sm-2 col-form-label">Minimum Volunteer Age</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="minmemberage" name="minmemberage" value="" min="5"
                            max="100" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="maxmemberage" class="col-sm-2 col-form-label">Maximum Volunteer Age</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="maxmemberage" name="maxmemberage" value="" min="5"
                            max="100" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 pt-0">Team Gender</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="teamgender" id="Male" value="Male">
                            <label class="form-check-label" for="Male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="teamgender" id="Female" value="Female">
                            <label class="form-check-label" for="Female">Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="teamgender" id="Any" value="Any" checked>
                            <label class="form-check-label" for="Any">Any</label>
                        </div>
                    </div>
                </div>
                <!--these are the divs for the error messages-->
                <div id="msgDiv"></div>
                <div>
                    <ul id="errorMessages">
                    </ul>
                </div>
                <!--buttons to create team and go back-->
                <button type="button" class="btn btn-light blueBackground" id="makeTeam">Create This Team!</button>
                <a role="button" class="btn btn-secondary" id="cancel" href="#">Wait, not yet!</a>
                <a role="button" class="btn btn-primary" id="backToSearch" href="#">Back to Search</a>
                <a role="button" class="btn btn-light blueBackground" id="toTeamDetails" href="#">Go to Team Details</a>
            </form>

        </div>
    </main>
    
    <?php include("inc/footer.php"); ?>
    <?php include("inc/scriptsinclude.php"); ?>
    <!--My JavaScript-->
    <script src="scripts/validate.js"></script>
    <script src="scripts/newteam.js"></script>
</body>

</html>