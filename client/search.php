<!doctype html>
<html lang="en">

<head>
    <?php $title = "Search" ?>
    <?php include("inc/head.php"); ?>
    <link rel="stylesheet" href="styles/search.css">
</head>

<body>
    <?php include("inc/navbar.php"); ?>

    <?php include("inc/header.php"); ?>

    <main>
        <div class="container">
            <h2 class="display-3 text-center">Look for Volunteer Opportunities</h2>
            <form id="findTeams" name="findTeams" action="search.php" method="GET">
                <!--dropdown/view All button in a fieldset-->
                <fieldset class="container border border-secondary p-3 rounded col-6">
                    <legend class="font-weight-light bg-secondary text-center text-white w-50 rounded">Search Volunteer
                        Teams
                    </legend>
                    <div class="sortByCategory form-group">
                        <label for="locationSelect">Choose a volunteer location</label>
                        <select class="form-control" id="locationSelect" name="locationSelect">
                            <option value="Choose one">Choose a location</option>
                        </select>
                        <p class="text-center orPara">-- or --</p>
                        <div class="text-center">
                            <button type="button" class="btn btn-light blueBackground w-50" id="viewAll">View All
                                Volunteer Teams</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            
            <!--table with basic team details-->
            <table id="teamTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Location</th>
                        <th>Team Name</th>
                        <th>Manager</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                </tbody>
            </table>
            <!--button to create new team-->
            <a class="btn btn-light blueBackground" id="addTeam" href="#">Create a New Team</a>
        </div>
    </main>

    <?php include("inc/footer.php"); ?>
    <?php include("inc/scriptsinclude.php"); ?>
    <!--My JavaScript-->
    <script src="scripts/search.js"></script>
</body>

</html>