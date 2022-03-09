<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MongoDB: the application data platform</title>
    <link rel="stylesheet" href="asset/style1.css">

</head>
<body>
    <div class="vert">
        <a class="entete" href="https://www.mongodb.com/world-2022-call-for-speakers?tck=mdb_call_for_speakers_banner"> <span class="event">event</span> Interested in speaking at MongoDB World 2022? Become a speaker >></a>
    </div>
    <nav class="exemple">
        <div class="test" id="test">
            <a class="nava">
                <img class="logo" src="asset/img/img.svg" alt="MongoDB Logo">
            </a>
            <a class="nava" href="asset/product.html">Products</a>
            <a class="nava" href="asset/solution.html">Solutions</a>
            <a class="nava" href="asset/resource.html">Resources</a>
            <a class="nava" href="asset/company.html">Company</a>
            <a class="nava" href="asset/pricing.html">Pricing</a>
            <a class="search" href="asset/"><img src="search.png"></a>
            <a class="nava" href="asset/singin.html">Sign In</a>
            <a class="navab" href="tryfree.html" >Try Free</a>
        </div>
    </nav>

    <!ajout de JS pour gerer le scoll>
    <script>
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            var element = document.getElementById("test");
            if (document.body.scrollTop > 38|| document.documentElement.scrollTop > 38) 
            {
                element.classList.add("scroll");
            } 
            else 
            {
                element.classList.remove("scroll");
            }
        }
    </script>

    <header>
        <a href="asset/img/img1.svg"><img id="img1" src="asset/img/img1.svg"></a> 
        <div class="debut">
            <div class="dv1">     
                <div class="new">New</div>
                <div class="text">Introducing native support for time series data</div> <a class="learn" href="asset/learn.html">—<span class="rien">Learn more</span>
                    <span class="rien">></a> </div>
                <div class="text1">
                    <div class="text2">Build faster.
                                    </br>Build smarter.
                    ​​</div> 
                    Get your ideas to market faster with an application data platform built on the leading modern database. 
                    Support transactional, search, analytics, and mobile use cases while using a common query interface and the data model developers love.
                </div>
            <a href="start.html" class="bouton">Start Free</a>
            <a href="question.html" class="learn" class="question"> Questions? Talk to us</a>
            </div>
        </div>
    </header>
    
    <div class="text3">TRUSTED BY THOUSANDS OF ORGANIZATIONS INCLUDING</div>
    <img alt="Bosch logo" src="asset/img/img2.svg">
    <img alt="Cisco logo" src="asset/img/img3.svg">
    <img alt="Humanitix logo" src="asset/img/img4.svg">
    <img alt="Toyota logo" src="asset/img/img5.svg">
    <div class="text4">Working with data doesn’t <br/> need to be hard</div>
    <div class="text5" > Our guiding principle is to help developers solve their data challenges.</br> Here’s what you can do with MongoDB.</div>

    <div class="bloc">
        <div class="text7">
            <img alt="general_features_build_faster" src="asset/img/img6.svg">
            <h2>Build Faster</h2>
            Ship and iterate 3–5x faster with our flexible document data model and a unified query interface for any use case.</div>
        <div class="text7">
            <img alt="general_features_scale_bigger" src="asset/img/img7.svg">
            <h2>Further</h2> 
            Whether it’s your first customer or 20 million users around the world, meet your performance SLAs in any environment.</div>
        <div class="text7">
            <img alt=" general_security" src="asset/img/img8.svg">
            <h2>Sleep Better</h2>
            Easily ensure high availability, protect data integrity, and meet the security and compliance standards for your mission-critical workloads.</div>
    </div>

    
        <div class="text4" >Fully managed in the cloud</div>
		<div class="text5">Start in seconds and scale to millions with our cloud services</div>
		<a href="www.mongobd.com/atlas" ><div  class="vide"></div></a>
		<a href="www.mongobd.com/realm" ><div  class="vide"></div></a>
		<div class="vide2">
			<img src="asset/img/product_family.png" alt="product_family_realm">
		</div>
		<div class="vide2">
			<div class="realm"> REALM</div>
			<div class="work">Work with data at the edge</div>
		</div>
		<div class="text4">Self-managed in any environment</div>
		<div class="text5">Run MongoDB anywhere, from your laptop to your data center</div>
</body> 
</html>
