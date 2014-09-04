<?php require("../../includes/header.php"); ?><h1>Stacking Pancakes</h1><div class="content">

<p>Chef is good at making pancakes. Generally he gets requests to serve <b>N </b>pancakes at once.<br />
He serves them in the form of a stack.<br />
A pancake can be treated as a circular disk with some radius.</p>
<p>Chef needs to take care that when he places a pancake on the top of the stack the radius of the pancake should not exceed the radius of the largest pancake in the stack by more than <b>1</b>.<br />
Additionally all radii should be positive integers, and the bottom most pancake should have its radius as <b>1</b>.<br />
Chef wants you to find out in how many ways can he create a stack containing <b>N</b> pancakes.</p>
<p><b>Input</b></p>
<p>First line of the input contains <b>T (T &lt;= 1000) </b>denoting the number of test cases.</p>
<p><b>T </b>lines follow each containing a single integer <b>N (1 &lt;= N &lt;= 1000) </b>denoting the size of the required stack.</p>
<p><b>Output</b></p>
<p>For each case the output should be a single integer representing the number of ways a stack of size <b>N</b> can be created. As the answer can be large print it modulo <b>1000000007</b>.</p>
<p><b>Example</b></p>
<p><b>Input</b></p>
<pre>
2
1
2
</pre><p><b>Output</b></p>
<pre>
1
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>5000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>