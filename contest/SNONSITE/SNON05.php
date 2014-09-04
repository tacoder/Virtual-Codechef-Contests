<?php require("../../includes/header.php"); ?><h1>Travelling Knight</h1><div class="content">
<p>Your task is simple. A knight is placed on the top left corner of a chessboard having 2n rows and 2n columns. In how many ways can it move such that it ends up at a corner after atmost K moves ?</p>
<h3>Input :</h3>
<p>The first line contains T the number of test cases. Each of the next T lines contain 2 integers : n,k</p>
<h3>Output :</h3>
<p>Output T lines, one for each test case, containing the required total number of configurations. Since the answers can get very big, output the answer modulo 1000007.</p>
<h3>Sample Input :</h3>
<pre>3
2 1
2 2
3 3
</pre><h3>Sample Output :</h3>
<pre>1
5
7
</pre><h3>Constraints :</h3>

<p>1 &lt;= T &lt;= 50
</p>
<p>2 &lt;= n &lt;= 12
</p>
<p>1 &lt;= k &lt;= 1000000000</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/fctrl">fctrl</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-12-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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