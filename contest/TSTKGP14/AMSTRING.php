<?php require("../../includes/header.php"); ?><h1>Andrew and the Strings</h1><div class="content">
<p>Andrew likes strings very much.</p>
<p>He has two strings <b>A</b> and <b>B</b> of <b>N</b> lower alphabet letters. We denote <b>S[i, j]</b> as the substring from <b>i</b><sup>th</sup> to <b>j</b><sup>th</sup> characters of string <b>S</b>.</p>
<p>Andrew is interested in the number of such fours of integers <b>(L<sub>A</sub>, R<sub>A</sub>, L<sub>B</sub>, R<sub>B</sub>)</b>, where <b>1</b> ≤ <b>L<sub>A</sub></b> ≤ <b>R<sub>A</sub></b> ≤ <b>N</b>, <b>1</b> ≤ <b>L<sub>B</sub></b> ≤ <b>R<sub>B</sub></b> ≤ <b>N</b>, and <b>R<sub>A</sub> − L<sub>A</sub> = R<sub>B</sub> − L<sub>B</sub></b>, such that the <a href="http://en.wikipedia.org/wiki/Hamming_distance">Hamming distance</a> between substrings <b>A[L<sub>A</sub>, R<sub>A</sub>]</b> and <b>B[L<sub>B</sub>, R<sub>B</sub>]</b> is not greater than <b>K</b>. Here the Hamming distance between two strings of the same length is the number of unequal characters on the same positions of strings.</p>
<p>Help him and find this number.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b>. The second line contains string <b>A</b>, and the third line contains string <b>B</b>.</p>
<h3>Output</h3>
<p>For each test case, output an integer, denoting the number of fours <b>(L<sub>A</sub>, R<sub>A</sub>, L<sub>B</sub>, R<sub>B</sub>)</b> satisfying the conditions described in the problem statements.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li>Both <b>A</b> and <b>B</b> are contain only <b>N</b> lower alphabet letters</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 2
aba
abb
3 2
abc
def
1 1
a
a

<b>Output:</b>
14
13
1
</pre><h3>Explanation</h3>
<p><b>Example case 1</b>: There are <b>14</b> fours as following:<br /><b>(1, 1, 1, 1) : dist(A[1, 1], B[1, 1]) = dist(a, a) = 0 ≤ 2</b><br /><b>(1, 1, 2, 2) : dist(A[1, 1], B[2, 2]) = dist(a, b) = 1 ≤ 2</b><br /><b>(1, 1, 3, 3) : dist(A[1, 1], B[3, 3]) = dist(a, b) = 1 ≤ 2</b><br /><b>(2, 2, 1, 1) : dist(A[2, 2], B[1, 1]) = dist(b, a) = 1 ≤ 2</b><br /><b>(2, 2, 2, 2) : dist(A[2, 2], B[2, 2]) = dist(b, b) = 0 ≤ 2</b><br /><b>(2, 2, 3, 3) : dist(A[2, 2], B[3, 3]) = dist(b, b) = 0 ≤ 2</b><br /><b>(3, 3, 1, 1) : dist(A[3, 3], B[1, 1]) = dist(a, a) = 0 ≤ 2</b><br /><b>(3, 3, 2, 2) : dist(A[3, 3], B[2, 2]) = dist(a, b) = 1 ≤ 2</b><br /><b>(3, 3, 3, 3) : dist(A[3, 3], B[3, 3]) = dist(a, b) = 1 ≤ 2</b><br /><b>(1, 2, 1, 2) : dist(A[1, 2], B[1, 2]) = dist(ab, ab) = 0 ≤ 2</b><br /><b>(1, 2, 2, 3) : dist(A[1, 2], B[2, 3]) = dist(ab, bb) = 1 ≤ 2</b><br /><b>(2, 3, 1, 2) : dist(A[2, 3], B[1, 2]) = dist(ba, ab) = 2 ≤ 2</b><br /><b>(2, 3, 2, 3) : dist(A[2, 3], B[2, 3]) = dist(ba, bb) = 1 ≤ 2</b><br /><b>(1, 3, 1, 3) : dist(A[1, 3], B[1, 3]) = dist(aba, abb) = 1 ≤ 2</b></p>
<p><b>Example case 2</b>: The four <b>(1, 3, 1, 3)</b> no longer satisfies the conditions, because<br /><b>(1, 3, 1, 3) : dist(A[1, 3], B[1, 3]) = dist(abc, def) = 3 > 2</b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>28-03-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>