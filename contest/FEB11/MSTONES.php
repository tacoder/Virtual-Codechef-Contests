<?php require("../../includes/header.php"); ?><h1>Milestones</h1><div class="content">

<p>Once upon a time, there was a Kingdom of Seven Roads. Besides a fancy name, it actually had exactly 7 straight roads. Its residents wanted to keep track of the distances they traveled so they placed milestones along some roads. The roads slowly deteriorated and disappeared but some milestones remained. Archeologists documented remaining milestones and want to reconstruct the kingdom, starting with its main road. Help them by finding the maximum number of collinear milestones.</p>
<h3>Input</h3>

<p>The first line contains a single integer T, the number of test cases. The first line of each testcase contains the number of documented milestones N. Following lines give the coordinates (X<sub>i</sub>, Y<sub>i</sub>) of those milestones. Coordinates of all milestones will be different.</p>
<h3>Output</h3>

<p>For each test case, output the maximum number of collinear milestones. </p>
<h3>Constraints</h3>
<ul>
<li>T &lt;= 30</li>
<li>1 &lt;= N &lt;= 10 000</li>
<li>-15 000 &lt;= X<sub>i</sub>, Y<sub>i</sub> &lt;= 15 000</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

5
0 0
1 0
2 0
1 1
3 1

2
1 1
10 10

<b>Output:</b>
3
2
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/thocevar">thocevar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-12-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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