<?php require("../../includes/header.php"); ?><h1>Flappy Bird</h1><div class="content">
<p><b>Statement</b><br /><br />
The super annoying flappy bird is back! This time it has variations. The distance  between each pipe, width of each pipe and the gap width of each pipe is not uniform. Consider the world as a 2D plane, the initial position of the flappy bird is given (x, y) also, for a unit distance horizontally, flappy bird can move at most M distance vertically. There will be N pipes ahead of flappy bird. All the pipes are vertically straight and all the gaps are horizontal. For each pipe four integers x1, x2, y1, y2 are given. x1 and x2 give x-coordinates of the width of the pipe, y1 and y2 give the y-coordinates of the width of the gap. If the bird touches the pipe or the ground, the game is over. You have to find the maximum score that can be obtained considering the bird flies optimally.<br /><br /></p>
<p><b>Note:</b> <br /><br />
1. Score is the number of pipes crossed successfully.<br /><br />
2. All the values are integers, no floating point values are used to represent the points and distance travelled vertically also must be an integer. <br /><br />
3.Since the value M is the distance it can move atmost vertically, it can choose not to move vertically at all at any instant. </p>
<p><br /><br /><br />
<b>Constraints:</b><br /><br />
1 &lt; T &lt; 100<br /><br />
0 &lt; x, y &lt;= 10^9<br /><br />
0 &lt;= x1, x2, y1, y2 &lt;= 10^9; x1 &lt; x2 and y1 &lt; y2<br />
also, all the x values are given in non decreasing order. i.e. i-th pipe is always to the right of (i-1)th pipe <br /><br />
1 &lt;= N &lt;= 1000<br /><br />
1 &lt;= M &lt;= 10^9<br /><br />
<br /><br />
<b>Input</b><br /><br />
First line contains T the number of test cases.<br /><br />
For each test case, 1st line contains four integers x, y, M and N.<br /><br />
N lines follow each containing 4 integers x1, x2, y1, y2<br /><br /></p>
<p><b>Output:</b><br /><br />
For each test case print a single integer, denoting the maximum score that can be obtained followed by a new line. <br /><br /></p>
<p><b>Sample Input:</b> <br /><br />
1<br /><br />
1 2 1 4<br /><br />
2 4 2 4<br /><br />
5 7 2 5<br /><br />
8 9 4 7<br /><br />
11 12 8 9<br /><br />
<br /><b>Sample Output:</b><br /><br />
3<br /><br /></p>
<p><img border="0" src="http://i.imgur.com/Hcv571S.png" alt="Flappy" width="500" height="400" /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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