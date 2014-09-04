<?php require("../../includes/header.php"); ?><h1>Minesweeper Reversed</h1><div class="content">

<p>You are probably familiar with the classic computer game called Minesweeper. In case you're not, here's a short description. The game is played on a rectangular grid with R rows and C columns. Some cells contain mines and the others are empty. Initially, all cells are closed - their content is hidden. A player has to open all empty cells without opening a cell which contains a mine. You can open a cell by clicking on it. Opening an empty cells displays a number of mines in the neighbouring 8 cells. In case there aren't any mines in the neighbourhood, all neighbouring cells are automatically opened. This way you can open large mine-free areas with a single click.</p>
<p>As the name of this problem suggests, you will be dealing with a reversed process of minesweeping. A player starts with a grid where all cells are open and are either empty or contain a mine. The goal of this reversed game is to hide the mines by closing all cells as fast as possible. There are two ways to close a cell. You can either click on it or the cell can automatically close as a result of clicking on some other cell. Clicking on a cell C1 closes all cells C2 which could open simultaneously with C1 in a normal game of Minesweeper (as a result of a single click somewhere on the grid). More formally, let S<sub>x,y</sub> be a set of all cells which are opened when you click on the cell (x,y) in a normal game of Minesweeper. Clicking on a cell C1 will also close all cells C2 such that there exists a set S<sub>x,y</sub> which contains both C1 and C2. You can safely click on a mine cell to close it. The goal is to close all cells with as few clicks as possible.
</p>
<h3>Input</h3>
<p>The first line contains a single integer T, the number of test cases. The first line of each testcase contains number of rows R  and number of columns C. Following lines describe the playing grid. '.' represents an empty cell and '*' indicates a mine.</p>
<h3>Output</h3>
<p>Output a single line containing the minumum number of clicks necessary to close all cells.</p>
<h3>Constraints</h3>
<ul>
<li>1 &lt;= T &lt;= 50</li>
<li>1 &lt;= R,C &lt;= 50</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 8
**...*..
.....*..
...***..
2 1
*
*
<b>Output:</b>
9
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/thocevar">thocevar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-04-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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