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
         <h2>Knuth-Morris-Pratt substring search</h2>
         <p>The main idea behind is to find the start place when there is a mismatch between text and pattern. In Brute-Force, when there is a mismatch, we need to start from the beginning which is not efficient.</p>
         <p>A useful way is to implement DFA which stands for deterministic finite-stat automaton.</p>
         <div class="image_box">
             <img src="images/kmp.png" alt="kmp">
             <p class="caption">Figure 2: KMP</p>
        </div> <!-- end of kmp image -->
    </div> <!-- end of main content -->
    
    </div> <!-- end of center part -->

    <div id="discription">
        <h2>Main Content</h2>
        <ul>
            <li>Image Declare</li>
            <li>Text Declare</li>
            <li>KMP</li>
        </ul>

    </div> <!-- end of discription div-->

</div> <!-- end of the content div -->
</div> <!-- end of the container div -->

</body>

</html>
