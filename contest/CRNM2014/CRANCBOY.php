<?php require("../../includes/header.php"); ?><h1>Crazy Boy</h1><div class="content">
<p>Crazy Boy had a tough Math exam in school today. On returning home, he realizes that he made a crucial error in the paper. In all the problems which involved calculating the determinant of a matrix, he forgot to multiply the minors with the sign term (-1)^(i + j), which resulted in wrong cofactors, and thus the wrong determinant. On further thought, he finds this slight error quite interesting and decides to calculate this new value obtained by skipping the sign term, for arbitrary matrices. Write a program that calculates it for him and makes his task easier.</p>
<h3>Input</h3>
<p>The first line contains an integer N, the size of the square matrix.</p>
<p>Lines 2 to N+1 contain N space separated integers each, denoting the values A[i][j] (j'th number in the i'th row)</p>
<h3>Output</h3>
<p>Output the result modulo 10^9+7.</p>
<h3>Constraints</h3>
<p>1 &lt;= N &lt;= 20</p>
<p>-10^9 &lt;= A[i][j] &lt;= 10^9</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
2</pre><pre>2 -3</pre><pre>-8 -1
<strong>Output:</strong>
22</pre><pre><strong>Input</strong></pre><pre>3 </pre><pre>1 2 3</pre><pre>4 0 6</pre><pre>-1 2 8</pre><pre><span>Output</span></pre><pre>88</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/apoorv_j">apoorv_j</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-02-2014</td>
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