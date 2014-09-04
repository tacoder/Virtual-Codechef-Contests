<?php require("../../includes/header.php"); ?><h1>Rainy Egypt</h1><div class="content">

<p>Story:<br />
In Egypt each year in the rainy season, the province in Byte land is flooded with water. The province has the form of a rectangular land divided into unit cells of M lines and N columns. Some cells are flooded and some cells are not. Each flooded cell has a water depth level which is a positive integer.<br />
Because of flood, the land is divided into several islands, each island consists of the cells that can move around one another but cannot move to cells in different islands. The people can move between two non flooded cells if these cells have at least one common point.<br />
To improve the transportation quality during the flooding season, the Egypt's government decides to raise some flooded cells to become non flooded cells so that after the process, the people are able to travel between any two non flooded cells.<br />
To make a flooded cell whose water depth level is D become non flooded, the workers need to put in D units of clay.<br />
The government wants to achieve the goal using the fewest units of clay possible.</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 20), each test case has the following form.<br />
The first line contains two number M and N (1 &lt;= M, N &lt;= 200).<br />
Each line in the next M lines contain N numbers describing the status of each cell in the land. If a cell is not flooded, the corresponding number is -1 while if it is flooded the corresponding number is the cell's water depth level.<br />
Each test case's input is separated by a blank line.</p>
<h3>Output</h3>
<p>For each test case, output the result in the following format.The first line contains T, the number of units of clay used.The second line contains a number S which is the number of flooded cells needed to raise.Each line in the next S lines contains two numbers representing the row and column index (1-based) of a raised cell.Print a blank line after each test case's output.<br />
Scoring<br />
For each test case, your program's score is equal to T/H in which H is the number of units of clays to raise all the flooded cell.</p>
<h3>Example</h3>
<pre>
<b>Input:
1
3 3
-1 10 -1
10  2 10
-1 10 -1
</b>

<b>Output:
2
1
2 2</b>

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/raghupotluri">raghupotluri</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-10-2012</td>
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