<?php require("../../includes/header.php"); ?><h1>Maximum Sum Sequences</h1><div class="content">
<p>Given an array A having n elements, let X be the maximum sum of any contiguous sequence in the array. How many contiguous sequences in A sum up to X ?</p>
<h3>Input :</h3>
<p>The first line contains T the number of test cases. There follow 2T lines, 2 for each test case. The first line contains the n, the number of elements in the array. The second line contains n space seperated integers Ai.</p>
<h3>Output :</h3>
<p>Output T lines, one for each test case. On each line, output two space seperated integers; the maximum sequence sum, and the number of sequences which obtain this maximum sum.</p>
<h3>Sample Input :</h3>
<pre>2
3
-1 -1 -1
4
2 0 -2 2
</pre><h3>Sample Output :</h3>
<pre>-1 3
2 4
</pre><h3>Constraints :</h3>
<p>1 &lt;= T &lt;= 35</p>
<p>1 &lt;= n &lt;= 100000</p>
<p>-1000 &lt;= Ai &lt;= 1000</p>
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
            <td>4 sec</td>
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