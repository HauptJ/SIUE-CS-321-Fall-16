<header id="CBHeader">        <a href="index.html"><img id="homeIcon" src="icons/home.jpg" alt="home icon"></a>        <h1 id="CBHeaderText" class="center">College Board</h1>      </header>
      
      
      <!-- 
      <section id="home">      </section>
      -->
      
      
<?php
/*This is the Page Header, as in the content that appears*/

      	echo "<nav>";	/*Nav Buttons Go BELOW and BETWEEN*/
	/*navButton("./index.html","Home");*/
	
	
	/**END**/	echo "</nav>";


/*Generates a button for the nav-chain*/
function navButton(var $link,var $txt) {
	return "<a href='$link'><div class='nav-item'>$txt</div></a>";
}
?>