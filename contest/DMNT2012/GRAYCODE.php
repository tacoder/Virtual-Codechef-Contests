<?php require("../../includes/header.php"); ?><h1>Gray Codes</h1><div class="content">

<p>Gray codes were invented to prevent spurious output from electromagnetic switches. Consider the number 3 in ordinary binary encoding: when incremented from 011 to 100 it is unlikely that all of the switches will change states at the same time, so there is a possibility of reading the state of the variable while it is in between a transition (i.e., when some of the bits have flipped to the correct value but others haven't).</p>
<p>To solve this problem, Frank Gray introduced a new number system in which successive numbers differ by only a single bit.</p>
<p>You are working on a legacy system that uses Gray codes, but are having difficulty fixing a bug related to multiplication of numbers. For the purpose of debugging, you wish to convert a number's Gray encoding into the corresponding decimal representation.</p>
<h3>Input Format</h3>
<p>The first line of input contains a single integer t, the number of test cases. This is followed by t lines, each containing a single integer, which is the result of converting the gray encoding directly to decimal. (For example, the gray encoding 100 which corresponds to 7 will be displayed as 4.)</p>
<h3>Output Format</h3>
<p>For each test case, output a single integer that is the decimal equivalent of the gray encoding.</p>
<h3>Example</h3>
<p>Input:</p>
<pre><code>8
0
1
2
3
4
5
6
7

</code></pre><p>Output:</p>
<pre><code>0
1
3
2
7
6
4
5

</code></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>0.5 sec</td>
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