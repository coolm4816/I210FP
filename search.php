<?php
require_once ('includes/database.php');
require_once ('includes/header.php');
?>
<head><title>Retro Video Game Store: Search | Retro Games</title></head>
<section class="main-section section-padding">
    <div class="page-navigation">
        <ul>
            <li class="page-navsli page-nav"><a href="#">Home</a></li>
            <li class="page-navsli page-nav">></li>
            <li class="page-navsli page-nav">Search</li>
        </ul>
    </div>
    <div class="search-conent">
        <div class="heading">
            Search
        </div>
        <h2>Search Products</h2>
        <form action="searchresults.php" method="get">
            <input type="text" name="q" size="40" required />&nbsp;&nbsp;
            <input type="submit" name="Submit" id="Submit" value="Search" />
        </form>
    </div>
</section>
<?php
include_once ('includes/footer.php');
?>