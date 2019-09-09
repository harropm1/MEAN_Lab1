<!doctype html>
<html lang="en">

<head>
    <?php $title = "Sign Up" ?>
    <?php include("inc/head.php"); ?>
    <link rel="stylesheet" href="styles/signup.css">
</head>

<body>
    <?php include("inc/navbar.php"); ?>

    <?php include("inc/header.php"); ?>
    
    <main>
        <div class="container">
            <h2 class="display-3 text-center">Join Our Team</h2>
            <!--Form to sign up for team-->
            <form id="signupForm" name="signupForm" action="signup.html" method="POST">
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
                <!--This is dynamically created because I hate having such long HTML, just for ages-->
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
                <!--buttons to sign up and go back-->
                <button type="button" class="btn btn-light blueBackground" id="signMeUp">Sign Me Up!</button>
                <a role="button" class="btn btn-secondary" id="cancel" href="#">Wait, not yet!</a>
                <a role="button" class="btn btn-primary" id="backToDetails" href="#">Back to Details</a>
            </form>
        </div>
    </main>
    
    <?php include("inc/footer.php"); ?>
    <?php include("inc/scriptsinclude.php"); ?>
    <!--My JavaScript-->
    <script src="scripts/validate.js"></script>
    <script src="scripts/signup.js"></script>
</body>

</html>