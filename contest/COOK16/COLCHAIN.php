<?php require("../../includes/header.php"); ?><h1>Colorful Chain</h1><div class="content">

<p>A chain is a series of connected links. David has been presented a chain for his birthday consisting of <b>N</b> links and would like to color each of the links into one of <b>M</b> colors. He would like the coloring to be pretty uniform, so that no color is used too often or too seldom. Finally, David came with the following restriction: he wants to color the links in such a way that every color is used at least once in every <b>M</b>+1 consecutive links.</p>
<p>Two colorings are considered different if there exists at least one <b>i</b> between 1 and <b>N</b> such that link <b>i</b> is colored differently in these colorings. (The links are numbered, and the chain can not be rotated.) How many ways are there for David to color the chain?</p>
<h3>Input</h3>

<p>The first line of the input file contains one integer <b>T</b> -- the number of test cases (no more than 10). Each of the next <b>T</b> lines contains two integers <b>N</b> and <b>M</b> -- the length of the chain presented to David and the number of colors (1 ≤ <b>M</b> &lt; <b>N</b> ≤ 10<sup>5</sup>).</p>
<h3>Output</h3>

<p>For each test case output the number of ways for David to color the chain modulo 1 000 000 007 (10<sup>9</sup> + 7).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 1
4 2
6 3

<b>Output:</b>
1
10
132
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-10-2011</td>
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