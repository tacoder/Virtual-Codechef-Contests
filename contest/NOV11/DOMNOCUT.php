<?php require("../../includes/header.php"); ?><h1>Colored Domino Tilings and Cuts</h1><div class="content">

<p>
Consider rectangular grid that composed of <b>N</b> rows and <b>M</b> columns. <b>Colored domino tiling</b> of the grid is some way to put lowercase English letter in each cell of the grid provided that each cell has exactly one neighbor with the same letter as in this cell. Two cells of the grid are neighbors if they share a common side. Each letter represents some color. <b>Cut</b> of colored domino tiling is vertical or horizontal line that divides the grid in two colored domino tilings. In other words this line should not pass between two adjacent cells with the same color.</p>
<p>For given <b>N</b> and <b>M</b> you should find the colored domino tiling that has the minimal possible number of cuts. If there are several solutions you should find among them the tiling that uses the minimal possible number of colors in it. If your tiling requires <b>K</b> colors then use first <b>K</b> lowercase letters of English alphabet as colors. If there are still several solutions then find any such tiling.
</p>
<h3>Input</h3>
<p>
The first line contains a positive integer <b>T</b>, the number of test cases. In the following lines, <b>T</b> test cases follow. Every test case is a single line that contains two space separated positive integers, <b>N</b> and <b>M</b>, the sizes of the grid.
</p>
<h3>Output</h3>
<p>
For each test case output in the first line the word <b>"IMPOSSIBLE"</b> without quotes if there are no tilings of the grid with <b>N</b> rows and <b>M</b> columns. Otherwise output in the first line two space separated integers, the minimal number of cuts and minimal number of colors in required tiling and then in the next <b>N</b> lines output the tiling itself. Each of these <b>N</b> lines must be composed of exactly <b>M</b> lowercase English letters.
</p>
<h3>Constraints</h3>
<p>
1 &lt;= T &lt;= 3000<br />
<br />
1 &lt;= N, M &lt;= 500<br />
<br />
sum of N*M in the file &lt;= 2,000,000
</p>
<h3>Sample input</h3>
<pre>5
1 1
2 2
2 3
4 3
5 5

</pre><h3>Sample output</h3>
<pre>IMPOSSIBLE
1 2
ab
ab
1 3
aab
ccb
1 3
aab
ccb
baa
bcc
IMPOSSIBLE
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-07-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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