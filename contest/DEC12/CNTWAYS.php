<?php require("../../includes/header.php"); ?><h1>The Uncountable Ways</h1><div class="content">

<p>
Little Chef loves mathematics.Every day, he solves some mathematical problems to improve his skill.
</p>
<p>
A few days ago, he found a popular problem about turtles. The problem is as follows. Little Chef is given <b>R</b> rectangles, numbered 1 through <b>R</b>. The width and height of the <b>i</b>-th rectangle are <b>N<sub>i</sub></b> and <b>M<sub>i</sub></b> unit respectively. There is a turtle located on the top-left corner of each rectangle. For each rectangle, count the number of ways the turtle can reach the bottom-right corner, if each turtle can only move right or down 1 unit at any time.The turtle is not allowed to move outside the rectangle, but, of course, the turtle can move on the boundary of the rectangle.
</p>
<p>
In less than one second, this problem was solved for all rectangles.He felt that the problem was too easy. This morning, Little Chef wanted more challenges. Thus, for each rectangle <b>i</b>, he cut and removed a rectangle of <b>A<sub>i</sub></b> × <b>B<sub>i</sub></b> unit from the top-right corner. See the following figure for detail.
</p>
<p><img src="http://codechef.com/download/CNTWAYS1.png" width="280" height="85" /></p>
<p>
He could not solve this new version of the problem easily. Help him count the number of ways each turtle can reach the bottom-right corner using the same rule as before.
</p>
<h3>Input</h3>
<p>
The first line of the input contains a single integer <b>R</b>. The description of <b>R</b> rectangles follows. Each description consists of a single line containing four space-separated integers <b>N<sub>i</sub></b>, <b>M<sub>i</sub></b>, <b>A<sub>i</sub></b>, and <b>B<sub>i</sub></b>.
</p>
<h3>Output</h3>
<p>
For each rectangle, output a single line containing the number of ways, modulo 1,000,000,007.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>R</b> ≤ 10<br /> 2 ≤ <b>N<sub>i</sub></b>, <b>M<sub>i</sub></b> ≤ 400,000<br />1 ≤ <b>A<sub>i</sub></b> &lt; <b>N<sub>i</sub></b><br />1 ≤ <b>B<sub>i</sub></b> &lt; <b>M<sub>i</sub></b></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2 2 1 1

<b>Output:</b>
5
</pre><p>
<b>Explanations:</b><br />
In the sample case, there are 5 ways the turtle can reach the bottom right corner as follows:
</p>
<p><img src=" http://codechef.com/download/CNTWAYS2.png" width="211" height="116" /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ballon_ziq">ballon_ziq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-10-2012</td>
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