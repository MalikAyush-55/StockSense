<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "stylehome.css">
    <style>
    .homepageContainers {
        display:flex;
        padding: 10px; 
    }

    .homepageContainers a {
        color: white; 
        text-decoration: none; 
        padding: 5px 10px; 
        border-radius: 5px;
        background-color: #f690bf; 
    }
</style>
</head>
<body>
    <div class = "header"></div>
    <div class = "banner">
        <div class="homepageContainers">
            <a href = "Login.php">Login</a>
        </div>
        <div class="homepageContainer">
        <div class = "bannerHeader">
        <h1>STOCKSENSE</h1>
        <p class = "bannerTagLine">Inventory Management system</p>
        </div>
        <p>Keep a record of your goods in the entire supply chain from purchasing to production to end sales.</p>
        <div class="bannerIcons">
         <a href=""><i class="fa-brands fa-apple"></i></a>
         <a href=""><i class="fa-brands fa-android"></i></a>
         <a href=""><i class="fa-brands fa-windows"></i></a>
        </div>
        </div>
       
    </div>
    <div class="homepageContainer">
    <div class="homepageFeatures">
        <div class="homepagefeature">
            <span class = "featureicon"><i class = "fa fa-gear"></i></span>
            <h1 class = "featuretitle">Greater visibility</h1>
            <p class ="featuredescription">You don’t have to manually check how much stock is available every time you need to know.</p>
            
        </div>
   
        <div class="homepagefeature">
            <span class = "featureicon"><i class = "fa fa-star"></i></span>
            <h1 class = "featuretitle">Meet customer demand</h1>
            <p class ="featuredescription">An accurate system can help you reduce stockouts</p>
            
        </div>
    
  
        <div class="homepagefeature">
            <span class = "featureicon"><i class = "fa fa-globe"></i></span>
            <h1 class = "featuretitle">Improves workflow efficiency</h1>
            <p class ="featuredescription">Provide an effective way of monitoring the true value and profitability of your business.</p>
            
        </div>
    </div>
    </div>
    <div class="homepagenotified">
    <div class="homepageContainer">
    <div class="homepagenotifiedcontainer">
        <div class="emailform">
            <h3>Get notified of any update</h3>
            <p>Automating the process of updating stock levels and inputting data to track goods through the supply chain. Fulfil customer orders from multiple sales channels; and streamline dozens of other common inventory control processes.
            </p>
            <form action = "">
                <div class="formcontainer">
                <input type ="text" placeholder = "Email Address">
                <button>Notify</button>
                </div>
            </form>
        </div>
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Ue8oCPQjU8o?si=pfIr68AqDm3SBO3H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" width = "500px" height = "500px" frameborder = "0" allowfullscreen></iframe>

        </div>
        </div>
    </div>
    </div>
    <div class="socials">
        <div class="homepageContainer">
            <h3 class = "social">Say hi and get in touch</h3>
            <div class="socialiconcontainer">
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-pinterest"></i></a>
                <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>

        </div>
    </div>
</body>
</html>