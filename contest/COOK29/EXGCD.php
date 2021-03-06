<?php require("../../includes/header.php"); ?><h1>Expected Greatest Common Divisor</h1><div class="content">

<p>Several integers <b>X<sub>0</sub></b>, <b>X<sub>1</sub></b>, ..., <b>X<sub>K-1</sub></b> are randomly chosen from some intervals.  Namely, <b>X<sub>0</sub></b> is randomly chosen between <b>A<sub>0</sub></b> and <b>B<sub>0</sub></b>, inclusive, <b>X<sub>1</sub></b> is randomly chosen between <b>A<sub>1</sub></b> and <b>B<sub>1</sub></b>, inclusive, and so on.  We are interested in the expected value of the greatest common divisor of the <b>X<sub>i</sub></b> which is the average of <b>GCD(X<sub>0</sub>, X<sub>1</sub>, ..., X<sub>K-1</sub>)</b> over all possible choices of <b>X<sub>0</sub></b>, <b>X<sub>1</sub></b>, ..., <b>X<sub>K-1</sub></b>. In order to avoid floating-point precision issues, we instead use the following output method. Suppose the expected value of the greatest common divisor of all the <b>X<sub>i</sub></b> is <b>P</b>/<b>Q</b>, where <b>P</b> and <b>Q</b> are relatively prime positive integers.  Find an integer <b>N</b> between 0 and 1000000006, inclusive, for which (<b>P</b> + <b>Q</b> * <b>N</b>) is divisible by 1000000007 = 10<sup>9</sup> + 7.</p>
<h3>Input</h3>
<p>Input will begin with an integer <b>T</b>, the number of test cases. Each test case begins with an integer <b>K</b>, the number of integers to be chosen.  <b>K</b> pairs of integers <b>A<sub>i</sub></b> <b>B<sub>i</sub></b> follow.</p>
<h3>Output</h3>
<p>For each test case, output the value <b>N</b> according to the problem statement.  If multiple such values exist, print any one of them.  If no such value exists, print -1.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 50</li>
<li>2 ≤ <b>K</b> ≤ 5</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ <b>B<sub>i</sub></b> ≤ 200000 (2 * 10<sup>5</sup>)</li>
</ul>
<h3>Sample Input</h3>
<pre>4
2
2 4
3 5
3
1 2
1 2
1 2
3
1 12
1 12
1 12
2
2700 2701
2612 2724
</pre><h3>Sample Output</h3>
<pre>333333334
875000005
722222226
314159265
</pre><h3>Explanation</h3>
<p><b>Sample test 1.</b> Here <b>X<sub>0</sub></b> is randomly chosen between 2 and 4, inclusive, and <b>X<sub>1</sub></b> is randomly chosen between 3 and 5, inclusive. The distribution of the greatest common divisor of <b>X<sub>0</sub></b> and <b>X<sub>1</sub></b> can be seen from the following table:</p>
<p><table>
<tbody>
<tr>
<td></td>
<td>2</td>
<td>3</td>
<td>4</td>
</tr>
<tr>
<td>3</td>
<td>1</td>
<td>3</td>
<td>1</td>
</tr>
<tr>
<td>4</td>
<td>2</td>
<td>1</td>
<td>4</td>
</tr>
<tr>
<td>5</td>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>
</tbody>
</table>
</p>
<p>The expected value is therefore (1 + 3 + 1 + 2 + 1 + 4 + 1 + 1 + 1) / 9 = 15 / 9 = 5 / 3.<br />
Since 5 + 3 * 333333334 = 1000000007, the answer is 333333334.</p>
<p><b>Sample test 2.</b> Here each of <b>X<sub>0</sub></b>, <b>X<sub>1</sub></b>, <b>X<sub>2</sub></b> is randomly chosen between 1 and 2, inclusive. So we have 8 possibilities in all.  The greatest common divisor is 2 when <b>X<sub>0</sub></b> = <b>X<sub>1</sub></b> = <b>X<sub>2</sub></b> = 2 and it is 1 in the 7 remaining cases. The expected value is therefore (1 * 7 + 2 * 1) / 8 = 9 / 8.  Since 9 + 8 * 875000005 = 7000000049 = 7 * 1000000007, the answer is 875000005.</p>
<p><b>Sample test 3.</b> Here <b>P</b> is 23 and <b>Q</b> is 18.</p>
<p><b>Sample test 4.</b> Just enjoy the answer :)</p>
    </div><table>
<tbody>
<tr>
<td></td>
<td>2</td>
<td>3</td>
<td>4</td>
</tr>
<tr>
<td>3</td>
<td>1</td>
<td>3</td>
<td>1</td>
</tr>
<tr>
<td>4</td>
<td>2</td>
<td>1</td>
<td>4</td>
</tr>
<tr>
<td>5</td>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>
</tbody>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-11-2012</td>
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