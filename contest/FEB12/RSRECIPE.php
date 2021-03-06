<?php require("../../includes/header.php"); ?><h1>Restore the Recipe</h1><div class="content">

<p>Chef has had a recipe. He had written it as a sequence of <b>N</b> integer numbers <b>A[1], A[2], ..., A[N]</b>. To be on the safe side, he decided to write out <b>M</b> triples of numbers, where <b>i</b>-th triple is composed of three numbers <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> and <b>Z<sub>i</sub></b>. It means that the sum of numbers in the recipe from <b>X<sub>i</sub></b>-th to <b>Y<sub>i</sub></b>-th is equal to <b>Z<sub>i</sub></b>. In other words, <b>A[X<sub>i</sub>] +  A[X<sub>i</sub> + 1] + ... + A[Y<sub>i</sub>] = Z<sub>i</sub></b>. Unfortunately, the recipe has been recently lost. So Chef needs to restore his recipe using these <b>M</b> triples. Your task is to help him.</p>
<h3>Input</h3>

<p>The first line contains two space separated integer numbers <b>N</b> and <b>M</b>.<br />
Then <b>M</b> lines follow. Each line contains three space separated integer numbers <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> and <b>Z<sub>i</sub></b>. It means that the sum of numbers in the recipe from <b>X<sub>i</sub></b>-th to <b>Y<sub>i</sub></b>-th is equal to <b>Z<sub>i</sub></b>.</p>
<h3>Output</h3>

<p>If there is a solution output <b>N</b> space separated integer numbers - the sequence that you have restored. If there are several solutions you can output any of them. However, any number in the output should be no more than 10<sup>14</sup> by its absolute value. If it is impossible to restore the sequence output "-1" without quotes.</p>
<h3>Constraints</h3>
<ul>
<li>2 ≤ <b>N</b> ≤ 65536</li>
<li>1 ≤ <b>M</b> ≤ 200000</li>
<li>1 ≤ <b>X<sub>i</sub></b> ≤ <b>Y<sub>i</sub></b> ≤ <b>N</b></li>
<li>|<b>Z<sub>i</sub></b>| ≤ 1000000000 (10<sup>9</sup>)</li>
<li>If It is possible to restore the sequence then there is way to do this such that every number in the restored sequence is in range [-10000; 10000]</li>
<p>
</p></ul>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
4 4
1 2 3
2 3 1
3 4 -2
1 4 1                                                                            

<b>Output 1:</b>
1 2 -1 -1

<b>Input 2:</b>
5 3
1 3 4
4 5 6
1 5 9 

<b>Output 2:</b>
-1
</pre><h3>Explanation</h3>
<p>In the first test case the answer is not unique. Possible answers are also <b>{0, 3, -2, 0}</b>, <b>{2, 1, 0, -2}</b> and many others.</p>
<p>In the second test case first two conditions imply <b>A[1] + A[2] + A[3] = 4</b> and <b>A[4] + A[5] = 6</b> and hence <b>A[1] + A[2] + A[3] + A[4] + A[5] = (A[1] + A[2] + A[3]) + (A[4] + A[5]) = 4 + 6 = 10</b>. And it contradicts to the third condition. Hence it is impossible to restore the recipe.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-11-2011</td>
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