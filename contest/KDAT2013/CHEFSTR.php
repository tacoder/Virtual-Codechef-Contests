<?php require("../../includes/header.php"); ?><h1>Chef and strings</h1><div class="content">

<p>Chef loves strings very much. One day one of his friends gave him two strings A and B. He asked chef to calculate the number of substrings in A that are present in B and number of substrings in B that are present in A. Chef needs your help to complete this task.</p>
<h3>Input</h3>
<p>Two strings A and B of length l&lt;= 10^5.</p>
<h3>Output</h3>
<p>Two numbers X and Y, X is the number of substrings in A that are present in B. Y is the number of substrings in B that are present in A.</p>
<h3>Example</h3>
<pre><b>Input:</b>
aacd
cdaa<br />
<b>Output:</b>
6 6
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Substrings of A={a,a,c,d,aa,ac,cd,aac,acd,aacd}</p>
<p>Substrings of B={c,d,a,a,cd,da,aa,cda,daa,cdaa}</p>
<p>Substrings in A that are substrings of B- {a,a,c,d,aa,cd}</p>
<p>Substrings in B that are substrings of A- {a,a,c,d,aa,cd}
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gauravjasraj">gauravjasraj</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-04-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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