<?php require("../../includes/header.php"); ?><h1>Dead Mans Chest</h1><div class="content">
<p>Barbossa after a long search has found the island on which the dead man's chest is located. To open the chest, Barbossa has to solve the mystery of the chest. Barbossa knowing the only programmer you, needs your help to solve the mystery. You are given <b>N distinct digits</b> and a string <b>S</b>. A number is mysterious if it contains all the <b>N</b> given digits atleast once and other digits may or may not come. Leading zeroes are never considered. The mysterious number also must not have the given string <b>S</b> as a substring of the number.</p>
<p>
For example, If 1, 2 and 3 are the digits given and 23 is the string given, then 12 is not a mysterious number since it does not have 3 in it, 123 is not a valid mysterious number since 23 is a substring of the number, whereas 132 and 11324 are mysterious numbers.</p>
<p>You need to solve the mystery by calculating the total number of mysterious numbers between <b>[L,R]</b> and the sum of all the mysterious numbers between [L,R] for some queries of <b>L</b> and <b>R</b>.</p>
<h3>Input:</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of digits. The description of <b>N</b> distinct digits follows in the next line as space separated integers. The third line contains the string <b>S</b>. The next line contains only one integer <b>Q</b> denoting the number of queries. The following <b>Q</b> lines denote each query containing two integers <b>L</b> and <b>R</b>.</p>
<h3>Output:</h3>
<p>For each query, print in the format <b>"A B"</b> where <b>A</b> is the total number of mysterious numbers mod <b>100003</b> in the range and <b>B</b> is the sum of all the lucky numbers mod <b>100003</b> in the range.</p>
<h3>Constraints:</h3>
<ul>
<li><b>1</b> &lt;= <b>N</b> &lt;= <b>10</b></li>
<li><b>1</b> &lt;= <b>length of String S</b> &lt;= <b>20</b></li>
<li><b>1</b> &lt;= <b>Q</b> &lt;= <b>5</b></li>
<li><b>1</b> &lt;= <b>L</b> &lt;= <b>R</b> &lt;= <b>10<sup>18</sup></b></li>
<li><b>N</b> will be all distinct</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>

2
1 2 
21
2
1 15
20 99
</pre><pre><b>Output</b>

1 12
0 0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divanshu">divanshu</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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