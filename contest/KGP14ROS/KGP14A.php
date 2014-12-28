<?php require("../../includes/header.php"); ?><h1>Drawing Contest</h1><div class="content">
<p>Liliputs are holding a drawing competition for K kids, but with K human-sized pencils stolen from humans. In order to make life easier for the kids, the organizers want to give a pencil to each kid in a way such that the sum of the absolute differences of the height of a kid and the length of the pencil assigned to him/her is minimized. What is the minimum sum of absolute differences that can be achieved?<br />
<h3>Input</h3>
</p><p>The first line contains the number of test cases <b>N (0 &lt; N ≤ 3)</b>. </p>
<p>For each test case, the first line contains the number of kids and pencils K (0 &lt; K ≤ 100). The second line contains K positive integers, each containing the height in millimeter of a kid. The third line contains K positive integers, each containing the length in millimeter of a pencil.</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the minimum sum of absolute differences achieved (in millimeter).</p>
<h3>Sample Input</h3>
<pre>
2
5
51 60 51 72 70 
65 60 88 72 88 
4 
123 234 188 175 
219 334 122 233
</pre><h3>Sample Output</h3>
<pre>
Case 1: 69 
Case 2: 190
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-12-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>