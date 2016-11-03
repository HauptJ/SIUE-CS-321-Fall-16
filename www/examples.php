<?php
if (strcmp($_GET['dest'],"Ex-Algo1") == 0) {
		echo "<!DOCTYPE html><html>  <head>    <link rel='stylesheet' type='text/css' href='/css/style.css'>
    <link rel='stylesheet' type='text/css' href='/css/examples.css'>  </head>  <body>    <article class='page'>            <header id='CBHeader'>        <a href='index.html'><img id='homeIcon' src='/icons/home.jpg' alt='home icon'></a>        <h1 id='CBHeaderText' class='center'>College Board</h1>
        <h2 id='CBSubHeaderText'>Student</h2>      </header>	  <nav>		 <a href='./home.php?dest=Home'><div class='nav-item'>Home</div></a>
		 <a href='./home.php?dest=Student Home'><div class='nav-item'>Student Home</div></a>
		 <a href='./home.php?dest=Examples'><div class='nav-item'>Examples</div></a>	  </nav>

	  	<section class='center dialog'><p>The following question uses a robot in a grid of squares. The robot is represented as a triangle, 
which is initially in the bottom left square of the grid and facing right.</p>
		<table>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>&#x25BA;</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>

		<p>Consider the following code segment which moves the robot in the grid.</p>
		<div id='code'>
		<section class='codestatement float-left'>n&#x2190;3
		</section>
		<br />
		<section class='controlblock'>Repeat 3 times
			<section class='codeblock tab'>
				<section class='controlblock'>Repeat n times
					<section class='codeblock tab'>
						<section class='codestatement'> Move forward
						</section>
						
					</section>
				</section>
				<section class='codestatement'> Turn Left
						</section><br />
						<section class='codestatement'> n&#x2190; n-1
						</section>
			</section>
		</section>
		</div><br>
		Control Code is shown in <span class='controlblock'>green</span>, and operations are shown in <span class='codestatement'>orange</span>, and blocks of code are shown in <span class='codeblock'>pink</span>.
		<br><br><p>First 3 is assigned to n</p>
		<p>The next instruction to be executed will be Move forward. Since this is within a loop, it will be repeated multiple times. In our case, n.</p>
		
		<table>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>&#x25BA;</td>
				<td></td>
			</tr>
		</table>
		<p> Since the robot was facing right, he moved 3 squares to the right following the execution of that loop.
	<br><br>	<p> The next operation is to turn left.
		<table>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>&#x25B2;</td>
				<td></td>
			</tr>
		</table>
	
	<p> The next operation is to decrement n by 1. So the value of n is now 2. After this statement we begin this loop again by returning to the top of the code block. 
<br><br>
		<p> The operation at the top of this code block is a Control statement, meaning it determines what is going to happen next in the program. This control block is what contains the Move forward operation. Block of code will be executed twice, the same as the value of n.
		<table>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>&#x25B2;</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>	<p> The robot comes to rest 2 blocks up from here it was.	<br><br>
	<p> The next operation says to turn left, resulting in this.
	<table>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>&#x25C4;</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<p> After the robot turns, the value of n is to be decremented again. n is now 1.
		<br><br>
		<p>The robot will now start the outter repeat block of code for its 3rd time, signaling that is the last time for it to repeat.
		
<table>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>&#x25C4;</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<p>		The robot has moved forward n times(1).
		
		<br><br>
		<p> The robot now turns left.
		<table>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>&#x25BC;</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<p> The last operation is n is decremented by 1 so that its value is now 0. The repeat statement exits and the code segment is terminated. So the robots final position is shown above.
		    </article>
	  </body></html>";
} else if (strcmp($_GET['dest'],"Ex-Abst1") == 0) {
	echo "<!DOCTYPE html><html>  <head>    <link rel='stylesheet' type='text/css' href='/css/style.css'>
    <link rel='stylesheet' type='text/css' href='/css/examples.css'>  </head>  <body>    <article class='page'>            <header id='CBHeader'>        <a href='index.html'><img id='homeIcon' src='../icons/home.jpg' alt='home icon'></a>        <h1 id='CBHeaderText' class='center'>College Board</h1>
        <h2 id='CBSubHeaderText'>Student</h2>      </header>	   <nav>		 <a href='./home.php?dest=Home'><div class='nav-item'>Home</div></a>
		 <a href='./home.php?dest=Student Home'><div class='nav-item'>Student Home</div></a>
		 <a href='./home.php?dest=Examples'><div class='nav-item'>Examples</div></a>	  </nav>

	  	<section class='center dialog'><p>A car is an abstraction that you drive!</p>
        <a><img id='carIcon' src='../icons/car.jpe' alt='car icon'></a>

		<p>Consider the following examples</p>
		<div id='carAbstractionExamples' align='center'>
			<figure class='abstraction_figures' id='car_key'>
                	<img src='../icons/car_key.png' alt='car_key' width='250' height='250' >
                	<figcaption>You use the car key to start the car. 
                	This abstacts details such as the starter motor, battery, etc..</figcaption>
                	</figure>
                	
			<figure class='abstraction_figures' id='gas_pedal'>
                	<img src='../icons/gas_pedal.png' alt='gas_pedal' width='250' height='250'>
                	<figcaption>You use the gas pedal to control the speed. 
                	You do not have to manually inject the gas into the engine 
                	and control the pistons</figcaption>
                	</figure>
                	
                        <figure class='abstraction_figures' id = 'steering_wheel'>
                	<img src='../icons/steering_wheel.gif' alt='gas_pedal' width='250' height='250'>
                	<figcaption>The steering wheel is another abstraction. You turn the wheel and it turns both front wheels at once, 				dramatically simplifying your task as a driver.</figcaption>
                	</figure>
	  </body></html>";
} else {
		echo "<html>  <head>    <link rel='stylesheet' type='text/css' href='../style.css'>
    <link rel='stylesheet' type='text/css' href='examples.css'>  </head>  <body>    <article class='page'>            <header id='CBHeader'>        <a href='index.html'><img id='homeIcon' src='../icons/home.jpg' alt='home icon'></a>        <h1 id='CBHeaderText' class='center'>College Board</h1>
        <h2 id='CBSubHeaderText'>Student</h2>      </header>	   <nav>		 <a href='./home.php?dest=Home'><div class='nav-item'>Home</div></a>
		 <a href='./home.php?dest=Student Home'><div class='nav-item'>Student Home</div></a>
		 <a href='./home.php?dest=Examples'><div class='nav-item'>Examples</div></a>	  </nav>";

}