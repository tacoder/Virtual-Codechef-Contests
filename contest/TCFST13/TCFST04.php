<?php require("../../includes/header.php"); ?><h1>TICC</h1><div class="content">
<p> </p>
<p>At Techfest International Coding Challenge, there are n participants sitting  from m different countries of the world in a single line on their computers. The administrator is given the power to choose atmost k participants and eliminate them out of the line. </p>
<p>After the eliminations, the remaining participants come closer to fill up the gaps created by the administrator. The skill of the administrator is decided on the points he scores by carrying out this elimination, which is calculated as follows: </p>
<p>The score is the maximum number of participants of a single country sitting together consecutively in the line after the closing of the gaps post elimination. Remember, the administrator may eliminate no more than k participants. It is allowed not to eliminate anyone at all. </p>
<p> </p>
<h3>Input</h3>
<p>The input consists of three space separated integers n, m, k. In the next line there are n integers from 1 to m - the number of participant country. The numbers alloted to countries are separated by single space.</p>
<p> </p>
<h3>Output</h3>
<p>Print the maximum score</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ n ≤ 2·10<sup>5</sup> <br />
1 ≤ m ≤ 10<sup>5</sup> <br />
0 ≤ k &lt; n</p>
<h3>Examples</h3>
<pre><b>Input:</b>
10 2 2
1 2 1 2 1 1 2 1 1 2
<b>Output:</b>
5
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divyambansal">divyambansal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-10-2013</td>
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