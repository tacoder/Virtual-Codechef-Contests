<?php require("../../includes/header.php"); ?><h1>Building Towers</h1><div class="content">

<p>
Majin has built certain brick towers. The N (1 &lt;= N &lt;= 25000) towers are conveniently numbered 1..N; tower i has height M_i (1 &lt;= M_i &lt;= 100000).</p>
<p>
He wishes to modify the towers in the following fashion:<br />
He has a list of numbers B_1 through B_N (1 &lt;= B_i &lt;= 100000), and wants to change the tower heights to those heights B_1, ..., B_N in some order (not necessarily the order given or any other order derived from the data).</p>
<p>
His strength is obviously, limited. It takes Majin a total X (1 &lt;= X &lt;= 100) effort per unit height added and Y (1 &lt;= Y &lt;= 100) effort per unit height<br />
reduced.</p>
<p>
Majin would like to know the minimum possible total effort of modifying his towers if he picks the best permutation of heights. The answer<br />
is guaranteed to fit within a 32-bit signed integer.
</p>
<h3>Input</h3>
<p>
The first line has an integer 't' (1&lt;=t&lt;=10), the number of test cases. t cases follow.</p>
<p>Each test case begins with three space-separated integers on a single line: N, X, and Y. N lines follow, each with integers M_i and B_i.</p>
<h3>Output</h3>
<p>
A single integer, the minimum total effort needed to rebuild the towers, for each test case, one per line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
3 6 5
3 1
1 2
1 2

<b>Output:</b>
11
</pre><p><b>Explanation</b></p>
<p>
Majin's towers have heights 3, 1, and 1. He would like to change them so that their heights are 1, 2, and 2, in some order.<br />
It takes 6 units of effort to add a unit of height and 5 to remove a unit of height.</p>
<p>
Majin reduces the first tower's height by 1, for an effort of 5 (yielding towers of heights 2, 1, and 1).<br />
He then adds one unit of height to the second tower for an effort of 6 (yielding towers of heights 2, 2, and 1).</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>