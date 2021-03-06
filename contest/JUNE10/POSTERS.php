<?php require("../../includes/header.php"); ?><h1>Tidying Posters</h1><div class="content">

<p>
A public wall at your university is littered with posters advertising various events.  A new policy has just been enacted that states no two posters on the wall may overlap.  You have been asked to remove some posters from the wall so the remaining posters  do not obscure each other.  To keep the students as happy as possible, you should remove the minimum number of posters to achieve this goal.<br />
You may not remove a poster and place it in another position; all posters you leave on the wall must be in their original position.</p>
<p>
When you examined the wall, you noticed something very nice.  Every poster was placed on the wall by pinning the four corners.  This was done in a very courteous manner since each pin goes only through the poster it is holding.</p>
<p>
Time to get to work! Oh, the reason you were hired is that you are very good at taking down a single poster without disturbing the rest, even if that poster is obscured by many others.</p>
<h3>Input</h3>

<p>
The first line consists of a single integer T indicating the number of test cases (about 25).</p>
<p>
Each test case consists begins with a single integer n indicating the number of posters.  The next n lines consist of 4 integers x<sub>0</sub>, x<sub>1</sub>, y<sub>0</sub>, and y<sub>1</sub> satisfying x<sub>0</sub> &lt; x<sub>1</sub> and y<sub>0</sub> &lt; y<sub>1</sub>. This means the poster covers all points (x,y) satisfying<br />
x<sub>0</sub> &lt;= x &lt;= x<sub>1</sub> and y<sub>0</sub> &lt;= y &lt;= y<sub>1</sub>.</p>
<p>
As stated before hand, no corner of any poster will intersect any other poster anywhere.  That is, if (x,y) is a corner point of one poster and another poster is described by x<sub>0</sub>, x<sub>1</sub>, y<sub>0</sub>, and y<sub>1</sub>, then we do not have x<sub>0</sub> &lt;= x &lt;= x<sub>1</sub> and y<sub>0</sub> &lt;= y &lt;= y<sub>1</sub>.</p>
<p>
Bounds: 1 &lt;= n &lt;= 100 and each integer in a poster description fits in a signed 32 bit integer.</p>
<h3>Output</h3>

<p>The output for each test case is a single line containing a single integer that is the maximum number of posters that can be left on the wall such that no two posters share a common point on the wall.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

3
0 5 1 2
1 2 0 3
3 4 0 3

3
-3 3 -1 1
-2 2 -2 2
-1 1 -3 3

<b>Output:</b>
2
1
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-04-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>