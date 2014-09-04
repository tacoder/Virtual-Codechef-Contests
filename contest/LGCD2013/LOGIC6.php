<?php require("../../includes/header.php"); ?><h1>Query</h1><div class="content">
<p>Digo has a Biology exam. The paper has <b>N</b> questions. All the questions have integral marks. Digo has <b>M</b> friends who are sitting around him in a circle. Digo’s friends are numbered from 1 to <b>M</b>, in a clockwise order. Each friend solves exactly one question, not necessarily distinct.</p>
<p>Digo can select any index <b>i</b> (1 &lt;= <b>i</b> &lt;= <b>M</b>) and a number <b>j</b>, and then copies the answers of his <b>j</b> friends starting from index <b>i</b>, (in the clockwise order). If Digo attempts the same question twice, he will get marks only once. Given <b>i</b> and <b>j</b>, your task is to determine what will be the marks scored by Digo.</p>
<h3>Input</h3>
<p>First line contains <b>N</b>, the number of questions.</p>
<p>Next line contains <b>N</b> space separated integers, where <b>i<sup>th</sup></b> integer denotes the marks of the <b>i<sup>th</sup></b> question.</p>
<p>Each question will contain atmost 100 marks.</p>
<p>Next line contains an integer <b>M</b>, the number of friends of Digo.</p>
<p>Next line contains <b>M</b> space separated integers, where <b>i<sup>th</sup></b> integer denotes the question solved by <b>i<sup>th</sup></b> friend.</p>
<p>The next line contains <b>Q</b>, which is the number of queries asked by Digo.</p>
<p>The next <b>Q</b> lines contain one pair of integers (<b>i</b>, <b>j</b>) each, where <b>i</b> denotes the starting index, and <b>j</b> denotes the number of friends from which he copies the answers.</p>
<h3>Output</h3>
<p>For every query print a single integer, the marks scored by Digo in that query.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>N</b> &lt;= 10000</p>
<p>1 &lt;= <b>M</b> &lt;= 100000</p>
<p>1 &lt;= <b>Q</b> &lt;= 10000</p>
<p>1 &lt;= <b>i</b>, <b>j</b> &lt;= <b>N</b></p>
<h3>Example</h3>
<p><b>Sample Input</b><br /><br />
3<br />1 2 3<br />5 <br />1 1 2 1 3<br />3<br />1 5<br />2 3<br />5 2<br /><br /><b>Sample Output</b><br />6<br />3<br />4<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/adurysk">adurysk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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