<!doctype html>
<html lang="en">

<head>
    <?php $title = "Edit/Remove Member" ?>
    <?php include("inc/head.php"); ?>
    <link rel="stylesheet" href="styles/editmember.css">
</head>

<body>
    <?php include("inc/navbar.php"); ?>

    <?php include("inc/header.php"); ?>

    <main>
        <div class="container">
            <h2 class="display-3 text-center">Edit or Remove Volunteer</h2>
            <!--Form to edit or remove a member from a team-->
            <form id="editMemberForm" name="editMemberForm" action="editmember.php" method="POST">
                <div class="form-group row">
                    <label for="TeamId" class="col-sm-2 col-form-label">Team Id</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="TeamId" name="TeamId" value="" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="membername" class="col-sm-2 col-form-label">Volunteer Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="membername" name="membername" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contactname" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="contactname" name="contactname" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" value="" required>
                    </div>
                </div>
                <!--This is dynamically created because I hate having such long HTML-->
                <div class="form-group row">
                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="age" name="age">
                            <option value="chooseOne">Select Your Age</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 pt-0">Gender</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="Male" value="Male">
                            <label class="form-check-label" for="Male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="Female" value="Female">
                            <label class="form-check-label" for="Female">Female</label>
                        </div>
                    </div>
                </div>
                <!--these are the divs for the error messages-->
                <div id="msgDiv"></div>
                <div>
                    <ul id="errorMessages">
                    </ul>
                </div>
                <!--buttons to edit member, remove member, and go back-->
                <button type="button" class="btn btn-light blueBackground" id="edit">Edit Member</button>
                <!-- Button to trigger modal -->
                <button type="button" class="btn btn-primary" id="areYouSure" data-toggle="modal"
                    data-target="#removeModal">Remove Member</button>
                <a role="button" class="btn btn-secondary" id="cancel" href="#">Wait, not yet!</a>
                <a role="button" class="btn btn-primary" id="backToDetails" href="#">Back to Details</a>
            </form>

            <!-- Modal -->
            <div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="removeModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Remove Volunteer</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to remove this volunteer?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Take Me
                                Back</button>
                            <button type="button" class="btn btn-primary" id="remove">Yes, Remove Them</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of modal-->
        </div>
    </main>

    <?php include("inc/footer.php"); ?>
    <?php include("inc/scriptsinclude.php"); ?>
    <!--My JavaScript-->
    <script src="scripts/validate.js"></script>
    <script src="scripts/editmember.js"></script>
</body>

</html>