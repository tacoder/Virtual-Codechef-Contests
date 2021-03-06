<?php require("../../includes/header.php"); ?><h1>Post Office</h1><div class="content">

<p>It's the 1st of the month again, which means it's time for Dave to pay his bills.<br />
Dave needs to go to the post office to mail his rent cheque, and wants to take the<br />
shortest route possible.  Dave wonders how many different shortest routes he can take.</p>
<p>Dave lives at the southwest corner of town (0,0) and the post office is at the northeast corner of town (W,H).<br />
It takes Dave exactly one minute to move from (x, y) to (x, y+1), (x, y-1), (x+1, y) or (x-1, y).<br />
Dave cannot move further south or west than his house, nor can he move further north or east than the post office<br />
(that is, Dave's x coordinate must stay between 0 and W, and his y coordinate must stay between 0 and H at all times).<br />
Additionally, there are N intersections that are being worked on by construction crews,<br />
and Dave must avoid these intersections.</p>
<p>The number of shortest routes may be very large, so print the result modulo 1000000037.<br />
If it is impossible for Dave to reach the post office, the answer is 0.</p>
<h3>Input:</h3>
<p>Input begins with an integer T, the number of test cases.<br />
Each test case begins with 3 integers W, H, N.<br />
N lines follow, each containing 2 integers (x<sub>i</sub>, y<sub>i</sub>), the coordinates of an intersection being worked on by a construction crew.<br />
Intersections are guaranteed to be unique, and neither (0,0) nor (W,H) will be under construction.<br />
A blank line separates each test case.
</p>
<h3>Output:</h3>
<p>For each test case, output a line containing the number of shortest paths to the post office, modulo 1000000037.</p>
<h3>Sample input:</h3>
<pre>3

2 2 1
1 1

1 1 2
0 1
1 0

7 1 2
1 0
4 1
</pre><h3>Sample output:</h3>
<pre>2
0
6
</pre><h3>Constraints</h3>
<p>
1&lt;=T&lt;=30<br />
1&lt;=W,H&lt;=10<sup>7</sup><br />
0&lt;=x<sub>i</sub>&lt;=W<br />
0&lt;=y<sub>i</sub>&lt;=H<br />
0&lt;=N&lt;=max(100,min(W,H,1000))
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anshuman_singh">anshuman_singh</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-07-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>