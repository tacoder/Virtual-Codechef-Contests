<?php require("../../includes/header.php"); ?><h1>Sereja and Shuffling</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/SEASHUF.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/SEASHUF.pdf">Russian</a>.</h3>
<p>Sereja have an array <b>A = [A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub>]</b>, where <b>N</b> is an even integer. Let the function <b>f(A)</b> be defined by <b>f(A) = |(A<sub>1</sub> + A<sub>2</sub> + ... + A<sub>N/2</sub>) − (A<sub>N/2+1</sub> + A<sub>N/2+2</sub> + ... + A<sub>N</sub>)|</b>. Sereja want to decrease the value <b>f(A)</b> by the unusual way.</p>
<p>Let <b>A[l..r]</b> denote the sub-array <b>[A<sub>l</sub>, A<sub>l+1</sub>, ..., A<sub>r</sub>]</b> of <b>A</b>. Sereja can shift some sub-array <b>A[l..r]</b>, where <b>1 ≤ l ≤ r ≤ N</b>, then the array <b>A</b> will become <b>[A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>l-1</sub>, A<sub>l+1</sub>, A<sub>l+2</sub>, ..., A<sub>r</sub>, A<sub>l</sub>, A<sub>r+1</sub>, A<sub>r+2</sub>, ..., A<sub>N</sub>]</b>. For example we have the array <b>A = [1, 2, 3, 4, 5]</b> and we choose <b> l = 2, r = 4</b>, then after shifting we have the following array: <b>A = [1, 3, 4, 2, 5]</b>.</p>
<p>Sereja can shift multiple times, however it's burdensome to shift many elements. Thus the sum of <b>r − l + 1</b> should not exceed <b>2 × N</b>.</p>
<p>Please help Sereja to find the way for decreasing the value <b>f(A) = |(A<sub>1</sub> + A<sub>2</sub> + ... + A<sub>N/2</sub>) − (A<sub>N/2+1</sub> + A<sub>N/2+2</sub> + ... + A<sub>N</sub>)|</b> as much as possible. Note that you don't have to minimize the value <b>f(A)</b>, but the smaller value will give the higher score.</p>
<h3>Input</h3>
<p>Each test file contains only one test case.</p>
<p>The first line of input contains an integer <b>N</b>, denoting the length of the array. Then the next line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>The first line should contain an integer <b>q</b>, denoting the number of shifts. Then the <b>k</b><sup>th</sup> line of the next <b>q</b> lines should contain two space-separated integers <b>l</b> and <b>r</b>, denoting the <b>k</b><sup>th</sup> shift, where <b>1 ≤ l ≤ r ≤ N</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>2 ≤ N ≤ 100000</b>, that is, <b>2 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>0 ≤ A<sub>k</sub> ≤ 1000000000</b>, that is, <b>0 ≤ A<sub>k</sub> ≤ 10<sup>9</sup></b></li>
<li><b>N</b> is even</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
6
1 2 3 4 5 6

<b>Output 1:</b>
2
1 6
1 6

<b>Input 2:</b>
4
1 2 2 3

<b>Output:</b>
2
1 2
2 3
</pre><h3>Scoring</h3>
<p>Let <b>INIT</b> be the initial value of <b>f(A)</b>, and <b>S</b> be the value of <b>f(A)</b> after shifting denoted by output. For each test file, your score is calculated as <b>(INIT − S) / INIT</b>, where you can assume <b>INIT ≠ 0</b> for all official test files. Then the total your score is defined as the average of your score for the test files (see the next paragraph, for more details). The aim for this problem is to maximize the total your score.</p>
<p>We have <b>20</b> official test files. You must correctly solve and <b>decrease the value f(A) strictly</b> for all test files to receive <i>Accepted</i>. Invalid outputs, or <b>S &ge; INIT</b> for some test cases will lead <i>Wrong Answer</i>. You can assume that one can get <i>Accepted</i> for the official test files.</p>
<p>During the contest, the scores of the last <b>16</b> test files are <b>0</b>, that is, the total your score is calculated by only the first <b>4</b> tests. After the contest, all solutions will be rescored by the average of the scores of the all <b>20</b> test files, and it will be the final score.</p>
<h3>About Generating Tests</h3>
<p>At first we choose 1-1 or 1-2 or 2-1 or 2-2 randomly, and each probability is <b>0.25</b>. If we choose t here, then the test case is generated by the following <i>TYPE t</i>.</p>
<p><i>TYPE 1-1</i>: <b>N</b> is chosen from <b>[1, 10<sup>5</sup>]</b> uniformly and randomly. If <b>N</b> is odd, <b>N</b> is added by <b>1</b>. Then each <b>A<sub>k</sub></b> is chosen from <b>[0, 10<sup>9</sup>]</b> uniformly and randomly and independently.</p>
<p><i>TYPE 1-2</i>: <b>N</b> is chosen from <b>[1, 10<sup>5</sup>]</b> uniformly and randomly. If <b>N</b> is odd, <b>N</b> is added by <b>1</b>. Then <b>N</b> real values <b>y<sub>1</sub>, y<sub>2</sub>, ..., y<sub>N</sub></b> are chosen from <b>[0, 9)</b> uniformly and randomly and independently. And each <b>A<sub>k</sub></b> is set <b>floor(10<sup>y<sub>k</sub></sup>)</b>.</p>
<p><i>TYPE 2-1</i>: A real value <b>x</b> is chosen from <b>[2, 5)</b> uniformly and randomly, and we set <b>N = floor(10<sup>x</sup>)</b>. If <b>N</b> is odd, <b>N</b> is added by <b>1</b>. Then each <b>A<sub>k</sub></b> is chosen from <b>[0, 10<sup>9</sup>]</b> uniformly and randomly and independently.</p>
<p><i>TYPE 2-2</i>: A real value <b>x</b> is chosen from <b>[2, 5)</b> uniformly and randomly, and we set <b>N = floor(10<sup>x</sup>)</b>. If <b>N</b> is odd, <b>N</b> is added by <b>1</b>. Then <b>N</b> real values <b>y<sub>1</sub>, y<sub>2</sub>, ..., y<sub>N</sub></b> are chosen from <b>[0, 9)</b> uniformly and randomly and independently. And each <b>A<sub>k</sub></b> is set <b>floor(10<sup>y<sub>k</sub></sup>)</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-11-2013</td>
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