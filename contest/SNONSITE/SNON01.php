<?php require("../../includes/header.php"); ?><h1>Finding Maximum</h1><div class="content">

<p>One way of finding the maximum element in an array is to initialize a variable to the first element in the array, iterate through the remaining array, and update the variable whenever a value strictly greater than it is found. Assuming that the array contains N elements each in the range 1..K, how many such arrays exist such that the above algorithm performs exactly P updates? Initialization of the variable is not counted as an update.</p>
<p>For example,the possible arrays for N = 4,K = 3 and P = 2 are</p>
<p>1) {1,1,2,3}</p>
<p>2) {1,2,1,3}</p>
<p>3) {1,2,2,3}</p>
<p>4) {1,2,3,1}</p>
<p>5) {1,2,3,2}</p>
<p>6) {1,2,3,3}</p>
<h3>Input :</h3>
<p>The first line contains T the number of test cases. There follow T lines, containing 3 space seperated integers N,K and P.</p>
<h3>Output :</h3>
<p>Output T lines, one for each test case. On each line, output the answer as asked above. Since the answers can get very big, output the answer modulo 1000000007.</p>
<h3>Sample Input :</h3>
<pre>
3
4 3 2
2 3 1
3 4 1
</pre><h3>Sample Output :</h3>
<pre>
6
3
30
</pre><h3>Constraints :</h3>
<p>1 &lt;= T &lt;= 100</p>
<p>1 &lt;= n &lt;= 100</p>
<p>1 &lt;= K &lt;= 300</p>
<p>0 &lt;= P &lt; n</p>
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
            <td>8 sec</td>
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