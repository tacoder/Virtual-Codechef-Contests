<?php require("../../includes/header.php"); ?><h1>Arranging Cup-cakes</h1><div class="content">

<p> Our Chef is catering for a big corporate office party and is busy preparing different mouth watering dishes. The host has insisted that he serves his delicious cupcakes for dessert. </p>
<p> On the day of the party, the Chef was over-seeing all the food arrangements as well, ensuring that every item was in its designated position. The host was satisfied with everything except the cupcakes. He noticed they were arranged neatly in the shape of a rectangle. He asks the Chef to make it as square-like as possible. </p>
<p> The Chef is in no mood to waste his cupcakes by transforming it into a perfect square arrangement. Instead, to fool the host, he asks you to arrange the <b>N</b> cupcakes as a rectangle so that the <b>difference</b> between the length and the width is minimized. </p>
<h3>Input</h3>
<p>The first line of the input file contains an integer <b>T</b>, the number of test cases. Each of the following <b>T</b> lines contains a single integer <b>N</b> denoting the number of cupcakes.</p>
<h3>Output</h3>

<p>Output <b>T</b> lines, each indicating the minimum possible difference between the length and the width in a rectangular arrangement of the cupcakes.</p>
<h3>Constraints</h3>

<p>
1 ≤ <b>T</b> ≤ 100</p>
<p>
1 ≤ <b>N</b> ≤ 10<sup>8</sup>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
20
13
8
4

<b>Output:</b>
1
12
2
0
</pre><h3>Explanation </h3>
<p><b>Case 1</b>: 20 cupcakes can be arranged in 6 possible ways -  1 x 20, 2 x 10, 4 x 5, 5 x 4, 10 x 2 and 20 x 1. The corresponding differences between the length and the width are 19, 8, 1, 1, 8 and 19 respectively. Hence, 1 is the answer.</p>
<p><b>Case 4</b>: 4 cupcakes can be arranged as a 2 x 2 square. Difference between the length and the width is 0. You can't do anything better than 0.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shettynamit">shettynamit</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-05-2012</td>
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