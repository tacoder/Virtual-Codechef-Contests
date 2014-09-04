<?php require("../../includes/header.php"); ?><h1>Magic Pairs</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/ALEXNUMB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/ALEXNUMB.pdf">Russian</a>.</h3>
<p>Alexandra has some distinct integer numbers <b>a<sub>1</sub>,a<sub>2</sub>...a<sub>n</sub></b>.<br />
Count number of pairs <b>(i,j)</b> such that:</p>
<li><b> 1≤ i ≤ n</b></li>
<li><b> 1≤ j ≤ n</b></li>
<li><b> a<sub>i</sub> &lt; a<sub>j</sub></b></li>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.The first line of each test case contains a single integer <b>n</b> denoting the number of numbers Alexandra has. The second line contains <b>n</b> space-separated distinct integers <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>n</sub></b> denoting these numbers.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing number of pairs for corresponding test case.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>4</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li>All the a<sub>i</sub> are distinct
</li></ul>
<p> </p>
<h3>Example</h3>
<pre>
2
2
2 1
3
3 1 2
</pre><p><b>Output:</b></p>
<pre>
1
3
</pre><p> </p>
<h3>Explanation</h3>
<p>Case 1: Only one such pair: (2,1)</p>
<p>Case 2: 3 possible pairs: (2,1), (2,3), (3,1) </p>
<p>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ballon_ziq">ballon_ziq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-11-2013</td>
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