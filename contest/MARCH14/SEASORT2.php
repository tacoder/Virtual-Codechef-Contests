<?php require("../../includes/header.php"); ?><h1>Sereja and Sorting 2</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/SEASORT2.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/SEASORT2.pdf">Russian</a>.</h3>
<p>Sereja has an array <b>A[1 .. N]</b>, which contains <b>N</b> integers. Now Sereja wants to sort it.<br />
The only thing that Sereja can do, is to reverse all elements in some sub-array, which is a consecutive parts of <b>A</b>. In other words, in one operation, Sereja can choose two integers <b>L</b> and <b>R (1 &lt;= L &lt; R &lt;= N)</b>, and swap elements <b>A[L]</b> and <b>A[R]</b>, <b>A[L+1]</b> and <b>A[R-1]</b>, <b>A[L+2]</b> and <b>A[R-2]</b> and so on.
</p>
<p>
In such operation of <b>L, R</b>, the total energy that Sereja spends <b>R - L + 1</b>. Clearly, Sereja wants to minimize the spent energy. Also, Sereja would like to minimize the total number of all operations. Therefore, we give a mixed objective as shown in Scoring.
</p>
<h3>Input</h3>
<p>
First line contains an integer <b>N</b>. Next line contains a sequence of integers <b>A[1], A[2], A[3], ..., A[N]</b>.
</p>
<h3>Output</h3>
<p>
First line contains an integer <b>Q</b> - the total number of operations you need to sort the array. In each of next <b>Q</b> lines, there should be two integers <b>L</b> and <b>R</b> <b>(1 &lt;= L &lt; R &lt;= N)</b> indicate the operation that Sereja should do.
</p>
<p>
Also you should remember, that <b>Q</b> shouldn't be greater than <b>N</b>.
</p>
<h3>Scoring</h3>
<p>
Suppose <b>S</b> is the total spent energy of your output, i.e. the sum of <b>R - L + 1</b> of all operations. Your score is <b>S / N + Q</b>.  Lower scores will earn more points.</p>
<p>We have 40 official test files. You must correctly solve all test files to receive OK. During the contest, your overall score is the sum of the scores on the first 10 test files. After the contest, all solutions will be rescored by the sum of the scores on the rest 10 test files. Note, that public part of the tests may not contain some border cases.
</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> &lt;= <b>N</b> &lt;= <b>10000</b></li>
<li><b>1</b> &lt;= <b>A[i]</b> &lt;= <b>5000</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
6
2 1 5 4 3 2
<b>Output:</b>
2
3 6
1 2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-09-2013</td>
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