<?php require("../../includes/header.php"); ?><h1>Ciel and Earthquake</h1><div class="content">

<p>
The country in which Chef Ciel lives has many earthquakes.<br />
Since Ciel's restaurant is far away from an evacuation center, Ciel is afraid of earthquakes.<br />
So, Ciel would like to know the probability that Ciel can reach from Ciel's restaurant to the evacuation center when an earthquake occurs.<br />
Your task is calculating the probability under the following assumptions.
</p>
<p>
Ciel's city has <strong>R</strong>*<strong>C</strong> junctions (<strong>i</strong>, <strong>j</strong>) for 1 ≤ <strong>i</strong> ≤ <strong>R</strong>, 1 ≤ <strong>j</strong> ≤ <strong>C</strong>.<br />
There is a two-way road between the junctions (<strong>r</strong><sub>1</sub>, <strong>c</strong><sub>1</sub>) and (<strong>r</strong><sub>2</sub>, <strong>c</strong><sub>2</sub>) if and only if |<strong>r</strong><sub>1</sub> - <strong>r</strong><sub>2</sub>| + |<strong>c</strong><sub>1</sub> - <strong>c</strong><sub>2</sub>| = 1.<br />
When an earthquake occurs, each road is destroyed with probability <strong>p</strong>, and these events are statistically independent of each other.<br />
Ciel's restaurant is in the junction (1, 1), and the evacuation center is in the junction (<strong>R</strong>, <strong>C</strong>).<br />
Ciel only considers a big earthquake, so you can assume that <strong>p</strong> is not less than 0.1.
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
Each test case has 3 numbers <strong>R</strong>, <strong>C</strong> and <strong>p</strong>, where <strong>R</strong> and <strong>C</strong> are integers.
</p>
<h3>Output</h3>
<p>
For each test case output the required probability.<br />
Your answer must have an absolute error no more than 0.000001 (10<sup>-6</sup>).
</p>
<h3>Constraints</h3>
<p>
1 ≤ <strong>T</strong> ≤ 50<br />
1 ≤ <strong>R</strong> ≤ 8<br />
1 ≤ <strong>C</strong> ≤ 1000000000000000000 (10<sup>18</sup>)<br />
0.1 ≤ <strong>p</strong> ≤ 1<br />
<strong>p</strong> has at most four digits after the decimal point.
</p>
<h3>Sample Input</h3>
<pre>5
2 2 0.5
3 2 0.7
2 3 0.7
1 1 0.2
7 7 0.8</pre><h3>Sample Output</h3>
<pre>0.4375
0.0768204
0.0768204
1
0.000003962379607</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>2-02-2012</td>
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