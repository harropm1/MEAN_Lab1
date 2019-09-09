    <!--nav bar-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item <?php if($title == "About Us"){echo "active";}?>">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item <?php if($title == "Search"){echo "active";}?>">
                    <a class="nav-link" href="search.php">Look for Volunteer Opportunities</a>
                </li>
            </ul>
        </div>
    </nav>