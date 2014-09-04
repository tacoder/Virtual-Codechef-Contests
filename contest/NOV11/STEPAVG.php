<?php require("../../includes/header.php"); ?><h1>Stepping Average</h1><div class="content">

<p>Consider the following weird way of finding the average of <b>N</b> numbers. Take any two of the numbers and replace them with their average; repeat this operation exactly <b>N</b>-1 times. The only remaining number is called the <i>stepping average</i> of the initial set. Note that a set may obviously have different stepping averages depending on our choice for every operation.</p>
<p>Your task is, given <b>N</b> integers, find a way of performing the operations such that the resulting stepping average is as close to the given integer <b>K</b> as possible. Note that this is a challenge problem: you don't have to find the best possible solution, but the better is your solution the more points you get.</p>
<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> -- the number of test cases (no more than 10). Each test case consists of two lines -- the first of them contains two positive integers <b>N</b> and <b>K</b> (<b>N</b> ≤ 1000, <b>K</b> ≤ 10<sup>9</sup>), the second contains <b>N</b> space-separated positive integers <b>A<sub>1</sub></b>..<b>A<sub>N</sub></b> (<b>A<sub>i</sub></b> ≤ 10<sup>9</sup>).</p>
<h3>Output</h3>

<p>The output for each test case should contain exactly <b>N</b>-1 pairs of integers. <b>i</b>-th pair (1-based) <b>x y</b> means that numbers <b>A<sub>x</sub></b> and <b>A<sub>y</sub></b> are chosen at the corresponding operation, their average is written to <b>A<sub>N+i</sub></b>, and <b>A<sub>x</sub></b> and <b>A<sub>y</sub></b> can't be used any more. See example explanation for more clarity.</p>
<h3>Scoring</h3>

<p>Your score for each test case is just the absolute difference between <b>K</b> and your remaining number. Your final score is the average of all test case scores. Your goal is to minimize the final score.</p>
<p>Note that in order for your submission not to be judged as 'Wrong Answer' the following conditions should be satisfied:</p>
<ul>
<li>your output should contain exactly <b>N</b>-1 pairs of positive integers separated by at least one space for each test case and nothing else;
</li>
<li>your output should contain integers strictly less that <b>N</b>+<b>i</b> in the <b>i</b>-th pair (1-based) for each test case;
</li>
<li>all integers in your output for each test case should be different.</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5 5
9 1 6 3 4

<b>Output:</b>
5 2
4 6
3 1
7 8

<b>Explanation:</b>
</pre><p>We have 5 integers here: 9 1 6 3 4. The first operation is 5 2, so the 6th number becomes (4+1)/2 = 2.5, and the 2nd and the 5th numbers are removed, so we have 9 x 6 3 x 2.5 now (here x means a removed number). Then, 4 6 means that the 7th number becomes (3+2.5)/2 = 2.75, and the 4th and the 6th numbers are removed, resulting in 9 x 6 x x x 2.75. Then, after 3 1 we get x x x x x x 2.75 7.5, and after 7 8 we get x x x x x x x x 5.125. The only number left after the operations is 5.125, so your score for the test case is 0.125.</p>
<h3>Test Case Generation</h3>

<p>Every official input file contains exactly 10 test cases. In every test case <b>N</b> is equal to 1000, <b>K</b> is chosen randomly and uniformly between 1 and 10<sup>9</sup>, and all <b>A<sub>i</sub></b> are chosen randomly and uniformly between 1 and 10<sup>9</sup> as well.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2011</td>
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