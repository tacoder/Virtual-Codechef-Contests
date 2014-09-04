<?php require("../../includes/header.php"); ?><h1>nCr as a Service</h1><div class="content">

<p>To test a new cloud computing service, you decide to write a program that generates the Pascal Triangle in a distributed fashion.</p>
<p>You wish to estimate the amount of network traffic that would be expected between nodes. Since the nodes exchange the computed values in base 10, you want to know the number of digits in the base-10 representation of nth row and rth column of Pascal's triangle. Since your program internally represents these in base-2, you also wish to know the number of digits in the base-2 representation to get an idea of the memory usage involved.</p>
<h3>Input Format</h3>
<p>The first line contains a single integer t, followed by t lines each containing two numbers that indicate the row and column in Pascal's triangle respectively.</p>
<h3>Output Format</h3>
<p>For each test case output a single line containing two numbers each, the number of digits in the base 10 representation followed by the number of digits in base 2.</p>
<h3>Example</h3>
<p>Input:</p>
<pre><code>

20
5 2
3 3
5 4
2 2
4 1
5 5
2 1
4 4
3 1
3 0
1 1
2 0
3 2
5 3
4 2
4 0
5 1
4 3
1 0
5 0

</code></pre><p>Output:</p>
<pre><code>
2 4
1 1
1 3
1 1
1 3
1 1
1 2
1 1
1 2
1 1
1 1
1 1
1 2
2 4
1 3
1 1
1 3
1 3
1 1
1 1

</code></pre><p></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/singh_sume">singh_sume</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.2 sec</td>
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