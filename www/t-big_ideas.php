<!DOCTYPE html>
        <h2 id="CBSubHeaderText" class="center">Topics</h2>
		 <a href="./home.php?dest=Teachers Home"><div class="nav-item">Teacher</div></a>';
		  <a href="/t-big_ideas.php?dest=Course Topics?topic=GlobalImpact"><div class="menu-item center">Global Impact</div></a>
		  <a href="/t-big_ideas.php?dest=Course Topics?topic=Abstraction"><div class="menu-item center">Abstraction</div></a>
		<section class="dialog center">
			<p>Important topics related to Computer Science.
			</p>
		</section>

		<section id="iframe">
 <?php
$frame = $_GET['topic'];

switch ($frame) {
    case "Creativity":
        echo "<iframe src="clients/treehouse/"></iframe>";
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


		</section>
