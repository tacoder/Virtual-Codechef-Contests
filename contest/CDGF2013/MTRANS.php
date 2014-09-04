<?php require("../../includes/header.php"); ?><h1>Matrix Tranpose</h1><div class="content">
<p>Pintu is a undergraduate student from India. This semester he is taking a Linear algebra course.  Today, Professor X gave a lecture on <a href="http://en.wikipedia.org/wiki/Transpose">Matrix transpose</a>.  Being a straight-A student Pintu, already knew this topic (very well) and was able to answer all the questions during the class. Impressed by Pintu’s performance Professor X decided to give him some programming assignment: Given <strong>T</strong> two dimensional matrices (<strong> M<sub>1</sub>,M<sub>2</sub>,M<sub>3</sub>, ... , M<sub>T</sub> </strong>), Pintu needs to transpose each of them.</p>
<p>Of course, Pintu doesn’t know anything about programming so he needed your help.</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input contains a positive integer <strong>T</strong>, the number of test cases. After that <strong>T</strong> test cases follows. The first line of each test case contains two space separated integers <strong>R<sub>i</sub></strong> and <strong>C<sub>i</sub></strong>, the number of rows and the number of columns of the matrix <strong>M<sub>i</sub></strong> respectively. The next line will contain the actual matrix <strong>M<sub>i</sub></strong> in this format:</p>
<p>            <strong><span>[(<strong>A<sub>11</sub></strong>, <strong>A<sub>12</sub></strong>, <strong>A<sub>13</sub></strong>,…, <strong>A<sub>1C<sub>i</sub></sub></strong>), (A<sub>21</sub>,A<sub>22</sub>,A<sub>23</sub>,…,A<sub>2C</sub>), … ,(A<sub>R<sub>i</sub>1</sub>,A<sub>R<sub>i</sub>2</sub>,A<sub>R<sub>i</sub>3</sub>,…,A<sub>R<sub>i</sub>C<sub>i</sub></sub>)]</span></strong></p>
<p><strong>where</strong> <strong> A</strong><sub><strong>ef<span> </span></strong><span>indicates the element of the <strong>e</strong>th row and <strong>f</strong>th column of the matrix <strong>M<sub>i</sub></strong>, where <strong>1</strong> ≤ <strong>e</strong> ≤ <strong>R<sub>i</sub></strong> and <strong>1</strong> ≤ <strong>f</strong> ≤ <strong>C<sub>i</sub></strong> </span></sub></p>
<h3>Output</h3>
<p>The transpose of the matrix in the same format as the input. See examples for more explanation.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><strong>1</strong> ≤ <strong>T</strong> ≤ <strong>100</strong></li>
<li><strong>1 ≤ R<sub>i</sub>,C<sub>i</sub> ≤ 10</strong></li>
<li><strong>-128 ≤ A<sub>ij</sub> ≤ 128</strong></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><strong>Input:</strong></pre><pre>3
2 2
[(-125, 67),(23,-23)]
6 2
[(1, -4), (2, 56), (3, 6),(1, 4), (2, -56), (3, 6)]
4 2
[(-125, 67),(23,-23),(99,100),(34,56)]
</pre><pre></pre><pre><strong><br /></strong></pre><pre><strong>Output:</strong></pre><pre>[(-125, 23), (67, -23)]
[(1, 2, 3, 1, 2, 3), (-4, 56, 6, 4, -56, 6)]
[(-125, 23, 99, 34), (67, -23, 100, 56)]
</pre><p> </p>
<h3>Scoring</h3>
<p>Length of your source.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Debanjan">Debanjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-09-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>