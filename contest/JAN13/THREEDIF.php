<?php require("../../includes/header.php"); ?><h1>Three Different Numbers</h1><div class="content">

<p>This is probably the simplest problem ever. You just need to count the number of ordered triples of different numbers <b>(X<sub>1</sub>, X<sub>2</sub>, X<sub>3</sub>)</b>, where <b>X<sub>i</sub></b> could be any positive integer from <b>1</b> to <b>N<sub>i</sub></b>, inclusive (<b>i = 1, 2, 3</b>).</p>
<p>No, wait. I forgot to mention that numbers <b>N<sub>1</sub>, N<sub>2</sub>, N<sub>3</sub></b> could be up to <b>10<sup>18</sup></b>. Well, in any case it is still quite simple :)</p>
<p>By the way, because of this the answer could be quite large. Hence you should output it modulo <b>10<sup>9</sup> + 7</b>. That is you need to find the remainder of the division of the number of required triples by <b>10<sup>9</sup> + 7</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains three space-separated integers <b>N<sub>1</sub>, N<sub>2</sub>, N<sub>3</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of required triples modulo <b>10<sup>9</sup> + 7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N<sub>i</sub></b> ≤ <b>10<sup>18</sup></b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
3 3 3
2 4 2
1 2 3
25 12 2012
1 1 2013

<b>Output:</b>
6
4
1
578880
0
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> We have the following triples composed of different numbers up to 3:<br />(1, 2, 3)<br />(1, 3, 2)<br />(2, 1, 3)<br />(2, 3, 1)<br />(3, 1, 2)<br />(3, 2, 1)</p>
<p><b>Example case 2.</b> Here the triples are:<br />(1, 3, 2)<br />(1, 4, 2)<br />(2, 3, 1)<br />(2, 4, 1)</p>
<p><b>Example case 3.</b> Here the only triple is (1, 2, 3).</p>
<p><b>Example case 4.</b> Merry Christmas! </p>
<p><b>Example case 5.</b> ... and Happy New Year! By the way here the answer is zero since the only choice for <b>X<sub>1</sub></b> and for is <b>X<sub>2</sub></b> is 1, so any such triple will have equal numbers.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-01-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.013 sec</td>
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