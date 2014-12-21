<?php require("../../includes/header.php"); ?><h1>Stringology is Magic</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/QSTRING.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/QSTRING.pdf">Russian</a>.</h3>
<p>You have been given a string <b>T</b> with <b>n</b> lowercase letters <b>T[1..n]</b>. For each substrings <b>T[l..r]</b>, we can assign them two values, <b>k1</b> and <b>k2</b>, which are defined as following.</p>
<ul>
<li><b>k1</b> is the number of different substrings which are lexicographically smaller than <b>T[l..r]</b>. There are <b>(n + 1) * n / 2</b> substrings in total.</li>
<li><b>k2</b> indicates the number of substrings which are as same as <b>T[l..r]</b> but have smaller left subscript than <b>l</b>.</li>
</ul>
<p>
In this problem, you need to answer the following two queries:
</p>
<ul>
<li>Select <b>k1</b> <b>k2</b>: report <b>l</b> and <b>r</b>, such that <b>T[l..r]</b> are assigned values <b>k1</b> and <b>k2</b>.</li>
<li>Rank <b>l</b> <b>r</b>: output the assigned <b>k1</b> and <b>k2</b> of <b>T[l..r]</b>.</li>
</ul>
<h3>Input</h3>
<p>
The first line contains a string <b>T</b> with <b>n</b> letters . The second line contains a number <b>m</b>, which represents for the totally number of queries.
</p>
<p>
Each of the following <b>m</b> lines contains a query. All queries are formed as "Select <b>k1</b> <b>k2</b>" or "Rank <b>l</b> <b>r</b>".
</p>
<h3>Output</h3>
<p>For each query, output the corresponding answer as the form "<b>l</b> <b>r</b>" or "<b>k1</b> <b>k2</b>" in a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>n</b> &lt;= <b>10^6</b></li>
<li><b>1</b> &lt;= <b>m</b> &lt;= <b>10^6</b></li>
<li><b>1</b> &lt;= <b>l</b> &lt;= <b>r</b> &lt;= <b>n</b></li>
<li><b>k1</b>, <b>k2</b> are legal</li>
<p>.
</p></ul>
<h3>Example</h3>
<pre><b>Input:</b>
aa
6
Select 1 1
Select 1 2
Select 2 1
Rank 1 1
Rank 2 2
Rank 1 2
</pre><pre><b>Output:</b>
1 1
2 2
1 2
1 1
1 2
2 1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xiaodao">xiaodao</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-09-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 10 sec</td>
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