<?php require("../../includes/header.php"); ?><h1>Ciel and Eggs</h1><div class="content">

<p>
Chef Ciel has <strong>N</strong> strange eggs.<br />
The <strong>i</strong>-th egg is broken by tapping exactly <strong>A<sub>i</sub></strong> times.<br />
Ciel needs to break <strong>K</strong> eggs as soon as possible for cooking a rice omelet.<br />
However she has been put in an uncomfortable situation. Someone shuffled the eggs!<br />
Ciel knows the values <strong>A<sub>i</sub></strong>, however she doesn't know which egg is which.<br />
She'd like to minimize the worst-case number of taps.<br />
What is the minimal number?
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
The first line for each test case has 2 integers <strong>N</strong> and <strong>K</strong>.<br />
Then next line has <strong>N</strong> integers <strong>A</strong><sub>1</sub>, <strong>A</strong><sub>2</sub>, ..., <strong>A<sub>N</sub></strong>.
</p>
<h3>Output</h3>
<p>
For each test case, print the minimal number of taps for the worst-case.
</p>
<h3>Constraints</h3>
<p>
1 &le; <strong>T</strong> &le; 10<br />
1 &le; <strong>K</strong> &le; <strong>N</strong> &le; 500<br />
1 &le; <strong>A<sub>i</sub></strong> &le; 1000000 (10<sup>6</sup>)
</p>
<h3>Sample Input</h3>
<pre>3
2 1
5 8
2 1
5 58
3 2
1 2 3</pre><h3>Sample Output</h3>
<pre>8
10
5</pre><h3>Output details</h3>
<p>
In the first case, if a egg isn't broken after 5 taps, she should continue to tap the same egg.
</p>
<p>
In the second case, if a egg isn't broken after 5 taps, she should tap another egg 5 times.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-08-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
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