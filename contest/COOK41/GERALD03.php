<?php require("../../includes/header.php"); ?><h1>Chef Goes Through Segments</h1><div class="content">
<h3>Read problems statements in Mandarin Chinese <a href="/download/translated/COOK41/mandarin/GERALD03.pdf" target="_blank">here</a></h3>
<h3>Read problems statements in Russian <a href="/download/translated/COOK41/russian/GERALD03.docx" target="_blank">here</a></h3>
<h3>Problem Statement</h3>
<p>Chef has a sequence of <b>N</b> segments: [<b>L<sub>1</sub></b>, <b>R<sub>1</sub></b>], [<b>L<sub>2</sub></b>, <b>R<sub>2</sub></b>], ..., [<b>L<sub>N</sub></b>, <b>R<sub>N</sub></b>]. He wants to transform the first segment to the last one (with index <b>N</b>). His plan is to do this big deal with a number of transformations: firstly he will transform<br /> the first segment to the second one, then to the third one, then to the fourth one, and so on till <b>N</b>-th one.<br /><br /> Chef can use operation of a single type: shift one segment border by one unit. So, if he has segment [<b>L</b>, <b>R</b>], he can transform it into one of the following segments: [<b>L + 1</b>, <b>R</b>] (we will denote such operation with string L+), [<b>L</b>, <b>R + 1</b>] (will be denoted as R+), [<b>L - 1</b>, <b>R</b>] (L-), [<b>L</b>, <b>R - 1</b>] (R-). Chef doesn't like empty segments, therefore he cannot use any operation that makes a segment empty (<b>L = R</b>).<br /><br /> Chef really wants to transform his segment as fast as possible. Please, help him. Find the sequence with minimal number of operations that transforms his segment. If there are multiple such sequences pick the lexicographically minimal one.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. <br /><br /> The first line of each test case contains a single integer <b>N</b> denoting the number of segments Chef has. <br /> The following <b>N</b> lines contain pairs of integers. The <b>i</b>-th line contains integers <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>, denoting <b>i</b>-th Chef's segment.</p>
<h3>Output</h3>
<p>For each test case print an answer - two lines. The first line should contain the minimal number of operations. The second line should contain the sequence of operations<br /> without any whitespaces.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b>, <b>N</b> ≤ <b>1000</b>.</li>
<li><b>-1000</b> ≤ <b>L<sub>i</sub></b> &lt; <b>R<sub>i</sub></b> ≤ <b>1000</b>.</li>
</ul>
<p>The total sum of <b>N</b> values for all test cases doesn't exceed 1000.</p>
<h3>Example</h3>
<pre><b>Input:</b>
4
3
-1 0
0 1
3 5
1
0 1
3
-2 -1
-2 -1
-2 0
4
4 6
3 5
-1 1
1 2

<b>Output:</b>
9
R+L+R+L+R+L+R+L+R+
0

1
R+
13
L-R-L-L-L-L-R-R-R-R-L+R+L+
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gerald">gerald</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece">rustinpiece</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-11-2013</td>
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