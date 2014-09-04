<?php require("../../includes/header.php"); ?><h1>Petya and Sequence</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/REALSET.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/REALSET_1.pdf">Russian</a>.</h3>
<p>Little Petya likes integer numbers a lot. Recently he has received a sequence of integers as a gift from his mother. Petya calls a sequence of <b>N</b> integers <b>A<sub>i</sub></b> beautiful if there exist a sequence of <b>N</b> integer numbers <b>B<sub>i</sub></b> for which the following conditions hold:</p>
<ul>
<li> At least one number <b>B<sub>i</sub></b> differs from 0. </li>
<li> For every <b>j</b> from 0 to <b>N</b>-1 the following holds: <br /> <b>A<sub>0</sub>* B<sub>j</sub></b> + <b>A<sub>1</sub>* B<sub>(j + 1) mod N</sub></b> + ... + <b>A<sub>N-1</sub>* B<sub>(j + N - 1) mod N</sub></b> = 0.</li>
</ul>
<p><br /><br />
Please, help Petya to check if his sequence <b>A<sub>i</sub></b> is beautiful.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
The first line of each test case contains a single integer <b>N</b> denoting the number of elements in Petya's sequence. The second line contains <b>N</b> space-separated integers <b>A<sub>0</sub></b>, <b>A<sub>1</sub></b>, ..., <b>A<sub>N-1</sub></b> denoting the sequence.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the word "YES"(without quotes) if Petya's sequence is beautiful and "NO", otherwise.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>3 * 10<sup>4</sup></b></li>
<li><b>-1000</b> ≤ <b>A<sub>i</sub></b> ≤ <b>1000</b></li>
</ul>
</p>
<p>Sum of N for all test cases in a single input file will not exceed 150 000.</p>
<h3>Example</h3>
<pre><b>Input:</b>
4
3
1 0 0
3
1 1 1
4
2 -4 1 1
5
1 3 2 1 5
<b>Output:</b>
NO
YES
YES
NO
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 2.</b> One of the possible sequences B is (1, -1, 0). </p>
<p><b>Example case 3.</b> One of the possible sequences B is (1, 1, 1, 1). </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/KADR">KADR</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-10-2013</td>
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