<!doctype html>
<html lang="en">

<head>
    <?php $title = "Home" ?>
    <?php include("inc/head.php"); ?>
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <?php include("inc/navbar.php"); ?>

    <?php include("inc/header.php"); ?>

    <div class="container-fluid">
        <div class="image-container">
            <div class="text">Make A Difference</div>
        </div>
    </div>
    <!--card deck that gives some description of the teams-->
    <main>
        <div class="container-fluid">
            <h2 class="display-4 text-center">Explore Some of Our Volunteer Locations</h2>
            <div class="card-deck">
                <div class="card">
                    <img src="images/animalShelter-sm.jpg" class="card-img-top" alt="Animal Shelter">
                    <div class="card-body">
                        <h3 class="card-title">Animal Shelter</h3>
                        <p class="card-text">The West Hartford Animal Shelter is in need of volunteers! If you'd like to help us play with dogs and cats, and keep them cared for until they find forever homes, sign up here!</p>
                        <a href="search.php" class="btn btn-secondary stretched-link">Want to volunteer here?</a>
                        <p class="card-text"><small class="text-muted">123 Main St, West Hartford, CT 06115</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/playgrounds-sm.jpg" class="card-img-top" alt="Playgrounds">
                    <div class="card-body">
                        <h3 class="card-title">Playgrounds</h3>
                        <p class="card-text">One of our early projects was helping clean and maintain West Hartford's playgrounds. This project is usually run by teen volunteers!</p>
                        <a href="about.php" class="btn btn-secondary stretched-link">Learn more about our projects</a>
                        <p class="card-text"><small class="text-muted">West Hartford, CT</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/trails-sm.jpg" class="card-img-top" alt="Trails and Bike Paths">
                    <div class="card-body">
                        <h3 class="card-title">Trails & Bike Paths</h3>
                        <p class="card-text">The West Harford Trails and Bike Paths are a newer project for West Hartford Cares. Volunteers here clear paths, fill woodchips, and maintain the trails and bike paths in town.</p>
                        <a href="about.php" class="btn btn-secondary stretched-link">Learn more about our projects</a>
                        <p class="card-text"><small class="text-muted">West Hartford, CT</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/westmoor-sm.jpg" class="card-img-top" alt="Westmoor Park">
                    <div class="card-body">
                        <h3 class="card-title">Westmoor Park</h3>
                        <p class="card-text">Westmoor Park is both a farm and a community learning center. Our volunteers help with planting and maintaining the gardens, caring for animals, and general maintenance</p>
                        <a href="search.php" class="btn btn-secondary stretched-link">Want to volunteer here?</a>
                        <p class="card-text"><small class="text-muted">119 Flagg Rd, West Hartford, CT 06117</small></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include("inc/footer.php"); ?>
    <?php include("inc/scriptsinclude.php"); ?>
</body>

</html>