<?php require("../../includes/header.php"); ?><h1>Chef and Shop</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME08/russian/CHRL1.pdf">Russian</a> also.</h3>
<p>Chef likes shopping, and especially he likes to buy oranges. But right now he is short of money. He has only <b>k</b> rubles. There are <b>n</b> oranges. The <b>i-th</b> one costs <b>cost<sub>i</sub></b> rubles and has weight equal to <b>weight<sub>i</sub></b>. Chef wants to buy a set of oranges with the maximal possible weight. Please help him, and tell him this weight.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>  denoting the number of test cases. The first line of each test case contains two numbers <b>n</b> and <b>k</b>. The following <b>n</b> lines contain two numbers <b>cost<sub>i</sub></b> and <b>weight<sub>i</sub></b> respectively. </p>
<h3>Output</h3>
<p>For each test case, output a single line containing maximal weight among all the affordable sets of oranges. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 250 </b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b> 10 </b></li>
<li><b>1</b> ≤ <b>k</b> ≤ <b> 100000000 </b></li>
<li><b>1</b> ≤ <b>weight<sub>i</sub></b> ≤ <b> 100000000 </b></li>
<li><b>1</b> ≤ <b>cost<sub>i</sub></b> ≤ <b> 100000000 </b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 3
2 2
3 4
2 1
2 2
3 5

<b>Output:</b>
2
5
</pre><p> </p>
<h3>Scoring</h3>
<p>Subtask 1 (30 points): All the oranges' weights equals to 1.<br /><br />
Subtask 2 (30 points):  <b> N = 5  </b><br /><br />
Subtask 2 (40 points):  See the constraints <br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2014</td>
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