<?php require("../../includes/header.php"); ?><h1>Primal Instincts</h1><div class="content">

<p>
Given a 3x3 matrix of numbers from 0-9 (inclusive), you can form a new number by starting from any position in the matrix, taking that number and then visiting any of its unvisited neighbor and appending the integer at that position to the number formed till now and continuing in the same fashion. You can no longer append integers, if there is no neighbor of the last integer used which is still unvisited. You obviously can also stop anytime before this happens. <br /><br /></p>
<p>Print the largest prime number that can be found in this fashion. If no such number exists, print -1.<br /><br />
(Note: Numbers which are adjacent to each other vertically or horizontally are considered neighbors).<br />
<br /></p>
<h3>Input</h3>
<p>
1.The first input will be T, the tumber of testcases. T &lt;= 50. <br /><br />
2.For each test case, there would be 3 lines each having 3 integers separated by spaces.<br /><br />
3.Consecutive test cases are separated by a blank line.</p>
<h3>Output</h3>
<p>
 1.For each test case, print the largest prime number found by the above method, else print -1.<br /></p>
<h3>Example</h3>
<pre>
<b><br />Input:</b>
1
1 2 3
4 5 6
7 8 9
<b><br />Output:</b>
69854123

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/csirubix">csirubix</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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