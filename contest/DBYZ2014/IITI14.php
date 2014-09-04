<?php require("../../includes/header.php"); ?><h1>Sherlock and the Perfect Array</h1><div class="content">
<p> </p>
<p>Watson, from one of his programmer friends, finds out about the site codechef. Fascinated by the questions, he decides to make a question himself. He defines a pair of numbers <b>(x,y)</b> a perfect pair if at least one of the numbers is greater than a given number <b>K</b>. Now he wants to find out that given an array <b>A</b> (1-based index) of size <b>N</b>, and an operation (defined below) what should be the minimum number of operations required to make every possible pair in the array perfect.<br />
The only operation which can be done on the array is as follows:<br />
Select two distinct indices <b>i</b>, <b>j</b> <b>(1 &lt;= i &lt;= N and 1 &lt;= j &lt;= N)</b> and replace one of <b>A[i]</b> or <b>A[j]</b> with <b>A[i]*A[j]</b>.<br />
Now he challenged Sherlock to solve this problem. As Sherlock is busy with his cases, help him to find the answer.
</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>First line contains no of test cases <b>T</b>.</li>
<li>Each test case has 2 lines. First line has two integers <b>N</b> and <b>K</b> seperated by space. Second line has <b>N</b> numbers seperated by space, where ith integer is <b>A[i]</b>.
</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, print in a single line, the minimum number of operations required for that case. If it is not possible to make every pair in an array perfect then output <b>-1</b>.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>0</b> ≤ <b>A[i]</b> ≤ <b>10^9</b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>10^9</b></li>
<li>Sum of <b>N</b> across all the test cases in a test file does not exceed <b>10^6</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<p>
2
5 25
4 3 2 1 5
5 25
0 0 3 4 5
</p>

<b>Output:</b>
<p>
5
-1
</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iiti_adm">iiti_adm</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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