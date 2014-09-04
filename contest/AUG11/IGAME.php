<?php require("../../includes/header.php"); ?><h1>Infinite Grid Game</h1><div class="content">

<p align="justify">After a long period of relaxation Alice and Bob decided to play a game.<br />
This time of course not a number game. The rules of the game are as follows:</p>
<p align="justify">There is a vehicle situated at the point <strong>(m, n)</strong> of a rectangular grid.<br />
Only one corner of the rectangular grid is defined, i.e. the left-top point <strong>(0, 0)</strong>,<br />
which is also known as the origin. The grid extends infinitely towards east and infinitely towards south.<br />
Alice and Bob are both sitting in a vehicle, initially situated at the point <strong>(m, n)</strong>.<br />
The game they are playing ends as soon as one of them reaches <strong>(p, q)</strong>.</p>
<p align="justify">Now, Alice and Bob have to drive the vehicle in their respective turn.<br />
In their own turn they can move the vehicle, from <strong>(x, y)</strong> to <strong>(x', y)</strong><br />
or <strong>(x, y')</strong>; where <b>p ≤ x' &lt; x</b> and <b>q ≤ y' &lt; y</b>.<br />
They can also move the vehicle to the point <strong>(x-a, y-a)</strong>, where <b>0 &lt; a ≤ min(x-p, y-q)</b>.<br />
Also, <b>0 ≤ p &lt; m</b> and <b>0 ≤ q &lt; n</b>.<br />
The winner is the game is the one who drives the vehicle to <strong>(p, q)</strong>.</p>
<p align="justify">Cunning Alice uses a biased coin for tossing purpose and always plays first.<br />
It is assumed that both Alice and Bob play optimally in their respective turns.</p>
<h3>Input</h3>
<p align="justify">The first line contains a single integer T denoting the number of test cases.<br />
T test cases follow. Each test case consists of a single line consisting of four space separated integers m, n, p, q<br />
respectively.</p>
<h3>Output</h3>
<p align="justify">For each test case print a string - either "Alice" or "Bob" (without the quotes), denoting the winner.</p>
<h3>Constraints</h3>
<p>1 ≤ T ≤ 1000<br />
1  ≤ m, n  ≤ 1000<br />
0 ≤ p &lt; m<br />
0 ≤ q &lt; n</p>
<h3>Sample Input</h3>
<pre>2
1 1 0 0
2 4 1 2

</pre><h3>Sample Output</h3>
<pre>Alice
Bob

</pre><h3>Explanation</h3>
<p align="justify">In the second test case, initially the vehicle is at co-ordinate (2, 4).<br />
Alice now has four possible moves. Alice can move the vehicle to position (1, 4), (1, 3), (2, 3) and (2, 2).<br />
For all moves that Alice can do, Bob can move the vehicle to the position (1, 2), winning the game.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/nssprogrammer">nssprogrammer</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-07-2011</td>
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