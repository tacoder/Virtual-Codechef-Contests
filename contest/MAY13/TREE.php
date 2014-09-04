<?php require("../../includes/header.php"); ?><h1>Tree Counting</h1><div class="content">

<p>Let's define a good tree:</p>
<ol>
<li>It is a tree with <b>k * n</b> nodes labeled from <b>0</b> to <b>k * n - 1</b></li>
<li>Node <b>i</b> and node <b>j</b> are not adjacent, for all <b>0 &lt;= i, j &lt; k * n</b> such that <b>i div k = j div k</b> (here <b>div</b> means integer division.  E.g. 7 <b>div</b> 2 = 3)</li>
</ol>
<p> </p>
<p>Given <b>n</b> and <b>k</b>, how many different good trees are there?</p>
<h3>Input</h3>
<p>Two integers <b>n(1 &lt;= n &lt;= 10^5), k(1&lt;= k &lt;=3)</b></p>
<h3>Output</h3>
<p>Output the number of different good trees. As the result may be very large, just output the remainder when divided by (10^9 + 7).</p>
<h3>Example</h3>
<pre><b>Input 1:</b>
2 2

<b>Output 1:</b>
4

<b>Input 2:</b>
1 2

<b>Output 2:</b>
0

<b>Input 3:</b>
4 1

<b>Output 3:</b>
16

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-11-2012</td>
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