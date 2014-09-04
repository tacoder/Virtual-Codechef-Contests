<?php require("../../includes/header.php"); ?><h1>The powerful sum</h1><div class="content">

<p>Let us calculate the sum of k-th powers of natural numbers from 1 to n. As the result can be quite large, output the result modulo some integer p.</p>
<h3>Input</h3>
<p>First t&lt;=10 - the number of test cases.<br />
Each test case consist of numbers: 1&lt;=n&lt;=1000000000, 1&lt;=k&lt;=100, 1&lt;=p&lt;=1000000000.</p>
<h3>Output</h3>
<p>For each test case, output the value: (1<sup>k</sup>+2<sup>k</sup>+...+n<sup>k</sup>) mod p.</p>
<h3>Example</h3>
<p>For input:</p>
<pre>4
10 1 1000000
10 2 1000000
10 3 1000000
10 4 1000000
</pre><p>the correct output is:</p>
<pre>55
385
3025
25333
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>