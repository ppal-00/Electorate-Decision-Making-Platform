<?php 
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_username'])) {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/hs.js"></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electorate Decision Making Platform</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/w3.css">
    <style>
        /* Styles for header */
    header {
        background-color: #c66c27;
        color: #fff;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    header p {
        margin: 0;
        font-weight: bold;
    }
    </style>

</head>
<body>
<?php include('header.html'); ?>
    
<!-- <div id="header"></div> -->
<!-- Cascading Banners -->
<div class="col-sm-12 col-md-12 col-lg-12">
    <div class="cascading-banner">
        <img class="banner-image visible" src="img/G20.jpg" alt="Banner Image">
        <img class="banner-image" src="img/b2.jpg" alt="Banner Image">
        <img class="banner-image" src="img/b3.jpg" alt="Banner Image">
        <img class="banner-image" src="img/b4.jpg" alt="Banner Image">
        <img class="banner-image" src="img/b5.jpg" alt="Banner Image">
        <img class="banner-image" src="img/b6.jpg" alt="Banner Image">
        <div class="banner-buttons">
            <button class="prev" onclick="prevBanner()">&#10094;</button>
            <button class="next" onclick="nextBanner()">&#10095;</button>
        </div>    
    </div>
</div>

<h1><B>Welcome to Electorate Decision Making Platform!</B></h1>
<p>This page is dedicated to promoting fairness in politics based upon political historical records.</p>
<!-- Add more content as needed -->

<!-- <div class="stats-box">
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search...">
        <button onclick="search()">Search</button>
    </div>
</div> -->

  <!-- <form method="post" class="search-form">
    <label for="site-global-search" class="sr-only">Search Datasets Here</label> 
    <input id="site-global-search" type="text" placeholder="Search Catalog/Resources/API" class="form-control"> 
    <button title="Click here to Search Database" aria-label="Click here to Search Database" type="submit" class="btn btn-search btn-secondary">
        <span>Search</span>
    </button>
  </form> -->
  
<div class="list-group">
    <div class="home-search-analytic col-sm-12 col-md-3 col-lg-3">
        <img src="img/analy.png" alt=" analytichome image" class=""> 
        <a href="#" class="" title="Analytics" aria-label="Analytics Link" target="_self"><b>Analytics</b></a>
    </div> 
    <div class="col-sm-12 col-md-9 col-lg-9">
        <div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="list-item-content">
                        <a title="Resources" role="link" href="#" target="_self" class="">Area</a>
                        <span>1484 km<sup>2</sup></span> 
                    </div>  
                    <div class="list-item-content">
                        <a title="Visualizations" role="link" aria-label="Visualizations" href="#" target="_self" class="">GDP</a>
                            <span>467.4 billion</span>     
                    </div>
                    <div class="list-item-content">
                        <a title="Time Viewed" target="_self" class="">BILLS PASSED</a>
                        <span><a href="https://delhiassembly.delhi.gov.in/dlas-govt-bills">30+</a></span> 
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="list-item-content">
                        <a title="Chief Data Officers" role="link" aria-label="Chief Data Officers" href="#" target="_self" class="">Literacy Ratio</a>
                        <span>86.21%</span> 
                    </div> 
                    <div class="list-item-content"> 
                        <a title="Sourced Webservices/APIs" role="link" aria-label="Sourced Webservices/APIs" href="#" target="_self" class="">SEX RATIO</a>
                            <span>868(F)/<br>1000(M)</span> 
                    </div>
                </div> 
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="list-item-content">
                        <a title="Times Downloaded" role="link" aria-label="Times Downloaded" href="#" target="_self" class="">Population (2011)</a>
                        <span>28,514,000</span> 
                    </div> 
                    
                    <div class="list-item-content">
                        <a title="Apis" aria-label="Apis" role="link" href="#" target="_self" class="">Delhi Assembly </a>
                        <span> 70 seats</span> 
                    </div>
                </div> 
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="list-item-content">
                        <a title="Chief Data Officers" role="link" aria-label="Chief Data Officers" href="#" target="_self" class="">Rajya Sabha</a>
                        <span>3 seats</span> 
                    </div> 
                    <div class="list-item-content">
                        <a title="Apis" aria-label="Apis" role="link" href="#" target="_self" class="">Lok Sabha</a>
                        <span> 7 seats</span> 
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 upcoming-elections">
            <h2>Lok Sabha Elections 2024</h2>
        </div>
    </div>    
    <div class="w3-panel w3-leftbar w3-sand">
        <h3>Constituencies</h3>
    </div>
    <div class='w3-first w3-border-bottom w3-panel'>			    
		<div class='w3-dropdown-click w3-block'>
		    <button style='text-align:left' class='w3-button w3-block dropbtnJS' onclick="handle_dropdown('item', '55')"> DELHI (NCT) <span class='w3-right'><i class='fa fa-caret-down'></i></span></button>
		    <div id=item_55 class='w3-dropdown-content w3-bar-block w3-card-4'>
		        <a class='w3-bar-item w3-button w3-padding-small' href="lok_sabha/all constituencies-lok sabha.php" style='text-decoration:none; color:black' > ALL CONSTITUENCIES </a>
		        <a class='w3-bar-item w3-button w3-padding-small' href="lok_sabha/chandni chowk.php"  title='Date of Election 25-05-2024'>CHANDNI CHOWK</a>     
                <a class='w3-bar-item w3-button w3-padding-small' href="lok_sabha/east delhi.php"  title='Date of Election 25-05-2024'>EAST DELHI</a>     
                <a class='w3-bar-item w3-button w3-padding-small' href="lok_sabha/new delhi.php"  title='Date of Election 25-05-2024'>NEW DELHI</a>     
                <a class='w3-bar-item w3-button w3-padding-small' href="lok_sabha/north east delhi.php"  title='Date of Election 25-05-2024'>NORTH EAST DELHI</a>     
                <a class='w3-bar-item w3-button w3-padding-small' href="lok_sabha/north west delhi.php"  title='Date of Election 25-05-2024'>NORTH WEST DELHI (SC)</a>     
                <a class='w3-bar-item w3-button w3-padding-small' href="lok_sabha/south delhi.php"  title='Date of Election 25-05-2024'>SOUTH DELHI</a>     
                <a class='w3-bar-item w3-button w3-padding-small' href="lok_sabha/west delhi.php"  title='Date of Election 25-05-2024'>WEST DELHI</a>   
		    </div>
        </div>			    
	</div>



    <!-- <div class="col-sm-12 col-md-6 col-lg-3 election-box">
        <h3>Lok Sabha Elections 2024</h3>
        <ul class="w3-card w3-ul w3-hoverable">
            <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="lok_sabha.php"><i class="fa fa-chevron-right"></i> All Candidates</a></li>
        </ul>
    </div>
        
    <div class="col-sm-12 col-md-6 col-lg-3 election-box">
        <h3>Arunachal Pradesh 2024</h3>
        <ul class="w3-card w3-ul w3-hoverable">
            <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="arunachal.php"><i class="fa fa-chevron-right"></i> All Candidates</a></li>
        </ul>
    </div>
        
    <div class="col-sm-12 col-md-6 col-lg-3 election-box">
        <h3>Sikkim 2024</h3>
        <ul class="w3-card w3-ul w3-hoverable">
            <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="sikkim_2024.html"><i class="fa fa-chevron-right"></i> All Candidates</a></li>
            </ul>
    </div> -->
</div>
    
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 upcoming-elections">
            <h2>Electroral Bonds</h2>
        </div>
    </div>
        
    <div class="col-sm-12 col-md-6 col-lg-3 election-box">
        <ul class="w3-card w3-ul w3-hoverable w3-card-4">
            <li><a href="party_wise_list.php"><h3>Party Wise List</h3></a></li>
        </ul>
    </div>
        
    <div class="col-sm-12 col-md-6 col-lg-3 election-box">
        <ul class="w3-card-4 w3-ul w3-hoverable">
            <li><a href="donor_wise_list.php" ><h3>Donor Wise List </h3></a></li>
        </ul>
    </div>

        
    <!-- <div class="col-sm-12 col-md-6 col-lg-3 election-box">
        <ul class="w3-card w3-ul w3-hoverable">
            <li><a href="#" ><h3>Download Electoral Bond Data</h3></a></li>
            </ul>
    </div> -->
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 upcoming-elections">
            <h2>Delhi Assembly</h2>
        </div>
    </div>
        <div class="w3-panel w3-leftbar w3-sand">
            <h3>Constituencies</h3>
        </div>
    <div>
		<div></div>
		<div class="w3-row">
		    <div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '4')"> CENTRAL <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_4" class="w3-dropdown-content w3-bar-block w3-card-4">
		            <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/central.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		              <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/ballimaran.php" title="Date of Election 08-02-2020">BALLIMARAN</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/chandni_chowk.php" title="Date of Election 08-02-2020">CHANDNI CHOWK</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/karol bagh.php" title="Date of Election 08-02-2020">KAROL BAGH</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/matia mahal.php" title="Date of Election 08-02-2020">MATIA MAHAL</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/moti nagar.php" title="Date of Election 08-02-2020">MOTI NAGAR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/patel nagar.php" title="Date of Election 08-02-2020">PATEL NAGAR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/sadar bazar.php" title="Date of Election 08-02-2020">SADAR BAZAR</a>   
		            </div>
		         </div>			    
			</div>
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '6')"> EAST <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_6" class="w3-dropdown-content w3-bar-block w3-card-4">
		            <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/east.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		            <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/gandhi nagar.php" title="Date of Election 08-02-2020">GANDHI NAGAR</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/kondli.php" title="Date of Election 08-02-2020">KONDLI</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/krishna nagar.php" title="Date of Election 08-02-2020">KRISHNA NAGAR</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/laxmi nagar.php" title="Date of Election 08-02-2020">LAXMI NAGAR</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/patparganj.php" title="Date of Election 08-02-2020">PATPARGANJ</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/shahdara.php" title="Date of Election 08-02-2020">SHAHDARA</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/trilokpuri.php" title="Date of Election 08-02-2020">TRILOKPURI</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/vishwas nagar.php" title="Date of Election 08-02-2020">VISHWAS NAGAR</a>   
		            </div>
		         </div>			    
			</div>
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '9')"> NEW DELHI <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_9" class="w3-dropdown-content w3-bar-block w3-card-4">
		            <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/all constituencies-new delhi.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		              <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/greater kailash.php" title="Date of Election 08-02-2020">GREATER KAILASH</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/jangpura.php" title="Date of Election 08-02-2020">JANGPURA</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/kasturba nagar.php" title="Date of Election 08-02-2020">KASTURBA NAGAR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/malviya nagar.php" title="Date of Election 08-02-2020">MALVIYA NAGAR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/new delhi.php" title="Date of Election 08-02-2020">NEW DELHI</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/okhla.php" title="Date of Election 08-02-2020">OKHLA</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/rk puram.php" title="Date of Election 08-02-2020">R K PURAM</a>   
		            </div>
		         </div>			    
			</div>
        </div>
        <div class="w3-row">
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '8')"> NORTH <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_8" class="w3-dropdown-content w3-bar-block w3-card-4">
		            <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/all constituencies-north.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		              <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/adarsh nagar.php" title="Date of Election 08-02-2020">ADARSH NAGAR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/burari.php" title="Date of Election 08-02-2020">BURARI</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/model town.php" title="Date of Election 08-02-2020">MODEL TOWN</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/shakur basti.php" title="Date of Election 08-02-2020">SHAKUR BASTI</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/shalimar bagh.php" title="Date of Election 08-02-2020">SHALIMAR BAGH</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/timarpur.php" title="Date of Election 08-02-2020">TIMARPUR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/tri nagar.php" title="Date of Election 08-02-2020">TRI NAGAR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/wazirpur.php" title="Date of Election 08-02-2020">WAZIRPUR</a>   
		            </div>
		         </div>			    
			</div>
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '2')"> NORTH-EAST <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_2" class="w3-dropdown-content w3-bar-block w3-card-4">
		            <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/all constituencies-north-east.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		              <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/babarpur.php" title="Date of Election 08-02-2020">BABARPUR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/ghonda.php" title="Date of Election 08-02-2020">GHONDA</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/gokalpur.php" title="Date of Election 08-02-2020">GOKALPUR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/karawal nagar.php" title="Date of Election 08-02-2020">KARAWAL NAGAR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/mustafabad.php" title="Date of Election 08-02-2020">MUSTAFABAD</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/rohtas nagar.php" title="Date of Election 08-02-2020">ROHTAS NAGAR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/seelampur.php" title="Date of Election 08-02-2020">SEELAMPUR</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/seema puri.php" title="Date of Election 08-02-2020">SEEMA PURI</a>   
		            </div>
		         </div>			    
			</div>
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '1')"> NORTH-WEST <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_1" class="w3-dropdown-content w3-bar-block w3-card-4">
		            <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/all constituencies-north-west.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		              <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/badli.php" title="Date of Election 08-02-2020">BADLI</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/bawana.php" title="Date of Election 08-02-2020">BAWANA</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/kirari.php" title="Date of Election 08-02-2020">KIRARI</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/mundka.php" title="Date of Election 08-02-2020">MUNDKA</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/narela.php" title="Date of Election 08-02-2020">NARELA</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/rithala.php" title="Date of Election 08-02-2020">RITHALA</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/rohini.php" title="Date of Election 08-02-2020">ROHINI</a>     
                      <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/sultanpur majra.php" title="Date of Election 08-02-2020">SULTANPUR MAJRA</a>   
		            </div>
		         </div>			    
			</div>
        </div>
        <div class="w3-row">
		    <div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '3')"> SOUTH <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_3" class="w3-dropdown-content w3-bar-block w3-card-4">
		            <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/all constituencies-south.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		            <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/ambedkar nagar.php" title="Date of Election 08-02-2020">AMBEDKAR NAGAR</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/badarpur.php" title="Date of Election 08-02-2020">BADARPUR</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/chhatarpur.php" title="Date of Election 08-02-2020">CHHATARPUR</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/deoli.php" title="Date of Election 08-02-2020">DEOLI</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/kalkaji.php" title="Date of Election 08-02-2020">KALKAJI</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/mehrauli.php" title="Date of Election 08-02-2020">MEHRAULI</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/sangam vihar.php" title="Date of Election 08-02-2020">SANGAM VIHAR</a>     
                    <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/tughlakabad.php" title="Date of Election 08-02-2020">TUGHLAKABAD</a>   
		            </div>
		        </div>			    
		    </div>
		    <div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '5')"> SOUTH-WEST <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_5" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/all constituencies-south-west.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/bijwasan.php" title="Date of Election 08-02-2020">BIJWASAN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/delhi cantt.php" title="Date of Election 08-02-2020">DELHI CANTT</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/dwarka.php" title="Date of Election 08-02-2020">DWARKA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/matiala.php" title="Date of Election 08-02-2020">MATIALA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/najafgarh.php" title="Date of Election 08-02-2020">NAJAFGARH</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/palam.php" title="Date of Election 08-02-2020">PALAM</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/rajinder nagar.php" title="Date of Election 08-02-2020">RAJINDER NAGAR</a> 
                        <!-- <a class="w3-button w3-white w3-mobile w3-small" href="https://www.myneta.info/delhi2020/index.php?action=show_candidates&amp;constituency_id=71">RAJINDER NAGAR : BYE ELECTION ON 23-06-2022</a>    -->
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/uttam nagar.php" title="Date of Election 08-02-2020">UTTAM NAGAR</a>   
		            </div>
		        </div>			    
		    </div>
		    <div class="w3-third w3-border-bottom">			    
		        <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '7')"> WEST <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_7" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/all constituencies-west.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/hari nagar.php" title="Date of Election 08-02-2020">HARI NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/janakpuri.php" title="Date of Election 08-02-2020">JANAKPURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/madipur.php" title="Date of Election 08-02-2020">MADIPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/mangolpuri.php" title="Date of Election 08-02-2020">MANGOL PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/nangloi jat.php" title="Date of Election 08-02-2020">NANGLOI JAT</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/rajouri garden.php" title="Date of Election 08-02-2020">RAJOURI GARDEN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/tilak nagar.php" title="Date of Election 08-02-2020">TILAK NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="delhi_assembly/vikaspuri.php" title="Date of Election 08-02-2020">VIKASPURI</a>   
                    </div>
                </div>  
            </div>
        </div>
    </div> 
        <!--<div class="col-sm-12 col-md-6 col-lg-3 election-box">
            <h3></h3>
                <ul class="w3-card w3-ul w3-hoverable">
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="delhi_state.html"><i class="fa fa-chevron-right"></i>Delhi </a></li>
                </ul>
        </div> -->
        
        <!-- <div class="col-sm-12 col-md-6 col-lg-3 election-box">
            <h3>Lok Sabha Elections 2019</h3>
                <ul class="w3-card w3-ul w3-hoverable">
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> All Candidates </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Winners </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Winner Election Expenses </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Re-contesting Candidates </a></li>
                </ul>
        </div>
        
        <div class="col-sm-12 col-md-6 col-lg-3 election-box">
            <h3>Lok Sabha Elections 2014</h3>
                <ul class="w3-card w3-ul w3-hoverable">
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> All Candidates </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Winners </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Winner Election Expenses </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Re-contesting Candidates </a></li>
                </ul>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3 election-box">
            <h3>Lok Sabha Elections 2009</h3>
                <ul class="w3-card w3-ul w3-hoverable">
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> All Candidates </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Winners </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Winner Election Expenses </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Re-contesting Candidates </a></li>
                </ul>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3 election-box">
            <h3>Lok Sabha Elections 2004</h3>
                <ul class="w3-card w3-ul w3-hoverable">
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> All Candidates </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Winners </a></li>  
                </ul>
        </div>-->
</div>
     


<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 upcoming-elections">
            <h2>Delhi Municipal Corporation Election 2022</h2>
        </div>
    </div>
    <div>
		<div></div>
		<div class="w3-panel w3-leftbar w3-sand">
            <h3>Constituencies</h3>
        </div>
		<div class="w3-row">
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '79')"> CENTRAL <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_79" class="w3-dropdown-content w3-bar-block w3-card-4">
                        <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_constituencies&amp;state_id=79" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a> -->
		                <a class="w3-bar-item w3-button w3-padding-small" href="MCD_elections/central.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=528" title="Date of Election 04-12-2022">10-JHARODA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=529" title="Date of Election 04-12-2022">11-TIMARPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=530" title="Date of Election 04-12-2022">12-MALKA GANJ</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=531" title="Date of Election 04-12-2022">13-MUKHERJEE NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=524" title="Date of Election 04-12-2022">6-BURARI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=525" title="Date of Election 04-12-2022">7-KADIPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=532" title="Date of Election 04-12-2022">70-SHASTRI NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=533" title="Date of Election 04-12-2022">71-KISHAN GANJ</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=534" title="Date of Election 04-12-2022">72-SADAR BAZAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=535" title="Date of Election 04-12-2022">73-CIVIL LINES</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=536" title="Date of Election 04-12-2022">74-CHANDNI CHOWK</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=537" title="Date of Election 04-12-2022">75-JAMA MASJID</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=539" title="Date of Election 04-12-2022">76-CHANDANI MAHAL</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=540" title="Date of Election 04-12-2022">77-DELHI GATE</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=541" title="Date of Election 04-12-2022">78-BAZAR SITA RAM</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=542" title="Date of Election 04-12-2022">79-BALLIMARAN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=526" title="Date of Election 04-12-2022">8-MUKUNDPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=543" title="Date of Election 04-12-2022">80-RAM NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=544" title="Date of Election 04-12-2022">81-QURAISH NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=545" title="Date of Election 04-12-2022">82-PAHAR GANJ</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=546" title="Date of Election 04-12-2022">83-KAROI BAGH</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=547" title="Date of Election 04-12-2022">84-DEV NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=527" title="Date of Election 04-12-2022">9-SANT NAGAR</a>    -->
		            </div>
		        </div>			    
			</div>
            
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '81')"> EAST <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_81" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="MCD_elections/east.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=582" title="Date of Election 04-12-2022">190-NEW ASHOK NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=583" title="Date of Election 04-12-2022">191-MAYUR VIHAR PHASE-I</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=584" title="Date of Election 04-12-2022">192-TRILOKPURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=585" title="Date of Election 04-12-2022">193-KONDLI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=586" title="Date of Election 04-12-2022">194-GHAROLI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=587" title="Date of Election 04-12-2022">195-KALYANPURI</a>    
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=588" title="Date of Election 04-12-2022">196-MAYUR VIHAR PHASE-II</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=589" title="Date of Election 04-12-2022">197-PATPAR GANJ</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=590" title="Date of Election 04-12-2022">198-VINOD NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=591" title="Date of Election 04-12-2022">199-MANDAWAII</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=592" title="Date of Election 04-12-2022">200-PANDAV NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=593" title="Date of Election 04-12-2022">201-LALITA PARK</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=594" title="Date of Election 04-12-2022">202-SHAKARPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=595" title="Date of Election 04-12-2022">203-LAXMI NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=597" title="Date of Election 04-12-2022">208-ANARKALI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=598" title="Date of Election 04-12-2022">209-JAGAT PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=599" title="Date of Election 04-12-2022">210-GEETA COLONY</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=600" title="Date of Election 04-12-2022">211-KRISHNA NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=601" title="Date of Election 04-12-2022">212-GANDHI NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=602" title="Date of Election 04-12-2022">213-SHASTRI PARK</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=603" title="Date of Election 04-12-2022">214-AZAD NAGAR</a>    -->
		            </div>
		        </div>			    
			</div>
		    <div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '84')"> NEW DELHI <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_84" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="MCD_elections/new delhi.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=663" title="Date of Election 04-12-2022">139-NARAINA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=664" title="Date of Election 04-12-2022">140-INDER PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=665" title="Date of Election 04-12-2022">141-RAJINDER NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=666" title="Date of Election 04-12-2022">151-MUNIRKA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=667" title="Date of Election 04-12-2022">152-R.K. PURAM</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=668" title="Date of Election 04-12-2022">153-VASANT VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=669" title="Date of Election 04-12-2022">171-CHITARANJAN PARK</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=670" title="Date of Election 04-12-2022">172-CHIRAG DELHI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=671" title="Date of Election 04-12-2022">173-GREATER KAILASH</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=659" title="Date of Election 04-12-2022">85-WEST PATEL NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=660" title="Date of Election 04-12-2022">86-EAST PATEL NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=661" title="Date of Election 04-12-2022">87-RANJEET NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=662" title="Date of Election 04-12-2022">88-BALJEET NAGAR</a>    -->
		            </div>
		        </div>			    
		    </div>
        </div>
        <div class="w3-row">
		    <div class="w3-third w3-border-bottom">			    
		        <div class="w3-dropdown-click w3-block">
	                <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '83')"> NORTH <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_83" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="MCD_elections/north.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=627" title="Date of Election 04-12-2022">1-NARELA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=632" title="Date of Election 04-12-2022">14-DHIRPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=633" title="Date of Election 04-12-2022">15-ADARSH NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=634" title="Date of Election 04-12-2022">16-AZADPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=635" title="Date of Election 04-12-2022">17-BHALSWA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=636" title="Date of Election 04-12-2022">18-JAHANGIR PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=637" title="Date of Election 04-12-2022">19-SARUP NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=628" title="Date of Election 04-12-2022">2-BANKNER</a>    
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=638" title="Date of Election 04-12-2022">20-SAMAYPUR BADLI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=639" title="Date of Election 04-12-2022">26-POOTH KALAN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=640" title="Date of Election 04-12-2022">27-BEGUMPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=642" title="Date of Election 04-12-2022">28-SHAHBAAD DAIRY</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=643" title="Date of Election 04-12-2022">29-POOTH KHURD</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=629" title="Date of Election 04-12-2022">3-HOLAMBI KALAN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=644" title="Date of Election 04-12-2022">30-BAWANA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=645" title="Date of Election 04-12-2022">31-NANGAI THAKRAN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=630" title="Date of Election 04-12-2022">4-ALIPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=631" title="Date of Election 04-12-2022">5-BAKHTAWARPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=646" title="Date of Election 04-12-2022">52-ROHINI-F</a>    
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=647" title="Date of Election 04-12-2022">53-ROHINI-E</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=648" title="Date of Election 04-12-2022">54-ROHINI-D</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=649" title="Date of Election 04-12-2022">58-SARASWATI VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=650" title="Date of Election 04-12-2022">59-PACHIM VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=651" title="Date of Election 04-12-2022">60-RANI BAGH</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=652" title="Date of Election 04-12-2022">64-KESHAV PURAM</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=653" title="Date of Election 04-12-2022">65-ASHOK VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=654" title="Date of Election 04-12-2022">66-WAZIR PUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=655" title="Date of Election 04-12-2022">67-SANGAM PARK</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=657" title="Date of Election 04-12-2022">68-MODEL TOWN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=658" title="Date of Election 04-12-2022">69-KAMLA NAGAR</a>    -->
		            </div>
		        </div>			    
		    </div>
		    <div class="w3-third w3-border-bottom">			    
		        <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '77')"> NORTH-EAST <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_77" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="MCD_elections/north-east.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=453" title="Date of Election 04-12-2022">225-SEELAMPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=454" title="Date of Election 04-12-2022">226-GAUTAM PURI</a>    
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=455" title="Date of Election 04-12-2022">227-CHAUHAN BANGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=456" title="Date of Election 04-12-2022">228-MAUJPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=457" title="Date of Election 04-12-2022">229-BRAHAM PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=458" title="Date of Election 04-12-2022">230-BHAJANPURA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=459" title="Date of Election 04-12-2022">231-GHONDA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=460" title="Date of Election 04-12-2022">232-YAMUNA VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=461" title="Date of Election 04-12-2022">237-HARSH VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=462" title="Date of Election 04-12-2022">238-SABOLI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=463" title="Date of Election 04-12-2022">239-GOKAI PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=464" title="Date of Election 04-12-2022">240-JOHARIPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=465" title="Date of Election 04-12-2022">241-KARAWAL NAGAR-EAST</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=466" title="Date of Election 04-12-2022">242-DAYAIPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=468" title="Date of Election 04-12-2022">243-MUSTAFABAD</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=469" title="Date of Election 04-12-2022">244-NEHRU VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=470" title="Date of Election 04-12-2022">245-BRIJ PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=471" title="Date of Election 04-12-2022">246- SRI RAM COLONY</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=472" title="Date of Election 04-12-2022">247-SADATPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=473" title="Date of Election 04-12-2022">248-KARAWAI NAGAR-WEST</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=474" title="Date of Election 04-12-2022">249-SONIA VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=475" title="Date of Election 04-12-2022">250-SABAPUR</a>    -->
		            </div>
		        </div>			    
			</div>
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '76')"> NORTH-WEST <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_76" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="MCD_elections/north-west.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=424" title="Date of Election 04-12-2022">21-ROHINI-A</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=425" title="Date of Election 04-12-2022">22-ROHINI-B</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=426" title="Date of Election 04-12-2022">23-RITHALA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=427" title="Date of Election 04-12-2022">24-VIJAY VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=428" title="Date of Election 04-12-2022">25-BUDH VIHAR</a>    
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=429" title="Date of Election 04-12-2022">32-KANJHAWAIA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=430" title="Date of Election 04-12-2022">33-RANI KHERA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=431" title="Date of Election 04-12-2022">34-NANGLOI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=432" title="Date of Election 04-12-2022">35-MUNDKA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=433" title="Date of Election 04-12-2022">36-NIIOTHI</a>    
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=434" title="Date of Election 04-12-2022">37-KIRARI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=435" title="Date of Election 04-12-2022">38-PREM NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=436" title="Date of Election 04-12-2022">39-MUBARIKPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=437" title="Date of Election 04-12-2022">40-NITHARI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=439" title="Date of Election 04-12-2022">41-AMAN VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=440" title="Date of Election 04-12-2022">42-MANGOL PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=441" title="Date of Election 04-12-2022">43-SULTANPURI-A</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=442" title="Date of Election 04-12-2022">44-SULTANPURI-B</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=443" title="Date of Election 04-12-2022">49-MANGOIPURI-A</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=444" title="Date of Election 04-12-2022">50-MANGOLPURI-B</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=445" title="Date of Election 04-12-2022">51-ROHINI-C</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=446" title="Date of Election 04-12-2022">55-SHALIMAR BAGH-A</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=447" title="Date of Election 04-12-2022">56-SHAIIMAR BAGH-B</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=448" title="Date of Election 04-12-2022">57-PITAM PURA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=449" title="Date of Election 04-12-2022">61-KOHAT ENCLAVE</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=450" title="Date of Election 04-12-2022">62-SHAKUR PUR</a>    
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=451" title="Date of Election 04-12-2022">63-TRI NAGAR</a> -->   
		            </div>
		        </div>			    
			</div> 
        </div>
        <div class="w3-row">
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '85')"> SHAHDARA <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_85" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="MCD_elections/shahdara.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=673" title="Date of Election 04-12-2022">204-PREET VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=674" title="Date of Election 04-12-2022">205-I.P. EXTENSION</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=675" title="Date of Election 04-12-2022">206-ANAND VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=676" title="Date of Election 04-12-2022">207-VISHWAS NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=677" title="Date of Election 04-12-2022">215-SHAHDARA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=678" title="Date of Election 04-12-2022">216-JHILMIL</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=679" title="Date of Election 04-12-2022">217-DILSHAD COLONY</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=680" title="Date of Election 04-12-2022">218-SUNDAR NAGRI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=681" title="Date of Election 04-12-2022">219-DILSHAD GARDEN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=682" title="Date of Election 04-12-2022">220-NAND NAGRI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=683" title="Date of Election 04-12-2022">221-ASHOK NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=684" title="Date of Election 04-12-2022">222-RAM NAGAR EAST</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=685" title="Date of Election 04-12-2022">223-ROHTASH NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=686" title="Date of Election 04-12-2022">224-WELCOME COLONY</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=688" title="Date of Election 04-12-2022">233-SUBHASH MOHALLA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=689" title="Date of Election 04-12-2022">234-KABIR NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=690" title="Date of Election 04-12-2022">235-GORAKH PARK</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=691" title="Date of Election 04-12-2022">236-KARDAM PURI</a>    -->
		            </div>
		        </div>			    
			</div>
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '78')"> SOUTH <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_78" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="MCD_elections/south.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=476" title="Date of Election 04-12-2022">148-HAUZ KHAS</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=477" title="Date of Election 04-12-2022">149-MALVIYA NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=478" title="Date of Election 04-12-2022">150-GREEN PARK</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=479" title="Date of Election 04-12-2022">154-LADO SARAI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=480" title="Date of Election 04-12-2022">155-MEHRAULI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=481" title="Date of Election 04-12-2022">156-VASANT KUNJ</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=482" title="Date of Election 04-12-2022">157-AYA NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=483" title="Date of Election 04-12-2022">158-BHATI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=484" title="Date of Election 04-12-2022">159-CHHATARPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=485" title="Date of Election 04-12-2022">160-SAID-UI-AJAIB</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=486" title="Date of Election 04-12-2022">161-DEOLI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=487" title="Date of Election 04-12-2022">162-TIGRI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=488" title="Date of Election 04-12-2022">163-SANGAM VIHAR-A</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=489" title="Date of Election 04-12-2022">164-DAKSHIN PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=521" title="Date of Election 04-12-2022">165-MADANGIR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=522" title="Date of Election 04-12-2022">166-PUSHP VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=523" title="Date of Election 04-12-2022">167-KHANPUR</a>    -->
		            </div>
		        </div>			    
			</div>
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '86')"> SOUTH-EAST <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_86" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="MCD_elections/south-east.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=692" title="Date of Election 04-12-2022">142-DARYAGANJ</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=693" title="Date of Election 04-12-2022">143-SIDHARTHA NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=694" title="Date of Election 04-12-2022">144-LAJPAT NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=695" title="Date of Election 04-12-2022">145-ANDREWS GANJ</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=696" title="Date of Election 04-12-2022">146-AMAR COLONY</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=697" title="Date of Election 04-12-2022">147-KOTLA MUBARAKPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=698" title="Date of Election 04-12-2022">168-SANGAM VIHAR-C</a>    
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=699" title="Date of Election 04-12-2022">169-SANGAM VIHAR-B</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=700" title="Date of Election 04-12-2022">170-TUGHLAKABAD EXTENSION</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=701" title="Date of Election 04-12-2022">174-SRI NIWAS PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=702" title="Date of Election 04-12-2022">175-KALKAJI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=703" title="Date of Election 04-12-2022">176-GOVIND PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=704" title="Date of Election 04-12-2022">177-HARKESH NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=705" title="Date of Election 04-12-2022">178-TUGHLAKABAD</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=707" title="Date of Election 04-12-2022">179-PUL PEHLADPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=708" title="Date of Election 04-12-2022">180-BADARPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=709" title="Date of Election 04-12-2022">181-MOLARBAND</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=710" title="Date of Election 04-12-2022">182-MEETHAPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=711" title="Date of Election 04-12-2022">183-HARI NAGAR EXTENSION</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=712" title="Date of Election 04-12-2022">184-JAITPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=713" title="Date of Election 04-12-2022">185-MADANPUR KHADAR EAST</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=714" title="Date of Election 04-12-2022">186-MADANPUR KHADAR WEST</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=715" title="Date of Election 04-12-2022">187-SARITA VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=716" title="Date of Election 04-12-2022">188-ABUL FAZAL ENCLAVE</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=717" title="Date of Election 04-12-2022">189-ZAKIR NAGAR</a>    -->
		            </div>
		        </div>			    
			</div>
        </div>
        <div class="w3-row">
		    <div class="w3-third w3-border-bottom">			    
		        <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '80')"> SOUTH-WEST <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_80" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="MCD_elections/south-west.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=548" title="Date of Election 04-12-2022">107-VIKAS PURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=549" title="Date of Election 04-12-2022">108-HASTSAL</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=550" title="Date of Election 04-12-2022">109-VIKAS NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=551" title="Date of Election 04-12-2022">110-KUNWAR SINGH NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=552" title="Date of Election 04-12-2022">111-BAPROLA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=553" title="Date of Election 04-12-2022">112-SAINIK ENCLAVE</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=554" title="Date of Election 04-12-2022">113-MOHAN GARDEN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=555" title="Date of Election 04-12-2022">114-NAWADA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=556" title="Date of Election 04-12-2022">115-UTTAM NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=557" title="Date of Election 04-12-2022">116-BINDA PUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=558" title="Date of Election 04-12-2022">117-DABRI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=559" title="Date of Election 04-12-2022">118-SAGARPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=560" title="Date of Election 04-12-2022">119-MANGLAPURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=561" title="Date of Election 04-12-2022">120-DWARKA-B</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=563" title="Date of Election 04-12-2022">121-DWARKA-A</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=564" title="Date of Election 04-12-2022">122-MATIAIA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=565" title="Date of Election 04-12-2022">123-KAKROLA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=566" title="Date of Election 04-12-2022">124-NANGII SAKRAWATI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=567" title="Date of Election 04-12-2022">125-CHHAWAIA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=568" title="Date of Election 04-12-2022">126-ISAPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=569" title="Date of Election 04-12-2022">127-NAJAFGARH</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=570" title="Date of Election 04-12-2022">128-DICHAON KALAN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=571" title="Date of Election 04-12-2022">129-ROSHAN PURA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=572" title="Date of Election 04-12-2022">130-DWARKA-C</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=573" title="Date of Election 04-12-2022">131-BIJWASAN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=574" title="Date of Election 04-12-2022">132-KAPASHERA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=575" title="Date of Election 04-12-2022">133-MAHIPALPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=576" title="Date of Election 04-12-2022">134-RAJ NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=578" title="Date of Election 04-12-2022">135-PALAM</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=579" title="Date of Election 04-12-2022">136-MADHU VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=580" title="Date of Election 04-12-2022">137-MAHAVIR ENCLAVE</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=581" title="Date of Election 04-12-2022">138-SADH NAGAR</a>    -->
		            </div>
		        </div>			    
			</div>
			<div class="w3-third w3-border-bottom">			    
			    <div class="w3-dropdown-click w3-block">
		            <button style="text-align:left" class="w3-button w3-block dropbtnJS" onclick="handle_dropdown('item', '82')"> WEST <span class="w3-right"><i class="fa fa-caret-down"></i></span></button>
		            <div id="item_82" class="w3-dropdown-content w3-bar-block w3-card-4">
		                <a class="w3-bar-item w3-button w3-padding-small" href="MCD_elections/west.php" style="text-decoration:none; color:black"> ALL CONSTITUENCIES </a>
		                <!-- <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=620" title="Date of Election 04-12-2022">100-FATEH NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=621" title="Date of Election 04-12-2022">101-TILAK NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=622" title="Date of Election 04-12-2022">102-KHYALA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=623" title="Date of Election 04-12-2022">103-KESHOPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=624" title="Date of Election 04-12-2022">104-JANAK PURI SOUTH</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=625" title="Date of Election 04-12-2022">105-MAHAVEER ENCLAVE</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=626" title="Date of Election 04-12-2022">106-JANAK PURI WEST</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=604" title="Date of Election 04-12-2022">45-JAWALAPURI</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=605" title="Date of Election 04-12-2022">46- NANGLOI JAT</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=606" title="Date of Election 04-12-2022">47-NIHAL VIHAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=607" title="Date of Election 04-12-2022">48-GURU HARKISHAN NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=608" title="Date of Election 04-12-2022">89-KARAM PURA</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=609" title="Date of Election 04-12-2022">90-MOTI NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=610" title="Date of Election 04-12-2022">91-RAMESH NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=611" title="Date of Election 04-12-2022">92-PUNJABI BAGH</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=612" title="Date of Election 04-12-2022">93-MADIPUR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=613" title="Date of Election 04-12-2022">94-RAGHUBIR NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=614" title="Date of Election 04-12-2022">95-VISHNU GARDEN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=615" title="Date of Election 04-12-2022">96-RAJOURI GARDEN</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=616" title="Date of Election 04-12-2022">97-CHAUKHANDI NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=617" title="Date of Election 04-12-2022">98-SUBHASH NAGAR</a>     
                        <a class="w3-bar-item w3-button w3-padding-small" href="index.php?action=show_candidates&amp;constituency_id=619" title="Date of Election 04-12-2022">99-HARI NAGAR</a>    -->
		            </div>
		        </div>			    
			</div>
        </div>    
	</div>

        <!--<div class="col-sm-12 col-md-6 col-lg-3 election-box">
            <h3>Delhi Municipal Corporation Election 2022</h3>
                <ul class="w3-card w3-ul w3-hoverable">
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> All Candidates </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Winners </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Re-contesting Candidates </a></li>
                </ul>
        </div>
        
         <div class="col-sm-12 col-md-6 col-lg-3 election-box">
            <h3>Delhi MCD Elections 2017</h3>
                <ul class="w3-card w3-ul w3-hoverable">
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> All Candidates </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Winners </a></li>
                </ul>
            
        </div>
        
        <div class="col-sm-12 col-md-6 col-lg-3 election-box">
            <h3>Municipal Corporation for Delhi 2012</h3>
             <div class="bullet-list"> 
                <ul class="w3-card w3-ul w3-hoverable">
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> All Candidates </a></li>
                    <li><a class="w3-button w3-block w3-padding-small" style="text-align:left" href="#"><i class="fa fa-chevron-right"></i> Winners </a></li>
                </ul>
             </div> 
        </div> -->
</div>

<!-- <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 upcoming-elections">
            <h2>Rajya Sabha</h2>
        </div>
    </div>
    <ul class="w3-card w3-ul w3-hoverable">
        <li>
            <a class='w3-block w3-padding-small' style='text-align:left; text-decoration:none;' href="#">
            <i class="fa fa-chevron-right"></i>
            Criminal &amp;Asset declarations
            </a>
        </li> 
        <li>
            <a class='w3-block w3-padding-small' style='text-align:left; text-decoration:none;' href="#">
            <i class="fa fa-chevron-right"></i>
            Rajya Sabha 2009 Asset Declarations (As per declaration made to Rajya Sabha Secretariat)
            </a>
        </li>
    </ul>
</div> -->
<!-- <div id="footer"></div> -->
<?php include('footer.html');?>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
