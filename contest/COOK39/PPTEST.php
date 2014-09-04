<?php require("../../includes/header.php"); ?><h1>Polo the Penguin and the Test</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK39/russian/PPTEST.pdf">here</a></h3>
<p>Polo, the Penguin, has a lot of tests tomorrow at the university.</p>
<p>He knows that there are <b>N</b> different questions that will be on the tests. For each question <b>i</b> (<b>i = 1..N</b>), he knows <b>C[i]</b> - the number of tests that will contain this question, <b>P[i]</b> - the number of points that he will get for correctly answering this question on each of tests and <b>T[i]</b> - the amount of time (in minutes) that he needs to spend to learn this question.</p>
<p>Unfortunately, the amount of free time that Polo has is limited to <b>W</b> minutes. Help him to find the maximal possible total number of points he can get for all tests if he studies for no more than <b>W</b> minutes.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains the pair of integers <b>N</b> and <b>W</b>, separated by a space. The following <b>N</b> lines contain three space-separated integers <b>C[i]</b>, <b>P[i]</b> and <b>T[i]</b> (<b>i = 1..N</b>).</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>C[i], P[i], T[i]</b> ≤ <b>100</b>
</li><li><b>1</b> ≤ <b>W</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 7
1 2 3
2 3 5
3 3 3

<b>Output:</b>
11
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The best choice is to learn the first and the third questions and get <b>1*2 + 3*3 = 11</b> points.</p>
<p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece">rustinpiece</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-09-2013</td>
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