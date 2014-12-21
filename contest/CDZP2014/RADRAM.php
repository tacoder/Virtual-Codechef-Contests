<?php require("../../includes/header.php"); ?><h1>Random Ram</h1><div class="content">
<p> </p>
<p>Ram is the new head-coach in a the local sports training facility.He has to manage the 26 </p>
<p>athletic clubs. The name of each club is denoted by a single alphabet.<br />
Each club is ranked according to their name.<br />
As the athletics day is near,he has to choose a sequence for the parade formed by the clubs.<br />
To do so he take a random number <b>M</b> he has generated from </p>
<p>"http://www.random.org/integers/".<br />
How many different formations can he choose from the given random number, such that its </p>
<p>characters actually denotes the ranks of the clubs and the whole number is used ?.</p>
<p> </p>
<h3>Input</h3>
<p>First line contains <b>T</b> the number of test cases.<br />
The following T lines each contain a random number <b>M</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the integral output of the problem</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10^4</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10^10</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre>

<b>Input:</b>
3
291
111
257



<b>Output:</b>
1
3
2

</pre><p> </p>
<h3>Explanation</h3>
<p>For the number 291 the answer will be "BIA" i.e the only 1 way. For the number 111 the answer </p>
<p>will be "AAA ","KA","AK",i.e there  are 3 ways and so on</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ram2691">ram2691</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-10-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>