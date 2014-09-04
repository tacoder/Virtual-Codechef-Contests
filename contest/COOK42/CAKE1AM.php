<?php require("../../includes/header.php"); ?><h1>Chef and the Cake I</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/mandarin/CAKE1AM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/russian/CAKE1AM.pdf">Russian</a> as well.</h3>
<p>Your friend Сhef has prepared a rectangular cake for you. Both of you want to divide the cake among yourselves. Your friend is generous enough to let you choose your share first. You have decided to take two pieces.<br /><br />For the first piece you make a rectangular cut (each side of this cut is parallel to the corresponding side of the cake) inside the cake. Now the cake have two pieces. You take the piece inside the rectangle cut. For the second piece, you make another rectangular cut (each side of this cut is parallel to the corresponding side of the cake) inside the cake. Now the cake again have two pieces. You take the piece inside the rectangle cut (note that this piece may not be rectangular, because of cut may cross an empty space that remains from the first piece, also it can be empty). Your friend will have the rest of the cake.<br /><br />Given the cuts determine the amount of cake that you will have. The amount is calculated as the sum of the areas covered by your pieces. The cake can be considered as a rectangle with the lower left corner at (0,0) and the upper right corner at (1001,1001).</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. Each test case consists of two lines. Each line contains the description of a rectangular cut by giving the information of the rectangle. A rectangle is defined by four integers (co-ordinate of the lower-left corner (x1,y1) and upper right corner (x2,y2)). </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the amount of cake you will have. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b>≤<b>T</b>≤<b>100</b></li>
<li><b>1</b>≤<b>x1</b>&lt;<b>x2</b>≤<b>1000</b></li>
<li><b>1</b>≤<b>y1</b>&lt;<b>y2</b>≤<b>1000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 1 10 10
11 11 20 20
1 1 20 20
11 11 30 30

<b>Output:</b>
162
641
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Test Case 1:</b><br />
The area of the first piece is 81 and the area of the second piece is 81, a total of 162.
</p>
<p><b>Test Case 2:</b><br />
The area of the first piece is 361 and the area of the second piece is 280, a total of 641.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/satej ">satej </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-01-2014</td>
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