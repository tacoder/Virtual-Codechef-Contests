<?php require("../../includes/header.php"); ?><h1>Permuted Array Problem</h1><div class="content">
<p> </p>
<p>There are two integer arrays: A and B having a size N where N&lt;=1000. You are free to permute the order of the elements in the arrays.<br />
<br /><br />
<br /><br />
Main problem: Among all the arrangements of the two arrays, is there any case such that A<sub>i</sub>+B<sub>i</sub>&gt;=K for all i where A<sub>i</sub> denotes the i<sup>th</sup> element in the array A.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains an integer T denoting the number of test-cases. T test cases follow. Each test case is given in the following format.<br />
<br /><br />
<br /><br />
The first line contains two integers, N and K. The second line contains N integers separated by a single space, denoting A array. The third line describes B array in a same format.
</p>
<h3>Output</h3>
<p>For each test case, if there is such arrangement exists output YES, otherwise NO.</p>
<h3>Constraints</h3>
<p>1 &lt;= T &lt;= 10<br />
<br /><br />
<br /><br />
1 &lt;= N &lt;= 1000<br />
<br /><br />
<br /><br />
1 &lt;= K &lt;= 10<sup>9</sup><br />
<br /><br />
<br /><br />
0 &lt;= A<sub>i</sub>, B<sub>i</sub> &lt;= 10<sup>9</sup>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 10
2 1 3
7 8 9
4 5
1 2 2 1
3 3 3 4

<b>Output:</b>
YES
NO
</pre><p> </p>
<h3>Explanation</h3>
<p>The first input has 3 elements in Array A and Array B, we see that the one of the arrangements, 3 2 1 and 7 8 9 has each pair of elements (3+7, 2 + 8 and 9 + 1) summing upto 10 and hence the answer is YES.<br />
The second input has B array with three 3s. So, we need at least three numbers in A to be greater than 1. As its not the case, the answer is NO.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cuttingedge03">cuttingedge03</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2014</td>
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