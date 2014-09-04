<?php require("../../includes/header.php"); ?><h1>Family of Recurrences</h1><div class="content">
<p>Suppose we have recurrences of the following form, characterized by three parameters <b>m</b>, <b>sigma<sub>1..m</sub></b> and <b>f<sub>0..m-1<sub></sub></sub></b>, where <b>m</b> &gt; 0 and <b>sigma<sub>i</sub></b> is a binary variable (1 &lt;= <b>i</b> &lt;= <b>m</b>).
</p>
<p>A sequence of number <b>s</b> can be generated as followings:</p>
<ul>
<li>if <b>i</b> &lt; <b>m</b>, then <b>s<sub>i</sub></b> = <b>f<sub>i</sub></b></li>
<li>otherwise, i.e. <b>i</b> &gt;= <b>m</b>, <b>s<sub>i</sub></b> = <b>f<sub>i - 1</sub></b> * <b>sigma<sub>1</sub></b> + ... + <b>f<sub>i - j</sub></b> * <b>sigma<sub>j</sub></b> + ... + <b>f<sub>i - m</sub></b> * <b>sigma<sub>m</sub></b></li>
</ul>
<p>Given <b>m, n, sigma<sub>1..m</sub></b> and <b>f<sub>0..m-1<sub></sub></sub></b>, compute <b>s<sub>n</sub></b> modulo 10^9 + 7.</p>
<h3>Input</h3>
<p>
First line of input contains a positive interger <b>T</b>, then <b>T</b> testcases follow.
</p>
<p>For each testcase, first line contains positive integer <b>m</b> and non-negative integer <b>n</b><br />
separated by a single space. Second line contains <b>m</b> integers of <b>f<sub>0..m-1</sub></b>, separated by single space. Third line contains <b>m</b> numbers of <b>sigma<sub>1..m</sub></b>, separated by single space. </p>
<h3>Output</h3>
<p>For each testcase, output should contain a single number <b>s<sub>n</sub></b> modulo 10^9 +7 followed by a newline.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 20</p>
<p>1 &lt;= <b>m</b> &lt;= 100</p>
<p>0 &lt;= <b>n</b> &lt;= 10^9</p>
<p>-10^9 &lt;= <b>f<sub>i</sub></b> &lt;= 10^9</p>
<p><b>sigma<sub>i</sub></b> = 0 or 1</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 100
1 1
1 1
3 10
1 1 1
1 1 1

<b>Output:</b>
782204094
193
</pre>
<p><b>
<p>Problem Setter : Asif Haque</p>
<p></p></b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>15 sec</td>
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