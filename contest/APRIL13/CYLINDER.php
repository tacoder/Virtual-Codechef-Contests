<?php require("../../includes/header.php"); ?><h1>Cylinder</h1><div class="content">

<p>Chef wants to make a steel container. The container should be of cylindrical form and should have as large volume as possible. He has a rectangular steel sheet of the size <b>W × H</b> for this. His plan is the following:</p>
<ul>
<li>At first he cuts the sheet into two rectangular sheets by horizontal or vertical cut.</li>
<li>Then he takes one of the obtained sheets and cuts out two equal non-overlapping circles from it. Let the radius of each circle be <b>R</b>.</li>
<li>Finally he cuts out the rectangular sheet of the size <b>2πR × A</b> for maximal possible <b>A</b> from the second sheet, with sizes parallel to the sides of the second sheet. He will use it as a lateral surface of the container. Namely, he rolls up the obtained sheet along the side <b>2πR</b> to obtain the lateral surface of cylinder.</li>
<li>Thus, Chef obtains the cylindrical container of height <b>A</b> and radius <b>R</b>, having bottom and top made from steel.</li>
</ul>
<p> </p>
<p>Chef is aware of your advanced math abilities and asks you for help to find the optimal container. Output the maximum volume of the container that could be achieved by the above scheme.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains two space-separated integers <b>W</b> and <b>H</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the maximum volume of the container. Your answer will be considered as correct if it has a relative error less than <b>10<sup>−11</sup></b>. More formally, if the correct output is <b>A</b> and your output is <b>B</b>, your output will be considered as correct if and only if <b>|A − B| ≤ 10<sup>−11</sup> * A</b>.</p>
<h3>Constrains</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>400000</b> (<b>4 * 10<sup>5</sup></b>)</li>
<li><b>1</b> ≤ <b>W</b> ≤ <b>999999</b> (<b>10<sup>6</sup> − 1</b>)</li>
<li><b>1</b> ≤ <b>H</b> ≤ <b>999999</b> (<b>10<sup>6</sup> − 1</b>)</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
4 4
2 3
1 6

<b>Output:</b>
3.471819240663
0.824190535860
0.785398163397
</pre><h3>Explanation</h3>
<p>In all examples blue circles are top and bottom of container. Yellow rectangle is used to create lateral surface. Namely, we roll up it along the direction of blue arrow to match green borders.</p>
<p><b>Example case 1:</b></p>
<p> <img width="30%" src="http://codechef.com/download/CYLINDER_Example1.png" /></p>
<p> <b>R ≅ 0.63662, A ≅ 2.72676.</b></p>
<p><b>Example case 2:</b></p>
<p> <img width="20%" src="http://codechef.com/download/CYLINDER_Example2.png" /></p>
<p> <b>R ≅ 0.36218, A = 2.</b></p>
<p><b>Example case 3:</b></p>
<p> <img width="40%" src="http://codechef.com/download/CYLINDER_Example3.png" /></p>
<p> <b>R = 0.5, A = 1.</b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-03-2013</td>
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