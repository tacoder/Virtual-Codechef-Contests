<?php require("../../includes/header.php"); ?><h1>The Shortest Path</h1><div class="content">

<p>
Mr. X stays in a mansion whose door opens in the North. He travels every morning to meet his friend Ms. Y walking a predefined path.</p>
<p>
To cut the distance short, one day he decides to construct a skywalk from his place to his friend&rsquo;s place. Help him to find the shortest distance between the two residences.</p>
<h3>Input</h3>
<p>
The first line contains a single positive integer T &lt;= 100, the number of test cases. T test cases follow. The only line of each test case contains a string which is the path from X to Y. The integer value represents the distance. The character R or L represents a Right or a Left respectively.</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the minimum distance and the direction(N,S,W,E,NE,NW,SE,SW) of Y&rsquo;s residence with respect to X&rsquo;s residence. The output distance should have only 1 decimal place with no approximation. Print &ldquo;0.0&rdquo; if X&rsquo;s and Y&rsquo;s residence coincide.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2 L 2 R 2 L 1

<b>Output:</b>
5.0NW

<b>Explanation</b>
Mr. X travels 2units and then takes a Left, and then he travels 2units and takes a Right, then after travelling 2units he takes a Left and finally travels 1unit to reach Y&rsquo;s residence.
(Unlike Input, Output does not have spaces between the distance and direction)

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rishi_agarwal">rishi_agarwal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>50 sec</td>
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