<?php require("../../includes/header.php"); ?><h1>Ski Resort</h1><div class="content">

<p>Ski season is in full swing and the Chef decided it's time to expand his business. He invested into a restaurant at the bottom of a ski slope. Things were going great until one of his employees got injured while skiing home from work. Chef would like to make sure this doesn't happen again. He wants to alter the surrounding landscape to prevent his employees from skiing to their homes in the nearby town. Flattening a large area is obviously out of the question and that's where you come in.</p>
<p>Chef was kind enough to model the surronding area as a grid with H rows and W columns. Area outside this grid is not suitable for skiing. You are given the elevation of each cell in this grid and the location of his restaurant (Rr,Cr) and the town (Rt,Ct). As long as there exists a non-increasing path from the restaurant to the town, the employees will not hesitate to ski home. A sequence of cells is called a path if every consecutive pair of cells shares a common edge. You are allowed to <b>increase</b> the elevation of any cell (except for the restaurant and town cell) by an integer amount. Find the minimum total number of units of elevation increase<br />
which allows Chef to prevent his employees from skiing home.</p>
<h3>Input</h3>

<p>The first line contains a single integer T, the number of test cases. The first line of each testcase contains numbers H and W. Rr, Cr, Rt, Ct are given in the second line. Following lines describe the layout of the ski resort. The j-th number in the i-th line represents elevation E<sub>i,j</sub> of cell (i,j). Top left corner of the grid has coordinates (1,1). All numbers in the input are integer.</p>
<h3>Output</h3>

<p>For each test case, output minimum total elevation so that chef can achieve his goal or -1 if that is not possible.</p>
<h3>Constraints</h3>
<ul>
<li>T &lt;= 10</li>
<li>1 &lt;= H,W &lt;= 50</li>
<li>0 &lt;= E<sub>i,j</sub> &lt;= 200 000</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

4 2
1 1 3 2
10 11
6 6
4 4
3 4

1 5
1 2 1 3
3 4 2 5 5

<b>Output:</b>
4
-1
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/thocevar">thocevar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-12-2010</td>
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