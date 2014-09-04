<?php require("../../includes/header.php"); ?><h1>Swimming Pool</h1><div class="content">

<p>Ruskin needs a railing around his swimming pool, but he is too lazy to build it himself. So he purchased a railing-building machine.<br />
He wants the railing to be a regular polygon. The machine builds the railing along a single path, but it can only make railing corners at a single angle a.<br />
Will the machine be able to build the railing Ruskin wants? In other words, is there a regular polygon which angles are equal to a?</p>
<h3>Input </h3>
<ul>
<li>The first line of input contains an integer t -the number of tests. Each of the following t lines contains a single integer a  — the angle the machine can make corners at measured in degrees.<br />
<b>T</b> test cases follows:"</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test, output on a single line "YES" (without quotes), if the machine can build a railing Ruskin wants, and "NO" (without quotes), if it is impossible.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>179</b></li>
<li><b>1</b> ≤ <b>a</b> ≤ <b>179</b></li>
</ul>
<p> </p>
<pre><b>Input:</b>
3
30
60
90


<b>Output:</b>
NO
YES
YES

</pre><p> </p>
<h3>Explanation</h3>
<p><b>case 1.</b> It is impossible to build the Railing, since there is no regular polygon with angle.  </p>
<p><b>case 2.</b> The Railing is a regular triangle, and in the last test case — a square. </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abeersethi">abeersethi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-03-2013</td>
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