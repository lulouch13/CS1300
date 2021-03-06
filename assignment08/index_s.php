<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Basic Java Knowledge</title>
    <meta name="author" content="Runyu Zhang">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ovo" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Muli" />
</head>

<body>
<?php
    include 'includes/header.php';
?>

<div id="container">
<div id="content">
    <div id="center">
    <div id="image">
        <p><span class="note">The images in the "index.html" web page are the book cover of book "Algorithms". The images in other web pages are screen shots from the book.</span><span id="declare"> All the images are sreen shots coming from the url "http://algs4.cs.princeton.edu/home", in which the book locatesand, and second urls.</span></p>
        <div class="image_box">
            <img src="images/cover.png" alt="cover">
             <!-- cover.png comes from "http://algs4.cs.princeton.edu/home" -->
            <p class="caption">Figure 1: The Cover of Algorithm</p>
        </div> <!-- end of the cover image -->
    </div> <!-- end of image div-->

    <div id="text">
        <p><span class="note">The text written on the website comes from the book "Algorithms".</span> It is a brief summary of some chapters in the book.</p>
    </div> <!-- end of text div-->

    <div id="main_content">
    <h2>Comparsion</h2>
            <table>
                <caption>Table 1: Comparsion of Abstract and Interface</caption>
                <tr>
                    <td></td>
                    <th>Abstract</th>
                    <th>Interface</th>
                </tr>
                <tr>
                    <td>Method Body</td>
                    <td>Can have</td>
                    <td>Only stubs</td>
                </tr>
                <tr>
                    <td>Visibility</td>
                    <td>Any</td>
                    <td>Only public</td>
                </tr>
                <tr>
                    <td>Inherit</td>
                    <td>Only extend one</td>
                    <td>Can implement more</td>
                </tr>
                <tr>
                    <td>Inherit from another</td>
                    <td>Abstract methods can be undefined</td>
                    <td>Methords are not implementing</td>
                </tr>
            </table>
    </div> <!-- end of main content -->
    
    </div> <!-- end of center part -->

    <div id="discription">
        <h2>Main Content</h2>
        <ul>
            <li>Image Declare</li>
            <li>Text Declare</li>
            <li>Abstract and Interface</li>
        </ul>

    </div> <!-- end of discription div-->

</div> <!-- end of the content div -->
</div> <!-- end of the container div -->

</body>

</html>
