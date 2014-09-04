<?php require("../../includes/header.php"); ?><h1>Grid Tiling</h1><div class="content">

<p>Vikas is the chief interior designer incharge of the Taj Palace, Mumbai. He wants to make an impressive and colourful pattern in the courtyard. Importing exotic tiles has become very difficult after the Mumbai terror attacks, and therefore Vikas has only 4 kinds of tiles to choose from:</p>
<pre>
A      B      C       D
==    ==    ==    ==
XX    X     X      X
XX    X     XX

</pre><p>Any rotation of above tiles is also permitted.</p>
<p>Each tile is available in 'k' different colors, and there's an infinite supply of all tiles. The courtyard has dimensions 2 * 'n'. Vikas wants to tile the courtyard in such a way that no two adjacent tiles have the same color. Two tiles are considered adjacent if they share a common side. Two tilings are considered different if:</p>
<p>1) The arrangement of tiles is different.<br />
<br/>2) There is atleast 1 position (1*1 square) which has different colors in the two arrangements.</br/></p>
<p>Can you help Vikas find the number of different ways in which he can tile the courtyard, subject to the above conditions?</p>
<h3>Input</h3>
<p>
The first line of input contains a single integer 't', denoting the number of test cases.<br />
<br/>Each of the next 't' lines contains 2 space separated integers 'n' and 'k'.</br/></p>
<h3>Output</h3>
<p>For each test case output one integer, denoting the number of different ways in which the courtyard can be tiled.</p>
<p>Two tiles are considered adjacent if they share an edge. Two tiles which just share a common point are not considered adjacent.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 1
1 2

<b>Output:</b>
1
4

<b>Constraints:</b>
t &lt;= 1000
1 &lt;= n &lt;= 10^9
1 &lt;= k &lt;= 1000

</pre><p><b>Explanation:</b></p>
<p>Test case 1: There is only 1 way to tile the courtyard, by using a 2*1 tile.<br />
<br/>Test case 2: Let '1' and '2' be the available colors. The grid can be tiled in 4 ways - 1) place one 2*1 tile of color '1', 2) place one 2*1 tile of color '2', 3) Place two 1*1 tiles (color '1' above and color '2' below), 4) Place two 1*1 tiles (color '2' above and color '1' below)</br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suh_ash2008">suh_ash2008</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>