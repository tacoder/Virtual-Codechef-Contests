<?php require("../../includes/header.php"); ?><h1>Trial of Doom</h1><div class="content">

<p>Johnny has reached the final trial on the Path of Doom. This is the hardest one. He entered a large room. The floor of the room is divided into square cells of the same size. There are n rows and m columns of cells. Each cell can be either red or blue. We can consider that the walls of the room are parallel south-north direction and west-east direction and that Johnny has entered the room in the north-western corner. So now he is standing in the north-western cell of the room. The exit is in the south-eastern corner. Johnny can make steps in each of the eight directions moving to adjacent cells. He has to reach the exit. But when he goes out of the room all the cells in the room should be blue, otherwise he fails the trial (If Johnny goes out he can't step back again). The colors of the cells change after each step Johnny makes. When he steps on the next cell this cell and the cells to its north, south, east and west change color: from blue to red and from red to blue. Johnny can't ever step on two cells at once or he fails the trial. Also just jumping on the cell he is standing on now will have no effect on the color of cells. Currently some cells in the room may be red. Johnny made a look over the room and he wonders if it's even possible to pass the trial at all or the trial master is playing a trick on him. Help him find this out.</p>
<h3>Input</h3>

<p>The first line of input is the number of test cases. Then each of the test cases follows. The test case starts with two number n and m - the sizes of the room. The next line contains number k - the amount of red cells in the room. Next k lines consist of two numbers each x, y - the row number and column number of the following red cell. The rows are numbered from 1 to n from north to south and columns are numbered from 1 to m from west to east. So Johnny starts at cell (1, 1) and have to reach cell (n, m). The coordinates of all of the red cells will be different. The rest of the cells are blue.</p>
<h3>Constraints</h3>

<p>1 &lt;= t &lt;= 50<br />
1 &lt;= n, m &lt;= 10<sup>9</sup><br />
min(n, m) &lt; 40<br />
0 &lt;= k &lt;= min(m*n, 10000)<br />
1 &lt;= x &lt;= n<br />
1 &lt;= y &lt;= m</p>
<h3>Output</h3>

<p>For each test case print "YES" (quotes for clarity) if Johnny can reach the south-eastern cell and go out of the room with all cells being blue and "NO" (quotes for clarity) otherwise.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 2
0
2 2
4
1 1
1 2
2 1
2 2
4 4
1
1 1

<b>Output:</b>
YES
YES
NO

</pre><h3>Explanation</h3>

<p>In the first test case Johnny can pass the trial making the following steps: South-east, North, West, East, West, South-east, out. In the second test case: East, West, South, East, out. It's impossible to pass the trial in the third test case.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/spooky ">spooky </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-05-2011</td>
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