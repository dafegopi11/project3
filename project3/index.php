<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>My Accomplishments</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/longscrolly.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>

<body>

  <!-- Navigation -->
    <nav class="main">
      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contactform.php">Contact Form</a></li>
      </ul>
    </nav>  


    <!-- Top Section -->
    <section id="first">
        <div class="container">

            <h1>Overview</h1>

            

            <div class="content">

              <div id="z1" class="z">
                <img src ="images/me.jpg" alt= "Accomplishment 1">              
              </div>

               <div id="z1" class="z">
                <p>Hello. This is me!</p>
              </div>

              <div id="z2" class="z">
                <p>I'm a senior at the University of Rochester who has accomplishments in debate, frisbee, and other areas that help the world.</p>
              </div>

              <div id="z2" class="z">
                <img src ="images/debate.png" alt= "Accomplishment 2"> 
              </div>


            </div><!-- .content -->

       </div><!-- .container -->

    </section>

     <!-- Second Section -->
    <section id="second">
        <div class="container">

            <h2>Accomplishments</h2>

            <div class="content">
              <img class="f" src="images/debateactivity.jpg" alt="debateactivity">
              <p id="fp" class="f">I am part of the University of Rochester Debate Union, and have been for four years. I have been the Internal Publicity Manager, which requires the duty of being in charge of blog posts and social media. I've also been a semifinalist at a tournament in the Spanish division.</p>

              <img class="f" src="images/internship.jpg" alt="internship">
              <p id="fp" class="f">In the summer of 2016, I had an internship in the University of Puerto Rico in the Rio Piedras campus. The internship consisted of researching a variety of topics, ranging from psychology to biology. A statistical paper was also revised so that it could be published later.</p>

              <img class="f" src="images/frisbee.png" alt="frisbee">
              <p id="fp" class="f">Being part of the Ultimate Frisbee team in the University of Rochester has been a personal accomplishment of mine in terms of the physical demand that it takes to play games, as well as team bonding. It is a way to practice self-discipline in that it requires you to keep up with practices and upcoming games.</p>

              <img class="f" src="images/ursegway.png" alt="ursegway">
              <p id="fp" class="f">I am the Male Outreach Chair of URSegway, a survivor empowerment organization. This organization is dedicated to educating about sexual assault and its prevention, as well as resources available to cope with it.</p>

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

</body>

</html>


