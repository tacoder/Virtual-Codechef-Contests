<?php require("../../includes/header.php"); ?><h1>Alien Chefs</h1><div class="content">

<p align="justify">
The aliens living in outer space are very advanced in technology,<br />
intelligence and everything, except one, and that is Cooking.<br />
Each year they spend millions of dollars in research, to crack famous recipes prepared by humans.</p>
<p align="justify">
Recently they came to know about Khana-Academy,<br />
a non-profit organization streaming free cooking lesson videos on earth.<br />
There are <b>N</b> recipes,<br />
numbered 1 to <b>N</b>, and the video of the <i>i</i><sup>th</sup> recipe is live in the time interval [<b>S</b><sub><i>i</i></sub>, <b>E</b><sub><i>i</i></sub>].<br />
An alien can visit earth but can not survive for more than just a small moment (earth is so advanced in pollution).<br />
An alien visits the earth at an integer time <b>t</b> and instantly downloads the complete video of all the lessons<br />
that are live at that moment of time <b>t</b> and leaves earth immediately.<br />
You are given the visiting times of a small group of <b>K</b> aliens.<br />
Find the number of different recipes aliens can learn by watching the downloaded videos.<br />
Not just one group of aliens, there are <b>Q</b> such groups,<br />
so you have to find the answer for each of these <b>Q</b> groups.</p>
<h3>Input</h3>

<p align="justify">
The first line has an integer <b>N</b>.<br />
Each of the following <b>N</b> lines has two integers <b>S</b><sub><i>i</i></sub> <b>E</b><sub><i>i</i></sub>.<br />
The next line has an integer <b>Q</b>, the number of groups.<br />
Each of the following <b>Q</b> lines has information of a group of aliens.<br />
The first integer is <b>K</b>, the number of aliens in that group, followed by <b>K</b> integers in the same line,<br />
the integer visiting times <b>t</b> of the aliens.</p>
<p>1 ≤ <b>N</b> ≤ 100000 (10<sup>5</sup>)<br />
1 ≤ <b>Q</b> ≤ 5000 (5 · 10<sup>3</sup>)<br />
1 ≤ <b>K</b> ≤ 20<br />
1 ≤ <b>S</b><sub><i>i</i></sub>, <b>E</b><sub><i>i</i></sub>, <b>t</b> ≤ 1000000000 (10<sup>9</sup>)<br />
<b>S</b><sub><i>i</i></sub> &lt; <b>E</b><sub><i>i</i></sub></p>
<h3>Output</h3>

<p align="justify">
For each of the <b>Q</b> groups, output the number of different recipes that group of aliens can learn by watching the downloaded videos.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
1 4
3 10
2 6
5 8
3
1 5
2 2 6
3 1 10 9

<b>Output:</b>
3
4
2
</pre><p>
<b>Explanation:</b><br />
Given videos of 4 recipes in the following closed intervals.<br />
1. [ 1 , 4 ]<br />
2. [ 3 , 10 ]<br />
3. [ 2 , 6 ]<br />
4. [ 5 , 8 ]</p>
<p>In the first query, only one alien arrives at t = 5 and can download 3 recipes 2, 3, 4.</p>
<p>In the second query, two aliens arrive at t = 2 and 6. They can learn all the 4 recipes.</p>
<p>In the third query, three aliens arrive at t = 1, 10 and 9. They can learn only two recipes, 1 and 2.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-06-2012</td>
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