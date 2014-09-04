<?php require("../../includes/header.php"); ?><h1>Assignment</h1><div class="content">
<h3>Problem Description</h3>
<p>Chef Boogy is a student studying in a reputed mathematical institute and is very enthusiastic about solving complex and tricky mathematical problems apart from cooking delicacies. Recently, he had been struggling a lot with a complex logical problem assigned to him as an assignment.<br />
Assignment problem says given an array A of N numbers, Boogy has to find out the minimum number of elements to be changed in the array to ensure that the new array becomes a consecutive sequence of numbers. For example, given A = {3, 4, 6, 8, 7} where N = 5, it is obvious that we can change the third and fourth elements in A to get the new array A' = {3, 4, 5, 6, 7}.</p>
<p>(Note: A consecutive sequence of numbers is where the ith number is greater than the (i-1)th number by 1.)</p>
<h3>Input</h3>
<p>The first input will be T, the number of test cases. T &lt;= 1000. 2T lines follow, two for each test case. The first line will be the number of elements in the array, N. 1&lt;= N &lt;= 50 .The second line will have N numbers separated by a space. Each number will lie between -2000 and 2000 (inclusive). </p>
<h3>Output</h3>
<p>For every test case, output the minimum number of elements to be changed to get a consecutive sequence of numbers. </p>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> &lt; <b>N</b> &lt; <b>50</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 4 5
7
99 8 9 102 103 16 17

<b>Output:</b>
1
4
</pre><h3>Explanation</h3>
<p>In the second test case, we can change 8, 9, 16 and 17 to 100, 101, 104, and 105 respectively.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/giriraj">giriraj</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-03-2014</td>
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