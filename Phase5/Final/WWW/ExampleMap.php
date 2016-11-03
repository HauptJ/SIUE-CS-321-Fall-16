<?php
$EX_NAME["Ex-Algo1"] ="Algorithm Analysis";
$EX_CONTENT["Ex-Algo1"][0] = "<section class='center dialog'><p>The following question uses a robot in a grid of squares. The robot is represented as a triangle, 
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
		<br><br>";
$EX_CONTENT["Ex-Algo1"][] = "<section class='center dialog'>

<div id='code'>
		<section class='codestatement float-left highlight'>n&#x2190;3
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
		</div>
<br><p>First, the value of 3 is assigned to the variable n.</p>";

$EX_CONTENT["Ex-Algo1"][] = "<section class='center dialog'>
	<div id='code'>
		<section class='codestatement float-left finished'>n&#x2190;3
		</section>
		<br />
		<section class='controlblock highlight'>Repeat 3 times
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
		The next element in the code sequence is a control statement. The control blocks is saying that the instructions in the code block should be repeated. So we will execute everything within the block as many times as it says to before continuing.";
?>