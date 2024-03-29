<!doctype html>
<html lang="en">

<head>
    <?php $title = "Details" ?>
    <?php include("inc/head.php"); ?>
    <link rel="stylesheet" href="styles/details.css">
</head>

<body>
    <?php include("inc/navbar.php"); ?>

    <!--header-->
    <?php include("inc/header.php"); ?>

    <main>
        <div class="container">
            <h2 class="display-3 text-center" id="TeamName">&nbsp;</h2>
            <!--card deck that includes (here) the dynamically created card with manager info-->
            <div class="card-deck">
                <div class="card">
                    <div class="card-body" id="teamManager">
                    </div>
                </div>
                <!--(here) the dynamically created card with the team details-->
                <div class="card">
                    <div class="card-body" id="teamDetails">
                    </div>
                </div>
            </div>

            <!--dynamically created table with volunteers' info-->
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
                    </tr>
                </thead>
                <tbody id="memberTableBody">
                </tbody>
            </table>
            <!--buttons to sign up and go back-->
            <a role="button" class="btn btn-light blueBackground" id="signUp" href="#">Sign Me Up!</a>
            <a role="button" class="btn btn-secondary" id="backToTeams" href="#">Back to Teams</a>
            <a role="button" class="btn btn-primary" id="editTeam" href="#">Edit this Team</a>
        </div>
    </main>

    <?php include("inc/footer.php"); ?>
    <?php include("inc/scriptsinclude.php"); ?>
    <!--My JavaScript-->
    <script src="scripts/details.js"></script>
</body>

</html>