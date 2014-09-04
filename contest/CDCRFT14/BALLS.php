<?php require("../../includes/header.php"); ?><h1>Naughty and Balls</h1><div class="content">
<p>
  Mr. Naughty likes to play with balls. So his friend, Mr Nice, gave him <b>n</b><br />
  balls to play a game. Each ball has exactly two numbers (the number on the top<br />
  and the number on the bottom). In one move Mr Naughty can rotate any ball so<br />
  that its bottom now becomes the top. Mr Nice knows the minimum number of such<br />
  moves that can make at least half of the balls show same number on their top.<br />
  So to win Mr Nice's game, Mr Naughty should figure out the minimum number of<br />
  moves. Its not always possible to make such moves that satisfy the given<br />
  condition.In this case Mr Naughty should figure out that it is <b>"Impossible"</b> to<br />
  make such moves.</p>
<p>  Help Mr Naughty to win the game.
  </p>
<h3>Input Format:</h3>
<p>
  The first line contains a single integer <b>n</b> - the number of balls. The<br />
  following <b>n</b> lines contain the description of all balls, one ball per line.<br />
  Each description has a pair of non-negative integers not exceeding <b>10^5</b> -<br />
  numbers on top and bottom. The first number in a line is the number on top,<br />
  the second one - on the bottom. The number on the top of the ball may be same<br />
  as the number on the bottom.<br />
  The numbers in the lines are separated by single spaces.
  </p>
<h3>Output Format:</h3>
<p>
  On a single line print a single integer - the minimum number of moves to win<br />
  the game. If it is impossible to make the set funny, print <b>"Impossible"</b><br />
  (quotes for clarity).
  </p>
<h3>Constraints:</h3>
<p><b><br />
  1 &le; n &le; 10^5</b>
  </p>
<h3>Sample Input:</h3>
<pre>
3
3 100
100 3
5 4</pre><h3>Sample Output:</h3>
<pre>
1</pre><h3>Explanation:</h3>
<p>
  In this case Mr Naughty can rotate the first ball so that number on the top<br />
  becomes 100. Since two of the three balls have same number on their top (100),<br />
  you do not need to change anything else, so the answer is 1.
  </p>
<h3>Sample Input:</h3>
<pre>
5 
5 9
5 9
3 2
1 4
5 7</pre><h3>Sample Output:</h3>
<pre>
0</pre><h3>Sample Input:</h3>
<pre>
3
1 2
3 4
5 6 </pre><h3>Sample Output:</h3>
<pre>
Impossible</pre><p><br />
<b>Problem Setter: Prateek Sachdev</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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