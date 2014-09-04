<?php require("../../includes/header.php"); ?><h1>Little Elephant and Bombs</h1><div class="content">

<p>The Little Elephant from the Zoo of Lviv currently is on the military mission. There are <b>N</b> enemy buildings placed in a row and numbered from left to right strating from <b>0</b>. Each building <b>i</b> (except the first and the last) has exactly two adjacent buildings with indices <b>i-1</b> and <b>i+1</b>. The first and the last buildings have just a single adjacent building.</p>
<p>Some of the buildings contain bombs. When bomb explodes in some building it destroys it and all adjacent to it buildings.</p>
<p>You are given the string <b>S</b> of length <b>N</b>, where <b>S<sub>i</sub></b> is <b>1</b> if the <b>i</b>-th building contains bomb, <b>0</b> otherwise. Find for the Little Elephant the number of buildings that will not be destroyed after all bombs explode. Please note that all bombs explode simultaneously.</p>
<h3>Input</h3>
<p>The first line contains single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. The first line of each test case contains the single integer <b>N</b> - the number of buildings. The next line contains the string <b>S</b> of length <b>N</b> consisted only of digits <b>0</b> and <b>1</b>.</p>
<h3>Output</h3>
<p>In <b>T</b> lines print <b>T</b> inetgers - the answers for the corresponding test cases.</p>
<h3>Constraints</h3>
<p>
1 &lt;= <b>T</b> &lt;= 100</p>
<p>
1 &lt;= <b>N</b> &lt;= 1000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3
010
5
10001
7
0000000

<b>Output:</b>
0
1
7

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-04-2012</td>
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