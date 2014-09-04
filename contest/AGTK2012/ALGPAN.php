<?php require("../../includes/header.php"); ?><h1>Chef at GYM</h1><div class="content">

<p>
So the Chef has become health conscious and is now lifting weights at the gym. But its his first time so the trainer gives him a simple job to do. </p>
<p>He has been given a weight lifting rod and <b>N</b> heavy weights, each weighing 2<sup>0</sup>, 2<sup>1</sup>, .... , 2<sup>n-1</sup>. He has to stick each of the "<b>N</b>" weights on the rod, one after another, in such a way that the right side is never heavier than the left side. At each step he chooses one of the weights that has not yet been fixed on the rod, and fix it on either the left side of the rod or the right, until all of the weights have been placed.</p>
<p>Now help the chef and find out, in how many ways the chef can accomplish this?</p>
<h3>Input</h3>
<p>First line of input contains an integer <b>T</b>, the number of test cases. Then <b>T</b> test cases follow. Each line of test case contains one integer, <b>N</b> denoting the number of weights</p>
<h3>Output</h3>
<p>The output contains <b>T</b> lines, each containing an integer denoting all possible combinations</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2
5
18


<b>Output:</b>
3
945
221643095476699771875
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/s4p3r_c1n0s">s4p3r_c1n0s</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.1 sec</td>
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