<!doctype html>
<html lang="en">

<head>
    <?php $title = "Edit/Remove Team" ?>
    <?php include("inc/head.php"); ?>
    <link rel="stylesheet" href="styles/editteaminfo.css">
</head>

<body>
    <?php include("inc/navbar.php"); ?>

    <?php include("inc/header.php"); ?>

    <main>
        <div class="container">
            <h2 class="display-3 text-center">Edit Your Team</h2>
            <!--Form to edit or remove a team-->
            <form id="editTeamForm" name="editTeamForm" action="editteaminfo.php" method="POST">
                <div class="form-group row">
                    <label for="teamname" class="col-sm-3 col-form-label">Team Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="teamname" name="teamname" value="" required>
                    </div>
                </div>
                <!--this dropdown is dynamically created-->
                <div class="form-group row">
                    <label for="leaguecode" class="col-sm-3 col-form-label">Volunteer Location</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="leaguecode" name="leaguecode">
                            <option value="chooseOne">Choose a Location</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="managername" class="col-sm-3 col-form-label">Manager's Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="managername" name="managername" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="managerphone" class="col-sm-3 col-form-label">Manager's Phone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="managerphone" name="managerphone" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="manageremail" class="col-sm-3 col-form-label">Manager's Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="manageremail" name="manageremail" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="maxteammembers" class="col-sm-3 col-form-label">Maximum Number of Volunteers</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="maxteammembers" name="maxteammembers" value=""
                            min="1" max="50" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="minmemberage" class="col-sm-3 col-form-label">Minimum Volunteer Age</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="minmemberage" name="minmemberage" value="" min="5"
                            max="100" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="maxmemberage" class="col-sm-3 col-form-label">Maximum Volunteer Age</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="maxmemberage" name="maxmemberage" value="" min="5"
                            max="100" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-3 pt-0">Team Gender</label>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="teamgender" id="Male" value="Male">
                            <label class="form-check-label" for="Male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="teamgender" id="Female" value="Female">
                            <label class="form-check-label" for="Female">Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="teamgender" id="Any" value="Any">
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
                <!--buttons to edit team, remove team, and go back-->
                <button type="button" class="btn btn-light blueBackground" id="confirmEdit">Edit My Team!</button>
                <a role="button" class="btn btn-secondary" id="cancel" href="#">Wait, not yet!</a>
                <a role="button" class="btn btn-light blueBackground" id="toTeamDetails" href="#">Go to Team
                    Details</a>
                <!--Button to trigger modal-->
                <button type="button" class="btn btn-primary" id="areYouSure" data-toggle="modal"
                    data-target="#removeModal">Remove My Team</button>
            </form>

            <!--Modal-->
            <div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="removeModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Remove Team</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to remove this team? Volunteers on this team will be deleted also.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Take Me
                                Back</button>
                            <button type="button" class="btn btn-primary" id="remove">Yes, Remove It</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end modal-->

            <!--dynamically created table with the volunteer's information-->
            <div id="teamMembers"></div>
            <table id="memberTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Volunteer's Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Edit?</th>
                        <th>Remove?</th>
                    </tr>
                </thead>
                <tbody id="memberTableBody">
                </tbody>
            </table>
        </div>
    </main>

    <?php include("inc/footer.php"); ?>
    <?php include("inc/scriptsinclude.php"); ?>
    <!--My JavaScript-->
    <script src="scripts/validate.js"></script>
    <script src="scripts/editteaminfo.js"></script>
</body>

</html>