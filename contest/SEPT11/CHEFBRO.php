<?php require("../../includes/header.php"); ?><h1>Younger Brother</h1><div class="content">

<p>Chef's younger brother is in town. He's a big football fan and has a very important match to watch tonight. But the Chef wants to watch the season finale of MasterChef which will be aired at the same time. Now they don't want to fight over it like they used to when they were little kids. They want to decide it in a fair way. So they agree to play a game to make a decision. Their favourite childhood game!</p>
<p>The game consists of C boards. Each board i is a grid of dimension ni x mi.</p>
<p>
<b>Rules of the game:</b><br/><br />
- A coin is placed at (1,1) on every board initially.<br/><br />
- Each one takes a turn alternatively.<br/><br />
- In one turn, a player can choose any <b>one</b> board and move a coin from a cell (i,j) to one of the following cells:<br/><br />
	(i+1,j) OR (i+2,j) OR (i,j+1) OR (i,j+2) OR (i+1,j+1) OR (i+2,j+2).<br/><br />
- A coin cannot be moved out of the board at any point during the game.<br/><br />
- A coin cannot be moved once it reaches the cell (n,m) where n and m are the dimensions of the board of that coin.<br/><br />
- A player MUST make one valid move.<br/><br />
- The player who makes the last move gets to watch TV.<br />
</br/></br/></br/></br/></br/></br/></br/></br/></p>
<p>Both of them are passionate about their interests and want to watch their respective shows. So they will obviously make optimal moves in every turn. The Chef, being the elder brother, takes the first turn.</p>
<p>Your task is to predict which show they will be watching tonight.</p>
<h3>Input:</h3>
<p>The first line of input contains a single integer T, the number of test cases. T tests follow.Each test case starts with a single line containing C, the number of boards in the game.<br />
Then follow C lines: each containing 2 integers ni and mi, the dimensions of the ith board.</p>
<h3>Output:</h3>
<p>Given the number and dimensions of boards, for each test case, output in a single line: "MasterChef" if the Chef wins or "Football" if his brother wins.</p>
<h3>Constraints:</h3>
<p>1&lt;=T&lt;=10000<br/><br />
1&lt;=C&lt;=20<br/><br />
2&lt;=ni,mi&lt;=1000<br/></br/></br/></br/></p>
<p><br/></br/></p>
<h3>Example:</h3>
<p><b>Input:</b><br/><br />
1<br/><br />
1<br/><br />
2 2<br/><br/></br/></br/></br/></br/></br/></p>
<p><b>Output:</b><br/><br />
MasterChef<br/><br/></br/></br/></br/></p>
<p><b>Explanation: </b><br/></br/></p>
<p>The Chef can move the coin on the board from (1,1)->(2,2). This coin cannot be moved any further. And so, the Chef wins.<br />
Notice that if the Chef moves it to any other valid position, i.e. either to (1,2) or (2,1) he will lose!</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-07-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>