<?php require("../../includes/header.php"); ?><h1>Derrangements</h1><div class="content">
<p>There are <b>N</b> people who live in <b>N</b> different houses, such that <b>P<sub>1</sub></b> lives in house <b>H<sub>1</sub></b>, <b>P<sub>2</sub></b> lives in <b>H<sub>2</sub></b> and so on. Your task is to send every person into a different house such that <b>P<sub>1</sub></b> does not go to house <b>H<sub>1</sub></b>, <b>P<sub>2</sub></b> does not go to house <b>H<sub>2</sub></b>.... and person <b>P<sub>k</sub></b> does not go to house <b>H<sub>k</sub></b> and others can go to any house. Given <b>N</b> and <b>k</b>, how many such different arrangements are possible. If no such arrangement is possible, output 0.</p>
<h3>Input</h3>
<p>The first line contains <b>T</b>, the number of test cases.</p>
<p>Each test case contains a single line, having two space separated integers- <b>N</b> and <b>K</b>. <b>N</b> is the total number of people, and <b>k</b> is the index such that no person from <b>P<sub>1</sub></b> to <b>P<sub>k</sub></b> goes to his own house.</p>
<h3>Output</h3>
<p>Output one integer per line, which contains the number of arrangements possible for that test case, modulo 1000000007.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 10</p>
<p>1 &lt;= <b>N</b> &lt;= 10<sup>5</sup></p>
<p>0 &lt;= <b>K</b> &lt;= <b>N</b><br />
<h3>Example</h3>
</p><p><b>Sample Input</b><br />3<br />2 0<br />3 3<br />9962 491<br /><br /><b>Sample Output</b><br />2<br />2<br />989784389<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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