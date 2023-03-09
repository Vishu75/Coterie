<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COTERIE HomePage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <a href="#" class="logo">COTERIE</a>
        <nav class="nav-items">

            <a href="#">About</a>
            <a href="#">Suggestions</a>
            <a href="ex.html"><input class="submit-btn" type="submit" value="LogIn&Register"></a>
        </nav>
    </header>
    <main>
        <div class="intro">
            <h1>WELCOME TO - COTERIE <br>
            <h2>A &nbsp;&nbsp;    d e v  &nbsp;&nbsp;    c o m m u n i t y</h2> </h1>
            <p> <h3>A platform </h3> 
            <h4> &nbsp; for the developer
                <br>   &nbsp; by the developer<br>
                 &nbsp; with the developer.</h4></p>
            </p>
            <button>Learn More</button>
        </div>
        <div class="achievements">
            <div class="work">
                <i class="fas fa-atom"></i>
                <p class="work-heading"></p> <a href="display.php">Projects</a></p>
                
                <p class="work-text"> With many developer one can complete any project with
                    the help of others.</p>
            </div>
            <div class="work">
                <i class="fas fa-skiing"></i>
                <p class="work-heading">Skills</p>
                <p class="work-text">Doesn't need all the skills for the complete for
                    project</p>
            </div>
            <div class="work">
                <i class="fas fa-ethernet"></i>
                <p class="work-heading">Network</p>
                <p class="work-text">Build network with the peoples and make synergy</p>
            </div>
        </div>
        <div class="about-me">
            <div class="about-me-text">
                <h2>About the website</h2>
                <p>This web portal is named as “COTERIE”. As name itself describe the purpose of this portal
                    which means ‘people with common interests who do things together in small group’. As
                    name describes this will be a platform to form a team of developers to work on together.</p>
            </div>
        </div>
    </main>

    <div class="post-body">
        <div class="container">
            <div class="wrapper">
                <section class="post">
                    <header>COTERIE</header>
                    <form action="#">
                        <div class="content">
                            <!-- <img src="cwn.png" alt="logo"> -->
                            <div class="details">
                                <p>COTERIE</p>
                                <div class="privacy">
                                    <i class="fas fa-user-friends"></i>
                                    <span>Friends</span>
                                    <i class="fas fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div>
                                <textarea placeholder="BRIEF" spellcheck="false"
                                required name="briefme"></textarea>
                                <textarea placeholder="DETAILS" spellcheck="false"
                                required name="detailme"></textarea>
                                <textarea placeholder="CONTACT" spellcheck="false"
                                required name="contactme"></textarea>
                            </div>
                            <div>
                                <button>Post</button>
                                
                            </div>
                        </form>
                       
                    </form>
                </section>
                <section class="audience">
                    <header>
                        <div class="arrow-back"><i class="fas fa-arrow-left"></i></div>
                        <p>Select Audience</p>
                    </header>
                    <div class="content">
                        <p>Who can see your post?</p>
                        <span>Your post will show up in News Feed, on your profile and in search results.</span>
                    </div>
                    <ul class="list">
                        <li>
                            <div class="column">
                                <div class="icon"><i class="fas fa-globe-asia"></i></div>
                                <div class="details">
                                    <p>Public</p>
                                    <span>Anyone on or off COTERIE </span>
                                </div>
                            </div>
                            <div class="radio"></div>
                        </li>
                        <li class="active">
                            <div class="column">
                                <div class="icon"><i class="fas fa-user-friends"></i></div>
                                <div class="details">
                                    <p>Friends</p>
                                    <span>Your friends on COTERIE</span>
                                </div>
                            </div>
                            <div class="radio"></div>
                        </li>
                        <li>
                            <div class="column">
                                <div class="icon"><i class="fas fa-user"></i></div>
                                <div class="details">
                                    <p>Specific</p>
                                    <span>Only show to some friends</span>
                                </div>
                            </div>
                            <div class="radio"></div>
                        </li>
                        <li>
                            <div class="column">
                                <div class="icon"><i class="fas fa-lock"></i></div>
                                <div class="details">
                                    <p>Only me</p>
                                    <span>Only you can see your post</span>
                                </div>
                            </div>
                            <div class="radio"></div>
                        </li>
                        <li>
                            <div class="column">
                                <div class="icon"><i class="fas fa-cog"></i></div>
                                <div class="details">
                                    <p>Custom</p>
                                    <span>Include and exclude friends</span>
                                </div>
                            </div>
                            <div class="radio"></div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="copy">&copy; 2022 Developer</div>
        <div class="bottom-links">
            <div class="links">
                <span>More Info</span>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#"></a>
            </div>
            <div class="links">
                <span>Social Links</span>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script>
        const container = document.querySelector(".container"),
            privacy = container.querySelector(".post .privacy"),
            arrowBack = container.querySelector(".audience .arrow-back");


        privacy.addEventListener("click", () => {
            container.classList.add("active");
        });


        arrowBack.addEventListener("click", () => {
            container.classList.remove("active");
        });
    </script>
</body>

</html>

<?php
$bm=$_GET['briefme'];
$dm=$_GET['detailme'];
$cm=$_GET['contactme'];

$query = "INSERT INTO POSTING VALUES ('$bm', '$dm', '$cm')";
$data = mysqli_query($conn, $query);

if($data)
{
    echo "data inserted";
}
else
{
    echo "failed inserting";
}

?>