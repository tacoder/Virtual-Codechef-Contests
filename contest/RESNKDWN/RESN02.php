<?php require("../../includes/header.php"); ?><h1>XOR Rounds</h1><div class="content">

<p>You are given a cyclic array A having N numbers.</p>
<p>In an XOR round, each element of the array A is replaced by the bitwise XOR (Exclusive OR) of itself, the previous element, and the next element in the array. All operations take place simultaneously. Can you calculate A after K such XOR rounds ?</p>
<h3>Input</h3>
<p>The first line contains the number of test cases T (T &lt;= 50).</p>
<p>There follow 2T lines, 2 per test case. The first line contains two space seperated integers N (3 &lt;= N &lt;= 500) and K (1 &lt;= K &lt;= 1000000000). The next line contains N space seperated integers Ai (0 &lt;= Ai &lt;= 1000000000), which are the initial values of the elements in array A. </p>
<h3>Output</h3>
<p>Output T lines, one per test case. For each test case, output a space seperated list of N integers, specifying the contents of array A after K XOR rounds.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 1
1 2 3
5 100
1 11 111 1111 11111

<b>Output:</b>
0 0 0
11117 101 1075 12127 12081

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-12-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>15 sec</td>
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