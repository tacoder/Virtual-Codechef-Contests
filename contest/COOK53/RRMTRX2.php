<?php require("../../includes/header.php"); ?><h1>Matrix Again</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/RRMTRX2.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/RRMTRX2.pdf">Russian</a> as well.</h3>
<p>
In every contest there should be an easy problem about matrices. December Cook-Off is not an exception.<br />
Given a matrix <b>A</b> which consists of <b>n</b> rows and <b>m</b> columns, and contains integer numbers.<br />
Consider every possible vector <b>v</b> of <b>m</b> elements, such that every <b>1 ≤ v<sub>i</sub> ≤ n</b>.<br />
Let value of the vector be product of all <b>A<sub>v<sub>i</sub>, i </sub></b> (<b>1 ≤ i ≤ m</b>). You are to count the sum of values over all possible vectors <b>v</b>.
</p>
<p><h3> Input details</h3>
</p><p>The first line contains two integers <b>n</b> and <b>m</b> — dimensions of the matrix. Then <b>n</b> lines of <b>m</b> integers follow. The <b>j<sub>th</sub></b> element of <b>i<sub>th</sub></b> line contains <b>A<sub>i, j</sub></b>.
</p>
<h3> Output details</h3>
<p>
Output single integer — the answer for the problem modulo <b>10<sup>7</sup> + 7</b>, i.e the smallest non-negative integer number <b>r</b> that <b>answer - r</b> is divisible by <b>10<sup>7</sup> + 7</b>.
</p>
<h3> Constraints</h3>
<p>
<b>1 ≤ n ≤ 47 </b><br /><br />
<b>1 ≤ m ≤ 38 </b><br /><br />
<b>0 ≤ |A<sub>i, j</sub>| ≤ 100 </b><br />
</p>
<h3>Examples</h3>
<p><b>Input</b><br /><br />
2 2<br /><br />
1 2<br /><br />
3 4<br /><br />
<b>Output</b><br /><br />
24<br /></p>
<h3>Explanation for the sample test case</h3>
<p>All possible vectors are {(1, 1), (1, 2), (2, 1), (2, 2)} <br /><br />
<b>value(1, 1)</b> = <b>A<sub>1, 1</sub></b> * <b>A<sub>1, 2</sub></b> = 1 * 2 = 2<br /><br />
<b>value(1, 2)</b> = <b>A<sub>1, 1</sub></b> * <b>A<sub>2, 2</sub></b> = 1 * 4 = 4<br /><br />
<b>value(2, 1)</b> = <b>A<sub>2, 1</sub></b> * <b>A<sub>1, 2</sub></b> = 3 * 2 = 6<br /><br />
<b>value(2, 2)</b> = <b>A<sub>2, 1</sub></b> * <b>A<sub>2, 2</sub></b> = 3 * 4 = 12<br /><br />
<b>answer</b> = 2 + 4 + 6 + 12 = <b>24</b><br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-10-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>