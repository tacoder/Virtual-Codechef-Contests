<?php require("../../includes/header.php"); ?><h1>Ciel and Karaoke</h1><div class="content">

<p>You need to find the distance from the given piecewise-constant function to the set of all functions, satisfying Lipschitz condition with the constant <b>K</b>, in the space <b>L<sup>1</sup>(−∞, +∞)</b>. If you understand nothing here then read the problem statement below :P</p>
<p>Chef Ciel and her friends go to <i>karaoke</i> after the New Year's party. In karaoke, they sing songs, and moreover, recent karaoke machines can score their performance. To get a high score, one of the most important things is to sing with correct pitches.</p>
<p>The correct pitch at time <b>t</b> for some song is represented as <b>f(t)</b>, where <b>f(t)</b> is a piecewise-constant function. In this problem, let us consider the infinitely long time <b>−∞</b> &lt; <b>t</b> &lt; <b>+∞</b> for simplicity. Let <b>N−1</b> integers <b>A<sub>1</sub></b> &lt; <b>A<sub>2</sub></b> &lt; ... &lt; <b>A<sub>N−1</sub></b> denote the time moments when the correct pitch is changed. That is,</p>
<ul>
<li><b>f(t)</b> = <b>B<sub>0</sub></b>, for <b>−∞</b> &lt; <b>t</b> &lt; <b>A<sub>1</sub></b>,</li>
<li><b>f(t)</b> = <b>B<sub>k</sub></b>, for <b>A<sub>k</sub></b> ≤ <b>t</b> &lt; <b>A<sub>k+1</sub></b> (<b>1</b> ≤ <b>k</b> ≤ <b>N−2</b>),</li>
<li><b>f(t)</b> = <b>B<sub>N−1</sub></b>, for <b>A<sub>N−1</sub></b> ≤ <b>t</b> &lt; <b>+∞</b>.</li>
</ul>
<p>On the other hand, Ciel cannot change her pitch instantly. So Ciel's pitch <b>g(t)</b> must satisfy the condition <b>|g(x) − g(y)| ≤ K |x − y|</b> for all real <b>x</b> and <b>y</b>. In particular <b>g(t)</b> is a continuous function and <b>|g'(t)|</b> ≤ <b>K</b> for all <b>t</b> where <b>g'(t)</b> exists (<b>g'(t)</b> denotes the derivative of <b>g(t)</b>).</p>
<p>The score assigned to Ciel by the karaoke machine is the value of the integral of <b>|f(t) − g(t)|</b> over the interval <b>(−∞, +∞</b>). Your task is to calculate the minimum value of this integral over all possible functions <b>g(t)</b> that satisfy the above condition.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case consists of exactly 3 lines. The first line of each test case contains two space separated integers <b>N</b> and <b>K</b>. The second line contains <b>N−1</b> space separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N−1</sub></b>. Finally, the third line contains <b>N</b> space separated integers <b>B<sub>0</sub>, B<sub>1</sub>, ..., B<sub>N−1</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum value of the integral mentioned in the problem statement. The output must have an absolute or relative error at most <b>0.000001 (10<sup>−6</sup>)</b>. Please, note that your output should not have more than <b>1000</b> digits after the decimal point, otherwise you may (or may not) get <i>wrong answer</i> or <i>runtime error (SIGXFSZ)</i>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>250</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>8</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>4</b></li>
<li><b>0</b> ≤ <b>A<sub>1</sub></b> &lt; <b>A<sub>2</sub></b> &lt; ... &lt; <b>A<sub>N−1</sub></b> ≤ <b>20130120</b></li>
<li><b>0</b> ≤ <b>B<sub>0</sub></b>, <b>B<sub>1</sub></b>, ..., <b>B<sub>N−1</sub></b> ≤ <b>20130120</b></li>
<li>It can occur that <b>B<sub>i−1</sub></b> = <b>B<sub>i</sub></b> for some <b>i = 1, 2, ..., N−1</b></li>
<li>The sum of <b>N<sup>3</sup></b> in one test file does not exceed <b>2013</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 1
1000
900 1000
2 2
1000
900 1000
3 1
500 1200
20 60 30

<b>Output:</b>
2500.0000000000
1250.0000000000
625.0000000000
</pre><h3>Explanation</h3>
<p>The following figure corresponds to the example case 1. Here the bold red line denotes the correct pitch <b>f(t)</b> and the blue line denotes the optimal Ciel's pitch <b>g(t)</b>. The answer is the area of the green region.</p>
<p><img src="http://www.codechef.com/download/CIELKARA.png" width="289" height="258" /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-01-2013</td>
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