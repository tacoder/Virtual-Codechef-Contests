<?php require("../../includes/header.php"); ?><h1>Little Elephant and Balloons</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/LEBALONS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/LEBALONS.pdf">Russian</a>.</h3>
<p>The Little Elephant from the Zoo of Lviv is going to the Birthday Party of  the Big Hippo tomorrow. Now he wants to prepare a gift for the Big Hippo.

</p><p>He has <b>N</b> balloons, numbered from <b>1</b> to <b>N</b>. The <b>i-th</b> balloon has the color <b>C<sub>i</sub></b> and it costs <b>P<sub>i</sub></b> dollars. The gift for the Big Hippo will be any subset (chosen randomly, possibly empty) of the balloons such that the number of different colors in that subset is at least <b>M</b>.

</p><p>Help Little Elephant to find the expected cost of the gift.

<h3>Input</h3>
</p><p>The first line of the input contains a single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. The first line of each test case contains a pair of integers <b>N</b> and <b>M</b>. The next <b>N</b> lines contain <b>N</b> pairs of integers <b>C<sub>i</sub></b> and <b>P<sub>i</sub></b>, one pair per line.

<h3>Output</h3>
</p><p>In <b>T</b> lines print <b>T</b> real numbers - the answers for the corresponding test cases. Your answer will considered correct if it has at most <b>10^-6</b> absolute or relative error.</p>

<h3>Constraints</h3>

<li><b>1</b> ≤ <b>T</b> ≤ <b>40</b></li>
<li><b>1</b> ≤ <b>N</b>,  <b>C<sub>i</sub></b>≤ <b>40</b></li>
<li><b>1</b> ≤ <b>P<sub>i</sub></b> ≤ <b>1000000</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>K</b>, where <b>K</b> is the number of different colors in the test case.</li>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
2 2
1 4
2 7
2 1
1 4
2 7

<b>Output:</b>
11.000000000
7.333333333

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-04-2012</td>
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