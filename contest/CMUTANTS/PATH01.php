<?php require("../../includes/header.php"); ?><h1>Min - Max 01 Path</h1><div class="content">

<p>I have been asked to set problems for this contest, what do I do now ? Lets see the standard stuff in most of the programming contests and make one problem out of it. Hmm... many problems are having Binary digits, Grids, Paths, Coins, Maximize or Minimize something, so let me mix them all now in to one problem, the one problem to rule them all ;) </p>
<p>Lets have a grid of size <b>N</b> x <b>M</b> having N rows and M columns, and put gold coins in it. How many in each cell ? , lets involve binary here. I'll give you two binary strings <b>A</b>[1...N] and <b>B</b>[1...M]. Cell (i,j) (1-based indexing) Row-i and Column-j in the grid contains A[i] * B[j] gold coins. From a cell (i,j), you can move to any of the 4 adjacent cells (i-1,j), (i+1,j), (i,j-1), (i,j+1) in one step. I want a path of <i>minimum length</i> from top-left cell (1,1) to bottom-right cell (N,M), and the value of this path = number of gold coins it covers. Find the maximum value of such a path. Not every one wants to become a Raja, also find the minimum value of such a path.</p>
<h3>Input</h3>
<p>First line contains T [ number of test cases, around 10 ]. T cases follow, each having 2 lines, "N A" and "M B" (quotes for clarity only). [ 1 &lt;= N,M &lt;= 3000, and each character in A, B is either 0 or 1 ]</p>
<h3>Output</h3>
<p>For each test case, print the maximum value of a path followed by the minimum value of a path, in the same line, separated by a single space. Output of each case should be in a separate line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 1001
3 110
5 01111
3 110

<b>Output:</b>
3 1
5 0

<b>Explanation:</b>
Case 1 : A Maximum path in bold
<table>
<tr><td><b>1</b></td><td><b>1</b></td><td>0</td></tr>
<tr><td>0</td><td><b>0</b></td><td>0</td></tr>
<tr><td>0</td><td><b>0</b></td><td>0</td></tr>
<tr><td>1</td><td><b>1</b></td><td><b>0</b></td></tr>
</table>
Case 1 : A Minimum path in bold
<table>
<tr><td><b>1</b></td><td>1</td><td>0</td></tr>
<tr><td><b>0</b></td><td><b>0</b></td><td>0</td></tr>
<tr><td>0</td><td><b>0</b></td><td><b>0</b></td></tr>
<tr><td>1</td><td>1</td><td><b>0</b></td></tr>
</table>
</pre>    </div><table>
<tr><td><b>1</b></td><td><b>1</b></td><td>0</td></tr>
<tr><td>0</td><td><b>0</b></td><td>0</td></tr>
<tr><td>0</td><td><b>0</b></td><td>0</td></tr>
<tr><td>1</td><td><b>1</b></td><td><b>0</b></td></tr>
</table><table>
<tr><td><b>1</b></td><td>1</td><td>0</td></tr>
<tr><td><b>0</b></td><td><b>0</b></td><td>0</td></tr>
<tr><td>0</td><td><b>0</b></td><td><b>0</b></td></tr>
<tr><td>1</td><td>1</td><td><b>0</b></td></tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rosyish">rosyish</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-02-2011</td>
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