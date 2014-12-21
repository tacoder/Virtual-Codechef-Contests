<?php require("../../includes/header.php"); ?><h1>Spiderman and Jumping</h1><div class="content">
<p>N buildings are built in a row, numbered 1 to N from left to right. Spiderman is on buildings number 1, and want to reach building number N. He can jump from building number i to building number j iff i &lt; j and j-i is a power of 2 (1,2,4, so on). Such a move costs him energy |Height[j]-Height[i]|, where Height[i] is the height of the i<sup>th</sup> building. Find the minimum energy using which he can reach building N?</p>
<h3>INPUT</h3>
<p>First line contains N, number of buildings. Next line contains N space-separated integers, denoting the array Height.</p>
<h3>OUTPUT</h3>
<p>Print a single integer, the answer to the above problem.</p>
<h3>CONSTRAINTS</h3>
<pre>1≤N≤200000<br />1≤Height[i]≤10<sup>9</sup>
<h3>SAMPLE INPUT</h3><pre>4<br />1 2 3 4</pre><h3>SAMPLE OUTPUT</h3>
<pre>3</pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>