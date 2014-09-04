<?php require("../../includes/header.php"); ?><h1>Bubbles</h1><div class="content">

<p><b>This problem was part of the <a href="http://www.codechef.com/APRIL09/">CodeChef April Challenge</a>.  All user submissions for this contest problem are publicly available <a href="http://www.codechef.com/APRIL09/status/BX/">here</a>.</b></p>
<p><strong>The following a tie breaker problem.  The best solution will receive one point.  All other successful answers will be scored on a curve and receive a fraction of a point based on how close they come to the best answer.</strong></p>
<p>Let's have some fun with soap bubbles... We drive several sticks vertically into a flat surface (so that they look like points from above), and spread a thin film of soap over all of them. The soap film tends to minimize the area of its surface, and eventually becomes very thin, with surfaces turning into lines spread over all points. When everything has settled down, we can assume that the "bubble" we have is in fact a set of line segments, which connect all of our sticks into one network (possibly via some intermediate points which can also be the endpoints of lines).</p>
<h3>Input</h3>
<p>First, 1&lt;=<var>n</var>&lt;=1000, the number of starting points to connect. Then, <var>n</var> pairs of numbers follow, representing the coordinates of sticks which the soap film will connect.</p>
<h3>Output</h3>
<p>First, you should output the number <var>m</var> of intermediate points you create. Then, the next <var>m</var> pairs of numbers are coordinates of intermediate points.<br />
Then, you should output <var>e</var>, the number of soap-bubble lines you create. Then, the next 2*<var>e</var> numbers represent the indexes of points which are connected by the given line. Each index <var>i</var> should be a number 0&lt;=<var>i</var> &lt; <var>n</var>+<var>m</var>. If <var>i</var> &lt; n, then it represents the <var>i</var>-th input point (stick). If <var>i</var>>=n, then it corresponds to the (<var>i</var>-<var>n</var>)-th intermediate point.</p>
<h3>Scoring</h3>
<p>
Your goal is to minimize the score obtained in this problem.</p>
<p>
As longer lines tends to get thinner, for each line segment of length t, you will receive t / max(1, ln(t)) penalty points, where "ln" is the logarithm in the natural base.<br />
You will additionally receive ln(m+1) penalty points if your solution uses <var>m</var> intermediate points.</p>
<p>
If the soap film given at output does not span  all the input points (connecting them into a network), your solution will be judged as incorrect.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
0.0 0.0
0.0 3.0
4.0 0.0

<b>Output:</b>
1
1.0 1.0
3
0 3
1 3
2 3

<b>Score:</b>
7.090148
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-03-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>