<?php require("../../includes/header.php"); ?><h1>Super Mario</h1><div class="content">
<p><b>Statement</b><br /><br />
                    Mario is one the most famous video games ever. In this problem, we will be helping Mario save the princess(again :P). In this game of mario, each world will be represented by a 2-D rectangular grid. There are multiple worlds and all the worlds are of size RxC. The world contains many objects each covering exactly one cell. <br /><br />
The cell with ‘S’ denotes Mario’s starting position. A cell with ‘.’ denotes an empty cell over which Mario can walk safely. From that cell he can move to any of its 4 adjacent cells (which share an edge with it). A cell with ‘D’ denotes a pipe that leads to the world below. A cell with ‘U’ denotes a pipe that leads to the world above. If Mario enters a cell containing a pipe, he must enter the pipe. A cell with ‘C’ represents a coin and Mario collects these. After collecting the coin, the cell becomes an empty cell. A cell with ‘#’ denotes bricks and Mario can’t enter this cell no matter what. A cell with ‘M’ denotes the monster(Bowser), Mario has to defeat Bowser to save the princess. Mario initially start from an empty cell. <br /><br />
Our Mario is very determined and so he will be always able to defeat Bowser on a 1 on 1 battle. But he is greedy and will always want to collect all the coins before going to save the princess. If he is not able to collect all the coins, he won’t save the princess! Help Mario to find the minimum number of steps to do this feat. <br /><br /></p>
<p><b>Note:</b><br />
	If ‘U’ is present in topmost world or ‘D’ is present in the bottommost world, Mario can’t enter the cell. <br /><br /></p>
<p><b>Input format:</b><br /><br />
	Input contains multiple test cases. <br /><br />
        First line of each test case will have 3 integers R, C and W.<br /><br />
‘R X C’ represents Grid dimension and ‘W’ represents number of worlds.<br />
It will be followed by R X W lines. Each line will have ‘C’ characters.<br /><br />
First R lines describe the first world, second R lines describe the second world and so on upto W worlds.<br /><br />
	Input ends by the line, “0 0 0”.<br /><br /></p>
<p><b>Output format:</b><br /><br />
	For each test case, print a single line “Mario saved the princess in K steps” where K is the minimum number of steps if he defeat the monster else Print “Mario failed to save princess”.<br /><br /></p>
<p><b>constraints:</b><br /><br />
	1&lt;=N,M&lt;=15<br /><br />
	1&lt;=W&lt;=9<br /><br />
	1&lt;=C&lt;=10<br /><br />
	All characters in the grid will be from the set {‘S’, ‘.’, ‘M’, ‘C’, ‘D’, ‘U’, ‘#’ } <br /><br /><br />
<b>INPUT:</b><br /><br />
       	3 3 2<br /><br />
        S.M<br /><br />
        C#.<br /><br />
        D..<br /><br />
        ###<br /><br />
        C.C<br /><br />
        C.U<br /><br />
	0 0 0<br /><br /></p>
<p><b>SAMPLE OUTPUT:</b><br /><br />
      	Mario saved the princess in 8 steps<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abacus_opc">abacus_opc</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-03-2014</td>
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