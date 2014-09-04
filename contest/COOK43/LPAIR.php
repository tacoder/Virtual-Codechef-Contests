<?php require("../../includes/header.php"); ?><h1>Chef and Reunion</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/COOK43/mandarin/LPAIR.pdf" target="_blank">Mandarin Chinese</a> and <a href="/download/translated/COOK43/russian/LPAIR.pdf" target="_blank">Russian</a> as well.</h3>
<p>Today is the reunion of all chefs in the world. Our Chef wants to make this moment more happier. He arranged a mass wedding in this reunion. For this, he made a strange stage and drew two horizontal parallel lines on the stage. There are <b>N</b> unmarried male chefs in the reunion and he gave each male chef <b>i</b> an unique number <b>M<sub>i</sub></b>. Then all male chefs will stand in the first line drawn by Chef. But they will stand in increasing order of their number. That means chef with the lowest number will stand at the leftmost position of the line, then right to him would be the chef with the second lowest number and so on. Similarly, there are <b>N</b> female chefs in the reunion and Chef also gave each female chef <b>j</b> an unique number <b>F<sub>j</sub></b> (sequences <b>F<sub>j</sub></b> and <b>M<sub>i</sub></b> can have equal numbers). Then all female chefs will stand in the other line following the same rule(will stand in increasing order of the numbers) as the male chef.</p>
<p>Now chef will choose all the marriage pairs himself. He will select a female chef and a male chef (both of them have not selected before) and will draw a straight line between them. He calls this line a marriage line. He will do this for the rest of the chefs.</p>
<p>You will be given the <b>N</b> marriage lines; you have to find how many marriage line pairs intersect with each other.</p>
<h3>Input</h3>
<p>First line contains a single integer <b>N</b>. The <b>i</b>-th line of the next <b>N</b> lines contain two space separated integers <b>M<sub>i</sub></b> and <b>F<sub>i</sub></b>, means there is a marriage line between male chef <b>M<sub>i</sub></b> and female chef <b>F<sub>i</sub></b>. No marriage line will be mentioned twice.</p>
<h3>Output</h3>
<p>Output the number of marriage line pairs that intersect with each other on a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000 (10<sup>5</sup>)</b></li>
<li><b>0</b> ≤ <b>M<sub>i</sub>, F<sub>i</sub></b> ≤ <b>1000000000 (10<sup>9</sup>)</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 3
3 6
5 4

<b>Output:</b>
1

<b>Input:</b>
4
5 12
10 11
11 9
30 1

<b>Output:</b>
6

</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Only marriage lines (3, 6) and (5, 4) intersect with each other.</p>
<p><b>Example case 2.</b> All the marriage lines intersect with each other.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shiplu">shiplu</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece‎">rustinpiece‎</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-02-2014</td>
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