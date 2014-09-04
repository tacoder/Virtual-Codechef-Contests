<?php require("../../includes/header.php"); ?><h1>Swarm of Polygons</h1><div class="content">

<p>There is a regular n-gon. Some points are marked on each of its sides. There are x<sub>1</sub> point marked on the first side, x<sub>2</sub> – on the second, …, x<sub>n</sub> – on the nth. The marked points do not coincide with the vertices of the n-gon. You can choose no more than one of the marked points from each side and form a convex non-degenerate polygon by connecting all those points with lines. Now your task is to find the number of different k-gons that can be formed that way.</p>
<h3>Input</h3>

<p>The first line of input file contains positive integer t – the amount of test cases. Next t lines contain six integers each: n, k, a, b, c, m. Here n is the number of sides of the initial n-gon. The amount of marked points on the first side of this n-gon is x<sub>1</sub> = a, the amount of the marked points on the following sides is x<sub>i</sub> = (b*x<sub>i-1</sub> + c) mod m, for i &gt; 1.</p>
<h3>Constraints</h3>

<p>1 &lt;= t &lt;= 30<br />
3 &lt;= n &lt;= 10<sup>9</sup><br />
3 &lt;= k &lt;= 20<br />
1 &lt;= b, c, m &lt;= 10<sup>6</sup><br />
0 &lt;= a &lt; m</p>
<h3>Output</h3>

<p>For each test case output the number of k-gons that can be formed modulo 1000000007.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 3 1 2 2 191
10 5 1 113 157 999991

<b>Output:</b>
1228
328836201


</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/spooky ">spooky </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/innocentboy">innocentboy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-04-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>