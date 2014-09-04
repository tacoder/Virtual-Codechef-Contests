<?php require("../../includes/header.php"); ?><h1>Sum3</h1><div class="content">

<p>You're given an array 'a' of N distinct integers.<br />
Let's consider a triple ( i, j, k ), 0 &lt;= i &lt; j &lt; k &lt;= N-1.<br />
The sum of corresponding elements is equal to a[i]+a[j]+a[k].<br />
For all the possible sums you can get by choosing such a triple<br />
output its value and the number of triples that result in such a sum.</p>
<h3>Input</h3>
<p>The first line of input contains an integer N (3 &lt;= N &lt;= 20000).<br />
Each of the next N lines contain an integer a[i] (|a[i]| &lt;= 10000).</p>
<h3>Output</h3>
<p>Output each of the possible sums in increasing order with the number of triples that generate them. The format should be:<br />
s[i] : ways[i]</p>
<p>(s[i] = value of the i-th sum, ways[i] = number of triples that generate it)</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
-1
2
3
4


<b>Output:</b>
4 : 1
5 : 1
6 : 1
9 : 1

<h3>Constraints:</h3>
3 &lt;= N &lt;= 20000
|a[i]| &lt;= 10000 for all i.

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/encoded_admin">encoded_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, ICON, JAR, JAVA, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>