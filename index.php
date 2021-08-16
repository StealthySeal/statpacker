<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Hey pal, wanna buy some camping gear?</title>
    <meta name="description" content="Find stats and info for camping gear." />
    <link rel="stylesheet" type="text/css" href="resources/css/base.css" />
    <link rel="icon" href="resources/image/logoC.png">
</head>


<body>
<?php
include 'components/header.php';
?>
    <div>
        <h2>About us</h2>
        <p>We are a couple of gear enthusists from Massachussets. When picking new gear, we would always make spreadsheets to compare the options. We decided to make this data publicly avalible.
            <br><br> The huge difference between us and other popular gear review sites?
            <b>We don't sell anything.</b>

            <br><br> You'll notice we list more than just the major brands, it's because we aren't secretly funded by them. (Like other options are.)
            <br><br> Yeah, you like that? Please consider <a href="donating">donating</a> or becoming a <a href="donating">data contributor</a>.
    </div>

    <div class="pageBreak">
        <hr>
    </div>

    <div class="categories">
        <h2>Categories</h2>
       

<?php
include 'resources/env.php';
include 'category.php';

?>
</html>
    </div>

    <footer>
        <h2>Contact Us:</h2>
        <ul>
            <li>
                <p>email@gmail.com</p>
            </li>
            <li>
                <p>mailmail@mailsnail.mail</p>
            </li>
            <li>
                <p>508-763-1223</p>
            </li>
        </ul>
        <p>Copyright Aaron Parker, Matthew Toomey 2020</p>
        <p>Did we miss something? Let us know! Click <a href="issuereport.php">[here]</a> </p>
    </footer>

</body>
