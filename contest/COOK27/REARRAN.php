<?php require("../../includes/header.php"); ?><h1>Rearrangement</h1><div class="content">

<p style="text-align:justify">Emily has an array of <b>N</b> integers. She wants to rearrange its elements in such a way that the sum of any <b>K</b> <b>consecutive</b> elements of the rearranged array is divisible by <b>M</b>. She was able to accomplish this for several small cases. Help her with the larger ones.</p>
<h3>Input</h3>

<p style="text-align:justify">The first line of the input contains a single integer <b>T</b>, the number of test cases (no more than 5). Each test case is described by exactly two lines. The first of these lines contains three space-separated integers <b>N</b>, <b>M</b> and <b>K</b>, respectively (1 ≤ <b>K</b> ≤ 70, 2*<b>K</b> ≤ <b>N</b> ≤ 10000, 1 ≤ <b>M</b> ≤ 10<sup>9</sup>). The second of these lines contains <b>N</b> space-separated integers <b>A<sub>i</sub></b> (0 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup>).</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case output exactly one line containing either a single integer -1 if there is no solution or a sequence of <b>N</b> space-separated integers which has the required property and is a permutation of the array <b>A</b> from the input. If there are several ways to do this, any of them will be accepted.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
6 4 3
6 1 1 9 2 5
8 2 3
2 5 0 9 1 9 9 4
8 5 3
1 9 0 1 1 9 9 1

<b>Output:</b>
2 9 1 6 5 1
2 5 9 0 9 9 4 1
-1
</pre><h3>Explanation</h3>
<p style="text-align:justify">There are 6 sequences of 3 consecutive numbers in (2 5 9 0 9 9 4 1). Formally:</p>
<ul>
<li>(2 5 9), sum = 16, which is divisible by 2</li>
<li>(5 9 0), sum = 14, which is divisible by 2</li>
<li>(9 0 9), sum = 18, which is divisible by 2</li>
<li>(0 9 9), sum = 18, which is divisible by 2</li>
<li>(9 9 4), sum = 22, which is divisible by 2</li>
<li>(9 4 1), sum = 14, which is divisible by 2</li>
</ul>
<p style="text-align:justify"><br/>Another possible answer is (4 5 9 0 1 9 2 9).</br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-10-2012</td>
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