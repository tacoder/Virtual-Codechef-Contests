<?php require("../../includes/header.php"); ?><h1>LCM GCD Love</h1><div class="content">

<p>Bob fell in love with LCM and GCD. So much that he started seeing LCMs and GCDs everywhere.</p>
<p>Betty, his girl friend was jealous and she gave Bob an array A[ ] of integers, which had nothing to do with LCMs or GCDs.</p>
<p>Quickly, naughty Bob evaluated a new array B[ ] containing n integers, such that B[i] is LCM(1,2,3,...,A[i]), if A[i]>0. When A[i] is 0, B[i] is also 0.</p>
<p>Angry Betty decided to give m queries to Bob, each being one of the following type:</p>
<p>-   "0 i j p", meaning add 'p' to each element in A[i..j]. ( -300000&lt;= p &lt;= 300000)</p>
<p>-   "1 i j"    , meaning print the LCM of all elements in B[i..j]. 0&lt;=i<j<n</p>
<p>-   "2 i j"    , meaning print the GCD of all elements in B[i..j].0&lt;=i<j<n</p>
<h3>Input</h3>
<p>First line contains n(n &lt;= 100000 ) and m( m &lt;= 35000 ).</p>
<p>Second line contains n integers in the original array A[ ] .</p>
<p>Next m lines contain one of the above said queries.</p>
</j<n</p></p>
<p>It is guaranteed that A[i] after any number of updates will satisfy 0&lt;=A[i]&lt;=300000.<br />
<h3>Output</h3>
</p><p>Output one line for each query of type 1 or 2, modulo 1000000007.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 5
4 1 3 6 2
1 2 4
2 1 3
0 0 3 2
1 1 2
2 2 4


<b>Output:</b>
60
1
60
2
</pre></j<n</p></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mandark">mandark</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>