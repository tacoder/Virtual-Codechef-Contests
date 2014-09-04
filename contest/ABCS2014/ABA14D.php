<?php require("../../includes/header.php"); ?><h1>Pipes</h1><div class="content">
<p><b>Statement</b> <br /><br /><br />
In pipe games, your objective is to arrange pipes such that there is water flowing from a source to destination. In our variation of the game, there is an unlimited supply of water. Consider a grid of size N x M. In each cell of the grid, there is a pipe shape(the details are given below). You are able to rotate the pipe shapes 90 degrees clockwise or anti-clockwise any number of times. You cannot move the pipe shapes from the cell. The source is from the left side of the top left cell and the destination is the right side of the bottom right cell. You have to make a minimum number of rotations such that a path exists from the source to the destination. Since there is an unlimited supply of water don’t worry about open ends. Note that water cannot flow from bottom to top since it defies gravity. Water can flow in all other directions. <br /><br /></p>
<p>	The pipe shapes are:<br /><br />
		1. Horizontal pipe(connects left and right)<br /><br />
		2. Vertical pipe(connects top and bottom)<br /><br />
		3. L shape-1(connects top and left)<br /><br />
		4. L shape-2(connects top and right)<br /><br />
		5. L shape-3(connects bottom and left)<br /><br />
		6. L shape-4(connects bottom and right)<br /><br />
		7. T shape-1(connects all sides except  top)<br /><br />
		8. T shape-2(connects all sides except  right)<br /><br />
		9. T shape-3(connects all sides except  down)<br /><br />
	          10. T shape-4(connects all sided except  left)<br /><br />
	          11. ‘+’ shape (connects all 4 sides)<br /><br />
<br /><br />
Pipes 1 and 2 can be obtained by rotating each other.<br /><br />
Pipes 3, 4, 5 and 6 can be obtained by rotating each other.<br /><br />
Pipes 7, 8, 9 and 10 can be obtained by rotating each other.<br /><br />
<br /><br />
<b>Input format:</b><br /><br />
T the number of test cases<br /><br />
For each test case, 1st line contains two integers N and M.<br /><br />
Then N lines follow each containing M integers.<br /><br />
Then integer A, at j-th position of i-th line represents a pipe shape as described above. <br /><br /></p>
<p><b>Output format:</b><br /><br />
Print an integer that is the correct answer followed by a new line.<br /><br /></p>
<p><b>Constraints</b><br /><br />
1 &lt;= T &lt;= 100<br /><br />
1 &lt;= N, M &lt;= 100<br /><br />
1 &lt;= A &lt;= 11 where A is the grid element.<br /><br />
<br /></p>
<p><b>Sample Input:</b><br /><br />
3<br /><br />
1 1<br /><br />
1<br /><br />
1 1<br /><br />
3<br /><br />
3 3<br /><br />
4 1 3<br /><br />
7 8 6<br /><br />
11 10 3<br /><br /></p>
<p><b>Sample Output:</b><br /><br />
0<br /><br />
-1<br /><br />
6<br /><br />
<br /><br />
<img border="0" src="http://i.imgur.com/DYKTyIm.png" alt="Pipes" width="500" height="500" /><br />
<br /><br />
<b>Explanation:</b><br /><br />
For Case 1 and Case 2: Since the grid has only one cell, the source is the left side of the cell and destination is its right side. <br /><br />
Case 1: Horizontal pipe connecting left and right side is given, thus the water flows left to right and no rotation is needed. <br /><br />
Case 2: L shaped pipe is given which can never be used to connect left and right sides irrespective of rotations, hence output is -1.<br /><br />
Case 3: The pipe at the top left (0,0) is rotated twice [ 4 -&gt; 5 ] , the pipe at (1,0) is rotated once [ 7 -&gt; 10 ] , the pipe at (1,1) is rotated once [ 8 -&gt; 7 ] , the pipe at (1,2) is rotated once [ 6 -&gt; 5] and the pipe at the right bottom (2,2) is rotated once [ 3 -&gt; 4 ]. <br /><br />
The minimum number of rotations is 2+1+1+1+1 = 6. <br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abacus_opc">abacus_opc</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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