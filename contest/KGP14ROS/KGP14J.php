<?php require("../../includes/header.php"); ?><h1>Finding Exponent</h1><div class="content">
<p>Professor Calculus gives the following problem to his students: given two integers <b>X</b> (≥ 2) and <b>Y</b> (≥ 2), find the smallest positive integral exponent E such that the decimal expansion of <b>X<sup>E</sup></b> begins with <b>Y</b>. For example, if <b>X</b> = 8 and <b>Y</b> = 51, then <b>X<sup>3</sup></b> = 512 begins with <b>Y</b> = 51, so <b>E</b> = 3. It is easy to see that neither <b>E</b> = 1 nor <b>E</b> = 2 will satisfy this property, so 3 is the smallest possible value of <b>E</b> in this case. Professor Calculus has also announced that he is only interested in values of <b>X</b> such that <b>X</b> is not a power of 10. The professor has a proof that in this case, at least one value of <b>E</b> exists for any <b>Y</b>.</p>
<p>The students set out to write a program for this, and run it on their department's server. However, they quickly find out that even though <b>X</b>, <b>Y</b>, and <b>E</b> will fit into a single integer, <b>X<sup>E</sup></b> may be too large to fit into any single data type of any language they can program in. Can you help the students to find the value of the exponent <b>E</b>?</p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>N</b> (0 &lt; <b>N</b> ≤ 3).</p>
<p>For each test case, there is a single line containing the integers <b>X</b> and <b>Y</b>.</p>
<h3>Output</h3>
<p>For each test case, in the first line, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating estimated minimum travel time.</p>
<h3>Constraints:</h3>
<p>1 ≤ <b>X</b>, <b>E</b> ≤ 1000</p>
<h3>Sample Input</h3>
<pre>
2 
5 156 
16 4
</pre><h3>Sample Output</h3>
<pre>
Case 1: 6
Case 2: 3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>