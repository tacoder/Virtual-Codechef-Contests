<?php require("../../includes/header.php"); ?><h1>Magical Plate</h1><div class="content">

<p>As a project for her arithmancy class, Hermoine has designed a magical plate which contains a sequence of <b>N</b> numbers which permutes according to a fixed permutation everyday. We denote the sequence of numbers on the ith day as <b>A[i][1], A[i][2], ... A[i][N]</b>.<br /><b>f[1],f[2]...f[N]</b> is a fixed permutation of (1,2,..<b>N</b>). The sequence <b>A[i+1][1],A[i+1][2],...A[i+1][N]</b> is the result of applying the permutation <b>f[1],f[2],..f[N]</b> to the sequence <b>A[i][1],A[i][2],...A[i][N]</b>. See the sample input for clarity.</p>
<p>The arithmancy teacher has asked Hermoine to report the sequence of numbers that she started with. Hermoine has forgotten the original sequence. Ron wants to impress Hermoine because well, she's gorgeous! He knows the number of days <b>K</b> that have passed since the design of the magical plate, the current sequence of numbers and the fixed permutation <b>f</b>. He now wants to find out the original sequence of integers on the magical plate.</p>
<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b>, the total number of test cases.</p>
<p>3*<b>T</b> lines follow, 3 corresponding to each test case.</p>
<p>The first line of each test case contains 2 space-seperated integers <b>N</b>,<b>K</b>.</p>
<p>The second line contains <b>N</b> space-seperated integers : <b>A[<b>K</b>][1], A[K][2], ... A[K][N]</b>.</p>
<p>The third line also contains <b>N</b> space-seperated integers : <b>f[1], f[2], ... f[N]</b>. It is guaranteed that <b>f[1],f[2],...f[<b>N</b>]</b> is a permutation of (1,2,...<b>N</b>).
</p>
<h3>Output</h3>
<p>The output must consist of <b>T</b> lines, one corresponding to each test case.</p>
<p>Corresponding to each test case output in a single line <b>N</b> space-seperated integers : <b>A[0][1], A[0][2], .. A[0][N]</b>.</p>
<p>It is trivial to note that the solution exists and is unique.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 10</p>
<p>1 &lt;= <b>N</b> &lt;= 1000</p>
<p>0 &lt;= <b>K</b> &lt; <b>N</b></p>
<p>1 &lt;= <b>A[K][i]</b> &lt;= 10^9</p>
<p>1 &lt;= <b>f[i]</b> &lt;= <b>N</b></p>
<p><b>f[i] != f[j]</b> for all i,j st 1 &lt;= i &lt; j &lt;= <b>N</b>.</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
5 2
200 100 500 300 400
3 4 5 1 2

<b>Output:</b>
100 500 300 400 200

</pre><h3>Explanation</h3>
<p>(100,500,300,400,200) -> (300,400,200,100,500) -> (200,100,500,300,400)
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2013</td>
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