<?php require("../../includes/header.php"); ?><h1>Max Circumference</h1><div class="content">

<p style="text-align:justify">
In the magic land there is a triangle <b>ABC</b>.
</p>
<p style="text-align:justify">
You have <b>N</b> spell cards. Each card has two parameters, <b>i</b>-th card has parameters <b>x[i]</b> and <b>y[i]</b>. Using of the <b>i</b>-th spell card add <b>x[i]</b> to the <b>x</b>-coordinate of the point <b>A</b> and add <b>y[i]</b> to the <b>y</b>-coordinate of the point <b>A</b>. So if <b>A</b> has coordinates <b>(X, Y)</b> it will be moving to <b>(X + x[i], Y + y[i])</b> by using this card.
</p>
<p style="text-align:justify">
You can use at most <b>K</b> spell cards. Applying of several spell cards performs consecutively. So if <b>A</b> was moved to some point <b>A'</b> by the first spell card then second spell card is applied to the new position of <b>A</b>, that is, to the point <b>A'</b>, and so on for further cards.
</p>
<p style="text-align:justify">
Your task is to find the maximal possible circumference of the triangle <b>ABC</b> after using of at most <b>K</b> spell cards (note that you can use no spell cards). The circumference of a triangle <b>ABC</b> is the sum of its side lengths: <b>|AB| + |BC| + |CA|</b>. And in our problem by triangle we mean any three points <b>A</b>, <b>B</b>, <b>C</b> of the plane. So, in particular, the points <b>A</b>, <b>B</b>, <b>C</b> can lie on the same line, or even some of them can coincide.
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first line of the input contains two integers <b>N</b> and <b>K</b>.</p>
<p>The second line contains two integers <b>Ax</b> and <b>Ay</b>, the coordinates of the point <b>A</b>.</p>
<p>The third line contains two integers <b>Bx</b> and <b>By</b>, the coordinates of the point <b>B</b>.</p>
<p>The fourth line contains two integers <b>Cx</b> and <b>Cy</b>, the coordinates of the point <b>C</b>.</p>
<p>Each of the following <b>N</b> lines contains two integers <b>x[i]</b> and <b>y[i]</b>, the parameters of the <b>i</b>-th spell card.
</p>
<h3>Output</h3>
<p style="text-align:justify">
Output should contain a single real number rounded to exactly <b>13</b> digits after the decimal point, the maximal possible circumference of the triangle <b>ABC</b> that can be achieved by using at most <b>K</b> spell cards. Your answer will be considered as correct if it has an absolute error less than <b>10<sup>-12</sup></b>.
</p>
<h3>Constraints</h3>
<p style="text-align:justify">
<b>1</b> &le; <b>N</b> &le; <b>500</b></p>
<p><b>0</b> &le; <b>K</b> &le; <b>N</b></p>
<p>|<b>Ax</b>|, |<b>Ay</b>|, |<b>Bx</b>|, |<b>By</b>|, |<b>Cx</b>|, |<b>Cy</b>| &le; <b>10<sup>9</sup></b></p>
<p>|<b>x</b>[<b>i</b>]|, |<b>y</b>[<b>i</b>]| &le; <b>10<sup>6</sup></b>
</p>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
3 2
0 0
1 0
-1 0
0 1
1 0
1 1

<b>Output 1:</b>
6.8284271247462

<b>Input 2:</b>
3 3
0 0
1 0
-1 0
0 1
1 0
1 1

<b>Output 2:</b>
7.8416192529638</pre><h3>Explanation:</h3>
<p style="text-align:justify">
<b>Case 1.</b> Here the optimal way is to use the 1st and the 3rd spell cards. The new coordinates of the point <b>A</b> will be <b>(1, 2)</b>. So the circumference of the new triangle <b>ABC</b> is: <b>|(1, 2) &minus; (1, 0)| + |(1, 0) &minus; (-1, 0)| + |(-1, 0) &minus; (1, 2)| = 4 + 2 * sqrt(2)</b>.
</p>
<p style="text-align:justify">
<b>Case 2.</b> Here the optimal way is to use all of the spell cards. The new coordinates of the point <b>A</b> will be <b>(2, 2)</b>. So the circumference of the new triangle <b>ABC</b> is: <b>|(2, 2) &minus; (1, 0)| + |(1, 0) &minus; (-1, 0)| + |(-1, 0) &minus; (2, 2)| = 2 + sqrt(5) + sqrt(13)</b>.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cgy4ever">cgy4ever</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-09-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>