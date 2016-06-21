<?php
    
?>
<style>
.mySlides {
	margin-top: 2%;
	display:none;
	border: none;
}

.center{
	font-size: 1.5rem;
	color: #666666;
	text-decoration: underline;
	text-align: center;
	margin-left: -5%;
}

</style>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<h2 class="center">Само тук можете да четете за</h2>

<div class="content" style="max-width:800px;position:relative">

<img class="mySlides" src="resources/pics/IT.jpg" style="width:70%">
<img class="mySlides" src="resources/pics/fun.png" style="width:70%">
<img class="mySlides" src="resources/pics/cooking.jpg" style="width:70%">
<img class="mySlides" src="resources/pics/fashion.jpg" style="width:70%">
<img class="mySlides" src="resources/pics/nature.jpg" style="width:70%">
<img class="mySlides" src="resources/pics/science.jpg" style="width:70%">
<img class="mySlides" src="resources/pics/sport.jpg" style="width:70%">
<img class="mySlides" src="resources/pics/technology.jpg" style="width:70%">
<img class="mySlides" src="resources/pics/tourism.jpg" style="width:70%">
<img class="mySlides" src="resources/pics/health.jpg" style="width:70%">
</div>
