<!DOCTYPE html><html>  <head>    <link rel="stylesheet" type="text/css" href="css/style.css">  </head>  <body>    <article class="page">      <header id="CBHeader">        <a href="index.html"><img id="homeIcon" src="icons/home.jpg" alt="home icon"></a>        <h1 id="CBHeaderText">College Board</p>
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
        echo '<p>Show students these, and then ask for other examples of creatity in real life and how they precieve being creative.</p>';
        echo '<a href="https://www.ted.com/topics/creativity">TED Creativity Series</a>';
        break;
    case "DataAndInfo":
        echo '<p>Show students this video about the differences between data, information and knowledge.</p>
	            <iframe width="1280" height="720" src="https://www.youtube.com/embed/mUgEgkV16Bw" frameborder="0" allowfullscreen></iframe>';
        break;
    case "Alorithms":
        echo '<p> Have your students try this Kahn Acadamy course on Algorithms. You may want to show the videos to your class first.</p>';
		    echo '<iframe src="https://www.khanacademy.org/computing/computer-science/algorithms" width="100%" height="750" seamless">
              <p>Your browser does not support iframes.</p></iframe>';
        break;
    case "GlobalImpact":
        echo '<p> After discussing this article with the class, have them list the pros and cons of how computer science has affected the world.</p>';
		    echo '<iframe src="http://www.wisenepali.com/2014/11/positive-and-negative-impact-of.html" width="100%" height="750" seamless">
              <p>Your browser does not support iframes.</p></iframe>';
        break;
    case "Abstraction":
        echo '<p>Show students this video, about abstraction and how it relates to Computer Science.</p>
	            <iframe width="1280" height="720" src="https://www.youtube.com/embed/p7nGcY73epw" frameborder="0" allowfullscreen></iframe>';
        break;
    case "Programming":
        echo '<p>Have your students play around with Scratch so they can gain a basic understanding of programming.</p>';
        echo '<iframe src="https://scratch.mit.edu/" width="100%" height="750" seamless">
              <p>Your browser does not support iframes.</p></iframe>';
        break;
    case "Internet":
        echo '<p>Show students this video about the history of the Internet.</p>
	            <iframe width="1280" height="720" src="https://www.youtube.com/embed/9hIQjrMHTv4" frameborder="0" allowfullscreen></iframe>';
        break;
    default: //FAILBACK
        echo "<p>This error is due to a bug in the application. Normally a frame should load here with information on the desired course topic.</p>";
        echo "<p>Below is a fail back containing all of the information presented.</p>";
        echo "<p>Plese choose the topic you would like to learn more about.</p>";


        echo "<br></br>"; //double line break
        echo "<h1>Creativity</p>";
        echo '<p>Show students these, and then ask for other examples of creatity in real life and how they precieve being creative.</p>';
        echo '<a href="https://www.ted.com/topics/creativity">TED Creativity Series</a>';

				echo "<br></br>"; //double line break
        echo "<h1>Data and Information</p>";
        echo '<p>Show students this video about the differences between data, information and knowledge.</p>
	            <iframe width="1280" height="720" src="https://www.youtube.com/embed/mUgEgkV16Bw" frameborder="0" allowfullscreen></iframe>';

				echo "<br></br>"; //double line break
	      echo "<h1>Algorithms</p>";
	      echo '<p> Have your students try this Kahn Acadamy course on Algorithms. You may want to show the videos to your class first.</p>';
		    echo '<iframe src="https://www.khanacademy.org/computing/computer-science/algorithms" width="100%" height="750" seamless">
              <p>Your browser does not support iframes.</p></iframe>';

				echo "<br></br>"; //double line break
        echo "<h1>Global Impact</p>";
        echo '<p> After discussing this article with the class, have them list the pros and cons of how computer science has affected the world.</p>';
		    echo '<iframe src="http://www.wisenepali.com/2014/11/positive-and-negative-impact-of.html" width="100%" height="750" seamless">
              <p>Your browser does not support iframes.</p></iframe>';

				echo "<br></br>"; //double line break
        echo "<h1>Abstraction</p>";
        echo '<p>Show students this video, about abstraction and how it relates to Computer Science.</p>
	            <iframe width="1280" height="720" src="https://www.youtube.com/embed/p7nGcY73epw" frameborder="0" allowfullscreen></iframe>';

				echo "<br></br>"; //double line break
	      echo "<h1>Programming</p>";
        echo '<p>Have your students play around with Scratch so they can gain a basic understanding of programming.</p>';
        echo '<iframe src="https://scratch.mit.edu/" width="100%" height="750" seamless">
              <p>Your browser does not support iframes.</p></iframe>';

				echo "<br></br>"; //double line break
        echo "<h1>The Internet</p>";
	      echo '<p>Show students this video about the history of the Internet.</p>
	            <iframe width="1280" height="720" src="https://www.youtube.com/embed/9hIQjrMHTv4" frameborder="0" allowfullscreen></iframe>';
}
?> 


		</section>    </article>
  </body></html>
