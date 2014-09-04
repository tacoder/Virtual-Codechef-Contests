<?php require("../../includes/header.php"); ?><h1>Se7en</h1><div class="content">

<p>Tomek and his numerous friends are standing in a circle. They are all numbered with consecutive identifiers, from 1 to 1337 in the clockwise direction. Starting from person 1, who says "1", successive people read out successive positive integers. The starting direction is clockwise, and there is rule, that whenever integer is divisible by 7 or contains digit 7, the direction is reversed.</p>
<p>So, the identifiers of the persons who read-out successive numbers, are: 1,2,3,4,5,6,7 (person 7 has just read "7" and reversed the direction),6,5,4,3,2,1,1337 (person 1337 has just read "14" and reversed the direction),1,2,3 (person 3 has just read "17" and reversed the direction),2,1,1337,1336, and so on. Tomek has his favorite number, and he wants to calculate where in the circle he should stand to read that number out loud. Even though he is skilled programmer, he is a bit little lazy and would like you to help him out.</p>
<h3>Input</h3>
<p>First, 1 &#8804; <var>t</var> &#8804; 1000, the number of test cases. Each test case is in a separate line, and contains a positive integer smaller than 10<sup>100</sup>, representing Tomek's favorite number.</p>
<h3>Output</h3>
<p>For each testcase, output one integer, the identifier which Tomek should choose in the circle to read his favorite integer loud.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
3
10
100
1000

<strong>Output:</strong>
4
2
1311
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-07-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>