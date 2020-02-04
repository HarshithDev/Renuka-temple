<?php include_once 'header.php'; ?>
<div id="main" class="container-fluid donation-main">
<div class="slideshow-container">
	<div class="slideshow-contents">
	<img class="slideshow-image" width="100%" src="slide1.jpg" />
	</div>
</div>
<div class="donation-container section-content" data-aos="zoom-in-down">
<div class="container">
<h1 class="section-header" data-aos="fade-left">Fund/Donations</h1>
    <h2 class="sub-heading">Support the Hindu Temples Directory</h2>
    <p>Dear Visitor,</p>
    <p>This directory has been my sole effort so far to help the Hindus all over the world. I have spent many thousands of dollars on creating this directory website and database of temples and keeping it up-to date.  I hope you found this useful.</p>
    <p>My only intention in doing this is to help Hindus all over the world find Hindu Temples anywhere near them, You can help in this effort and your one time help will help Hindus forever.  I am hiring people in India to update the directory.  This is people who would maintain the directory and keep it up to date.</p>
    <h2 class="sub-heading">The Hindu Temples Directory needs your help</h2>
    <p>At a time when we are Hinduism is on the decline in pure numbers, it is all the more crucial that we support our temples and religious institutions, my effort in cataloging and promoting Hindu Temples all over the world is a small effort in this direction.</p>
    <h2 class="sub-heading">Updates to the Temples Directory</h2>
    <p>Based on my calculations We need ~ 800 Dollars for the Update of directory such that most temples have photos and other basic details so visitors would find it useful. Currently we have ~ 2000 Temples in the directory and I am planning to add another 2000 Hindu Temples to the directory soon.  This also means greater server costs and computing power and in general the other technical costs of keeping this website up.
    If you can help in any way possible we welcome your contributions,  These are the general ongoing costs of keeping up and updating this site (Including data collection and  maintaining the site)</p>
    <h2 class="second-main">Make a Donation to the following details</h2>
    <ul>
        <li><strong>Bank Name: </strong>HDFC Bank</li>
        <li><strong>Account Number: </strong>8745694512012</li>
        <li><strong>IFSC: </strong>HDFC457894546</li>
        <li><strong>Branch: </strong>Rajajinagar Branch</li>
        <li><strong>Branch Code: </strong>05689</li>
        <li><strong>Contact Number: </strong><a href="tel:+91 8792074120">+91 8792074120</a></li>
    </ul>
    <h2 class="sub-heading">Our Future Plans</h2>
    <p>Based on the support we receive, these are our future plans for development of this Hindu Temples Directory</p>
    <h3 class="sub-sub-heading">More overseas temples to be added.</h3>
    <p>We currently have ~ 1600 Temples, by my fairly accurate guesstimates we are missing another 4000 relatively large temples outside India.</p>
    <h3 class="sub-sub-heading">Major Temples In India</h3>
    <p>I am planning to add all the major Temples in India so tourists visiting new areas or international visitors to the Hindu temples have all the information they might need at one place.</p>
    <h3 class="sub-sub-heading">Move the site to a Virtual Private Server</h3>
    <p>Right now we have information on 2000 other temples that we haven’t added to the temples directory as it will slow down our shared servers and spoil the experience for everyone. We want to expand to the temples in India but cannot do that unless we move to a virtual private server that can deliver the site at reasonable page load times.</p>
</div>
</div>
</div>
<script>
    function openSlideMenu(){
		document.getElementById('side-menu').style.width="250px";
		document.getElementById('main').style.marginLeft="250px";
		document.getElementById('title-bar').style.marginLeft="250px";
        $("#main").css('opacity','0');
        $("#main").css('transition','0.5s');
		$('body').css('background-color', '#2f2f2f');
		$('.open-slide').css('display', 'none');
		var floater = false;
		$('#hamburger-open').click(function(){
		var top = $(window).scrollTop();
		var left = $(window).scrollLeft()
		$('body').css('overflow', 'hidden');
		$(window).scroll(function(){
		$(this).scrollTop(top).scrollLeft(left);
		});
		floater = !floater;
		});
	}
	function closeSlideMenu(){
		document.getElementById('side-menu').style.width="0px";
		document.getElementById('main').style.marginLeft="0px";
		document.getElementById('title-bar').style.marginLeft="0px";
        $("#main").css('opacity','1');
        $("#main").css('transition','0.3s');
		$('.open-slide').css('display', 'block');
		$('body').css('background-color', '#dcdcdc');
		$('body').css('overflow', 'auto');
		$(window).unbind('scroll');
	}

</script>
<?php include_once 'footer.php'; ?>