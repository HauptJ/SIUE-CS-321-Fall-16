<!DOCTYPE html><html>  <head>    <link rel="stylesheet" type="text/css" href="css/style.css">  </head>  <body>    <article class="page">      <header id="CBHeader">        <a href="index.html"><img id="homeIcon" src="icons/home.jpg" alt="home icon"></a>        <h1 id="CBHeaderText">College Board</h1>
        <h2 id="CBSubHeaderText" class="center">Topics</h2>      </header>      <section id="home">      </section>	  <nav>		 <a href="./home.php?dest=Home"><div class="nav-item">Home</div></a>';
		 <a href="./home.php?dest=Teachers Home"><div class="nav-item">Teacher</div></a>';	  </nav>	  <section class="menu">	    <div class="menu-header" id="big_idea" >Select a topic!</div>		  <a href="/t-big_ideas.php?dest=Course Topics?topic=Creativity"><div class="menu-item center">Creativity</div></a>		  <a href="/t-big_ideas.php?dest=Course Topics?topic=DataAndInfo"><div class="menu-item center">Data and Information</div></a>		  <a href="/t-big_ideas.php?dest=Course Topics?topic=Alorithms"><div class="menu-item center">Algorithms</div></a>
		  <a href="/t-big_ideas.php?dest=Course Topics?topic=GlobalImpact"><div class="menu-item center">Global Impact</div></a>
		  <a href="/t-big_ideas.php?dest=Course Topics?topic=Abstraction"><div class="menu-item center">Abstraction</div></a>		  <a href="/t-big_ideas.php?dest=Course Topics?topic=Programming"><div class="menu-item center">Programming</div></a>		  <a href="/t-big_ideas.php?dest=Course Topics?topic=Internet"><div class="menu-item center">The Internet</div></a>	  </section>
		<section class="dialog center">
			<p>Important topics related to Computer Science.
			</p>
		</section>

		<section id="iframe">
 <?php
$frame = $_GET['topic'];

switch ($frame) {
    case "Creativity":
        echo "";
        break;
    case "DataAndInfo":
        echo "Your favorite color is blue!";
        break;
    case "Alorithms":
        echo "Your favorite color is green!";
        break;
    case "GlobalImpact":
        echo '<h1 class="center" id ="data_and_info_header" align="center"> After discussing this article with the class, have them list the pros and cons of how computer science has affected the world.</h1>';
		    echo '<iframe src="http://www.wisenepali.com/2014/11/positive-and-negative-impact-of.html" width="100%" height="750" seamless">
      <p>Your browser does not support iframes.</p></iframe>';
        break;
    case "Abstraction":
        echo "Your favorite color is green!";
        break;
    case "Programming":
        echo "Your favorite color is green!";
        break;
    case "Internet":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?> 


		</section>    </article>
  </body></html>
