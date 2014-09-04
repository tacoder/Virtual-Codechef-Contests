<?php require("../../includes/header.php"); ?><h1>Forced Output</h1><div class="content">

<p style="text-align:justify">
The state space of the output of this problem (and as a matter of fact, all the problems in this Cook-Off) is - 2 to the power T -<br />
where T is the number of test cases (so be extra careful!). Each test case consists of T lines consisting of "YES" or "NO".<br />
If a test case accurately represents the output that you would print for this file,<br />
then print "YES" for this case. Print "NO" otherwise.
</p>
<p style="text-align:justify">
The output for a file is defined as the output for all the test cases one by one. If you output "YES" for test case 'x', then your output<br />
must match the input for the test case 'x', and if and only if your output does not match the input for test case 'x', should you print "NO"<br />
for that case.
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first Line contains a single number T, the number of test cases.
</p>
<p style="text-align:justify">
Each test case contains T lines. Each line is either "YES" or "NO". The T lines together represent the candidate output for this problem.
</p>
<h3>Output</h3>
<p style="text-align:justify">
If the candidate-output (that you got in the input) is what you are going to print then print "YES", and<br />
only if it is different, print "NO". The output for each case must be on a single line by itself.
</p>
<h3>Constraints</h3>
<p style="text-align:justify">
<pre>1 ≤ T ≤ 100
There is only one unique valid output that you can print
</pre></p>
<h3>Sample Input</h3>
<p style="text-align:justify">
<pre>2
NO
NO
NO
YES
</pre></p>
<h3>Sample Output</h3>
<p style="text-align:justify">
<pre>NO
YES
</pre></p>
<h3>Explanation</h3>
<p style="text-align:justify">
Your output clearly matches the input for the second case. No other output can be valid for this file.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gamabunta">gamabunta</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-08-2012</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CAML, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, GO, HASK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>