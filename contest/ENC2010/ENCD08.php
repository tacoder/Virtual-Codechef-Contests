<?php require("../../includes/header.php"); ?><h1>Build the ladder</h1><div class="content">

<p>You are building a two way,triangular ladder. The ladder has N levels, numbered 1 through N from top to bottom. You have 3 types of marbles a,b,c, and you've decided to use them in the following manner: Within each row, you will select the types of the marbles such that there is an equal number of marbles of each type used in that level. For example, consider the following two- "two way ladders":</p>
<pre>
       a                   a
     c   b              c   b 
  a   a   a         a   c   a
</pre><p>The ladder on the left is correct. Each row contains an equal number of marbles for each type of marble. The ladder on the right, however, is not correct because the third level contains an unequal number of a and c marbles. It is obvious that at each level k, you will have a row of exactly k marbles.</p>
<h3>Input</h3>
<p>Every input will have 4 values. You are given an int N,<br />
N>0 and N&lt;=10 the number of levels in the ladder, and 3 different integers a, b and c, all greater then or equal to 0 and less then or equal to 50, representing the number of available marbles of the given type. Terminate the input with N=0.</p>
<h3>Output</h3>
<p>Return the number of distinct correct ways to form the ladder. Two ladders are different if there is at least one position at which the two ladders have a different marbles. If it is impossible to create any ladder with the given marbles, return 0.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2
1
0
3
2
2
1
3
2
2
2
0
<b>Output:</b>
3
0
36
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rscrbv">rscrbv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td> - 5 sec</td>
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