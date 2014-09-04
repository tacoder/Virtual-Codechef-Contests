<?php require("../../includes/header.php"); ?><h1>Weird Function</h1><div class="content">
<p>Let us define :</p>
<p>F[1] = 1</p>
<p>F[i] = (a*M[i] + b*i + c)%1000000007 for i > 1</p>
<p>where M[i] is the median of the array {F[1],F[2],..,F[i-1]}.<br />
The median of an array is the middle element of that array when it is sorted. If there are an even number of elements in the array, we choose the first of the middle two elements to be the median.</p>
<p>Given a,b,c and n, calculate the sum F[1] + F[2] + .. + F[n].</p>
<h3>Input :</h3>
<p>The first line contains T the number of test cases. Each of the next T lines contain 4 integers : a,b,c and n.</p>
<h3>Output :</h3>
<p>Output T lines, one for each test case, containing the required sum.</p>
<h3>Sample Input :</h3>
<pre>2
1 0 0 3
3 1 2 6
</pre><h3>Sample Output :</h3>
<pre>3
103
</pre><h3>Constraints :</h3>
<p>1 &lt;= T &lt;= 100</p>
<p>0 &lt;= a,b,c &lt; 1000000007</p>
<p>1 &lt;= n &lt;= 200000</p>
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
            <td>6 sec</td>
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