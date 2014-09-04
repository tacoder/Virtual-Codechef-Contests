<?php require("../../includes/header.php"); ?><h1>Maximum Jewels</h1><div class="content">

<p>There is a modern city where people send their children to train under a master of programming. But this year, the master has received so many applicants that he decides to screen them using a simple test. His test comprises of traversing a grid and collecting maxium jewels. But there are certain burglars in the way. If the student gets too close to the burglar, they'll rob him off some of his treasure. And if the student moves to the block containing the burglar, he'll be immediately killed, and thus wont be able to complete his task. The burglars have a specific quota alloted to them, and they just rob the person off that much treasure. They leave the rest of the student's treasure untouched. Thus, if a student comes in an adjacent grid to one of the burglars, he'll be poorer by x jewels, where x is the alloted quota for that particular burglar. But if a cell is adjacent to two or more burglars, each of them will rob him off, taking 'sum of all burglars quota' number of jewels. Also, if a student does not have enough jewels, his jewel tally will go into negative.<br />
The task of the student is to go from the start location to the master's location, gathering as many jewels as possible. If the number of jewels collected by the student is the maximum possible for that particular grid and burglar setting, then the master accepts the child as his student.<br />
Your task is to help the student clear this test, given the grid, number of jewels at each cell, and the burglar position. The output will be the maximum number of jewels collected.<br />
The student starts at the top left position of the grid and moves to the master's location, at the bottom right. The constraint is that the student can only move downwards or towards the right, one cell at a time, and cannot skip cells.</p>
<p>Note:<br />
1. The neighbourhood of the burglar is defined as all the cells surrounding him. This will be the 8 cells surrounding him, unless he is on one of the edges, when it will be less than 8.<br />
Also, if the student moves from a cell in the neighbourhood of the burglar to another cell in his neighbourhood, the burglar will rob him twice. That is, for every cell that he steps which is in control of the burglar, he'll have to part with his jewels.</p>
<p>2. It might so happen that a cell in the neighbourhood of the burglar might contain a lot of jewels, and the burglar might just rob some. For eg. If the cell adjacent to the burglar has 100jewels and the burglar just robs 10, the student will be richer by 90jewels by moving into that cell. In such cases, it might be profitable to move into such cells.</p>
<h3>Input</h3>
<p>The first line of input is m,n where m is the number of rows and n is the number of columns in the grid.<br />
The next m rows have n comma seperated values, where each number can be either a positive integer, negative integer or 0. A positive integer represents the number of jewels present at that particular cell. 0 means that no jewel will be found at that cell. A negative value indicates that there is a burglar at that location, with the negative value as his robbing quota.<br />
The starting location is the 1*1 cell and the ending is m*n cell, both of which have the value 0.</p>
<h3>Output</h3>
<p>The output will be the maximum number of jewels that can be collected.</p>
<h3>Example</h3>
<p>The following example on the 4*4 grid is shown:</p>
<pre>
<b>Input:</b>
4,4
0,23,20,-32
13,14,44,-44
23,19,41,9
46,27,20,0

<b>Output:</b>
129
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rajatkhanduja">rajatkhanduja</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-08-2012</td>
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