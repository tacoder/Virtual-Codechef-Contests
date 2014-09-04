<?php require("../../includes/header.php"); ?><h1>Packing the Golden Triangles</h1><div class="content">

<p align="justify">Did you know that the yummy golden triangle was introduced in India as early as 13th century ? By the way, I'm referring to the popular South Asian snack, Samosa. I guess its hard to code while thinking of Samosa, especially if you are very hungry now ; so lets not get in to any recipe or eating game.
</p>
<p align="justify">
You have <b>N</b>  boxes of Samosas, where each box is a cube. To pack a box, you need to use a rubber band ( pseudo-circular, elastic band ) by placing it around the box ( along 4 faces of the cube ).  A (R1,R2)-rubber band has initial radius <b>R1</b> and it can stretch at max to radius <b>R2</b> without breaking. You can pack a cubical box of side length <b>L</b> using a rubber band of circumference 4 * L ( see Notes for clarity). Given <b>M</b> rubber bands along with their initial radius and max radius, we need to match ( assign ) some rubber bands to boxes. A box needs at least one rubber band to pack it and of course, each rubber band can be used to pack at most one box. Find the maximum number of boxes we can pack.<br />
</p>
<h3>Notes</h3>

<p align="justify">A pseudo-circular rubber band having a radius R has circumference of 2 * K * R , where K is a constant = 22 / 7. So, a (R1,R2) rubber band can be used to pack a cubical box of side length L, only if 2 * K * R1 &lt;= 4 * L &lt;= 2 * K * R2</p>
<h3>Input</h3>

<p>First line contains an integer T ( number of test cases, around 20 ). T cases follow. Each test case starts with an integer N ( number of boxes, 1 &lt;= <b>N</b> &lt;= 1000 ). Next line contains N integers, the side lengths L of the N boxes ( 1 &lt;= <b>L</b> &lt;= 100,000,000 ). Next line contains an integer M ( number of rubber bands, 1 &lt;= <b>M</b> &lt;= 1000 ). Each of the next M lines contains two integers R1 R2 ( 1 &lt;= <b>R1</b> &lt;= <b>R2</b> &lt;= 100,000,000 ), separated by a space.</p>
<h3>Output</h3>

<p>For each test case, output the maximum number of boxes you can pack, in a new line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
4
10 20 34 55
4
7 14
7 21
14 21
7 35

<b>Output:</b>
2
</pre><p>
<b>Explanation:</b><br />
Only 1 test case here, and a possible answer can be, using (7,14) rubber band to pack box L = 10, and using (7,35) rubber band to pack box L = 55. We cannot pack more than 2 boxes.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro">masked_zorro</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-05-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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