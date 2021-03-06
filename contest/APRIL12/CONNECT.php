<?php require("../../includes/header.php"); ?><h1>Find a special connected block</h1><div class="content">

<p>
Given an <b>n</b>*<b>m</b> board with a number between -1 and <b>n</b>*<b>m</b> in every entries.</p>
<p>And an <b>n</b>*<b>m</b> matrix <b>M</b> is also given, where <b>M</b><sub>i,j</sub> is the cost of selecting the <i>(i,j)</i> entry of the given board.</p>
<p>Your task is to find a connected block (which means these entries can reach each other by just go up, down, left and right without going out the block) in the board that contains at least <b>K</b> distinct positive numbers without any -1, and it must have minimum total cost for selecting these entries. Output the minimum total cost.</p>
<h3>Input</h3>

<p>First line consists of three integers, <b>n</b>, <b>m</b>, <b>K</b> (1 &lt;= <b>n</b>, <b>m</b> &lt;= 15, 1 &lt;= <b>K</b> &lt;= 7).</p>
<p>The followings are two <b>n</b>*<b>m</b> matrices, the first denotes the numbers on the board and the second denotes the cost of every entry.</p>
<p>Namely, the first <b>n</b> lines contain <b>m</b> integers, where the <i>j</i>th number in <i>i</i>th line denotes the number on the entry (<i>i</i>,<i>j</i>) of the board. These integers are in [-1, <b>n</b>*<b>m</b>].</p>
<p>Next <b>n</b> lines contain <b>m</b> integers too. The <i>j</i>th number in <i>i</i>th line denotes the cost of selecting the entry (<i>i</i>,<i>j</i>) of the board. These integers are in [1, 100000].</p>
<h3>Output</h3>

<p>
Only one line contains the minimum cost to finish the task. If the task is impossible, output -1 please.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 3 3
0 0 1 
2 3 3 
-1 2 1 
3 1 5 
4 10 1 
9 3 4 
<b>Output:</b>
8
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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