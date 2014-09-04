<?php require("../../includes/header.php"); ?><h1>Spiral Numbers</h1><div class="content">

<p>Dennis is programming a robot that is supposed to paint a horizontal line. Not being one to care much about efficiency, Dennis programs the robot to move in an anti-clockwise spiral as shown below.</p>
<pre><code>
  &lt;-- 12
4 3 2 11
5 <b>0</b> <b>1</b> <b>10</b>
6 7 8 9

</code></pre><p>The robot starts at position zero, then moves to position 1, then position 2 and so on. Dennis wants all of the tiles to the right of 0 to be painted black. (These tiles are represented as bold numbers in the figure above.)</p>
<p>Your task is to help Dennis by telling him which is the n<sup>th</sup> tile that must be painted black, with the zeroth tile being zero.</p>
<h3>Input Format</h3>
<p>The first line of the input contains a single integer n, this is the number of test cases. This is followed by n lines each containing a single integer.</p>
<h3>Output Format</h3>
<p>For each test case output a single integer which is the number of the tile that corresponds to the nth tile that must be painted.</p>
<h3>Example</h3>
<h5>Input</h5>
<pre><code>
3
0
1
2
</code></pre><h5>Output</h5>
<pre><code>
0
1
10
</code></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/singh_sume">singh_sume</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-01-2012</td>
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