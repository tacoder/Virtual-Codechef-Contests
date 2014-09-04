<?php require("../../includes/header.php"); ?><h1>Squash the Bugs</h1><div class="content">

<p><b>This problem was part of the <a href="http://www.codechef.com/APRIL09/">CodeChef April Challenge</a>.  All user submissions for this contest problem are publicly available <a href="http://www.codechef.com/APRIL09/status/B5/">here</a>.</b></p>
<p>Bugs have gotten into The Chef&#8217;s kitchen!  Help him trap them all and he&#8217;ll make you a batch of his famous chocolate chip cookies.  You are given a given a square map of the kitchen divided into tiles, and in each tile sits some known number of bugs.  You also have a square trap, which can be dropped to cover a certain number of tiles (the trap may only cover tiles from within the map, and must be aligned to the borders of the kitchen). However, the trap only catches bugs from one of the tiles which it has covered, having a minimum number of bugs on it. For all possible positions at which the trap can be dropped, determine number of bugs that will be caught.</p>
<h3>Input</h3>
<p>Two numbers, 0&lt; <var> n </var> &lt;= 1000 (size of the map), and 0&lt; <var>k</var> &lt;= n (size of the trap), followed by <var>n</var> rows with <var>n</var> numbers, determining the number of bugs on each tile.  The number of bugs on each tile will fit in an signed 32-bit integer.</p>
<h3>Output</h3>
<p>You should output <var>n-k+1</var> rows with <var>n-k+1</var> numbers in each row. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4 2
0 1 2 3
4 5 6 7
8 9 0 1
2 3 4 0

<b>Output:</b>
0 1 2
4 0 0
2 0 0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-03-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 4 sec</td>
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