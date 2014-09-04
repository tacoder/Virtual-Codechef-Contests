<?php require("../../includes/header.php"); ?><h1>Chef Food Ordering</h1><div class="content">

<p>Chef has prepared n food items numbered from 1 to n.<br />
But he will not supply the food in order.Instead he arranged the food<br />
items in a circle and<br />
he will supply every kth food item.(supply means to remove the food item from<br />
the circle).</p>
<p>Consider for example n = 5, k = 2,</p>
<p>Food items:<br />
1 2 3 4 5.</p>
<p>1st person gets 2nd item<br />
2nd person gets 4th item<br />
3rd person gets 1st item<br />
4th person gets 5th item<br />
5th person gets 3rd item</p>
<p>His manager questioned him, which food item qi'th person would get.<br />
There are Q questions from his manager.Chef has to answer all the Q questions.<br />
So chef need your help to find out the answer.</p>
<h3>Input Format</h3>
<pre>n k
Q
q1 q2 q3 ... qn

<h3>Output Format</h3>
a1 a2 a3 ... an
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
5 2
5
1 2 3 4 5
0 0

<b>Output:</b>
2 4 1 5 3



<b>Constraints:</b>
1 &lt;= k &lt;= n &lt;= 100000
Q &lt;= n
1 &lt;= qi &lt;= n for all 1 &lt;= i &lt;= Q
There will be not more than 100 test cases.

<b>Explanation:</b>
This test case is from the example explained above.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/styrofox">styrofox</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-03-2011</td>
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
    </table> <?php require("../../includes/footer.php"); ?>