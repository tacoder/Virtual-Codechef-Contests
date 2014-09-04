<?php require("../../includes/header.php"); ?><h1>Triangular Queries</h1><div class="content">

<p>
You are given <b>N</b> lattice points <b>(X<sub>i</sub>, Y<sub>i</sub>), i = 1, 2, ..., N</b> on a 2D Coordinate System.<br />
You have to process <b>Q</b> queries, each query will be given as the form <b>"x y d"</b>.<br />
Let <b>ABC</b> be the triangle having vertices at <b>A(x+d, y)</b>, <b>B(x, y)</b> and <b>C(x, y+d)</b>.<br />
For each query, you have to find how many of the given lattice points lie inside or on the boundary of the triangle <b>ABC</b>.</p>
<h3>Input</h3>
<p>
The first line of the input contains two space-sparated integers <b>N</b> and <b>Q</b>.<br />
Each of the following <b>N</b> lines have two space-sparated integers <b>X<sub>i</sub>, Y<sub>i</sub></b> giving the x and y coordinate of a lattice point.<br />
Then the following <b>Q</b> lines contain three space-sparated integers <b>x, y, d</b> giving a query.</p>
<h3>Output</h3>
<p>
For each query, output one integer on a line which denotes the number of the given lattice points which lie inside or on the boundary of the triangle.</p>
<h3>Constraints</h3>
<p>
<b>1 ≤ N ≤ 300000 (3 * 10<sup>5</sup>)</b><br /><b>1 ≤ Q ≤ 200000 (2 * 10<sup>5</sup>)</b><br /><b>1 ≤ X<sub>i</sub>, Y<sub>i</sub> ≤ 300000 (3 * 10<sup>5</sup>)</b><br /><b>1 ≤ x, y, d ≤ 300000 (3 * 10<sup>5</sup>)</b></p>
<h3>Sample</h3>
<pre>
<b>Input 1:</b>
5 3
1 3
1 5
3 6
4 4
2 6
1 5 3
1 5 4
1 1 1

<b>Output 1:</b>
3
3
0

<b>Input 2:</b>
2 2
1 5
3 7
2 5 6
2 3 4
 
<b>Output 2:</b>
1
0

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rustinpiece">rustinpiece</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-11-2012</td>
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