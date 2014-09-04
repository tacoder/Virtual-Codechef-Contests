<?php require("../../includes/header.php"); ?><h1>Sir Ravindra Jadeja</h1><div class="content">
<p> </p>
<p>A cricket match is going on between India and South-Africa. Currently AB de Villiers is batting and team India is bowling. AB de Villiers hits a ball hard and goes high up in the air but is not able to<br />
cover the boundary. The spot where the ball is going to fall is the point P1 in the field which has the coordinates  (x1,y1) (where x1 and y1 are integers). When the batsman hit the ball, Sir Ravindra<br />
Jadeja was the one closest to the point P1  on the ground and was initially standing at the point P2 (x2,y2) (where x2 and y2 are integers). </p>
<p>The secret behind the fast fielding of Sir Jadeja is that he<br />
moves towards his target by placing his steps at only those points that have integral coordinates. Now, Sir Jadeja starts moving towards the point P1 in order to take a catch.</p>
<p>You are the cameraman shooting the entire trajectory of Sir Jadeja. You have to know the number of steps Sir Jadeja takes at locations (x,y) on the line segment between<br />
P1 and P2 (excluding P1 and P2) which satisfy the condition that both x and y are integers?
</p>

<p> </p>
<h3>Input</h3>
<p>The first line contains a single integer T, the number of test cases. T lines follow.<br />
Each of the following T lines contains one test case each. Each test case contains 4 integers x1, y1, x2 and y2 separated by a single space.</p>
<h3>Output</h3>
<p>A single line containing the number of steps.</p>
<h3>Constraints</h3>
<p>1 &lt;= T &lt;= 105</p>
<p>-10<sup>9</sup> &lt;= x1, y1, x2, y2 &lt;= 10<sup>9</sup></p>
<h3>Example</h3>
<pre><b>Input:</b>
3
4 0 0 2
5 5 2 2
8 16 1 9
</pre><pre>
<b>Output:</b>
1
2
6
</pre><p> </p>
<h3>Explanation</h3>
<p>Between (4,0) and (0,2) there’s only 1 integral point (2,1) hence 1 step.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cuttingedge03">cuttingedge03</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2014</td>
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