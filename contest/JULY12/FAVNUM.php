<?php require("../../includes/header.php"); ?><h1>Favourite Numbers</h1><div class="content">

<p>Chef likes numbers and number theory, we all know that. There are <b>N</b> digit strings that he particularly likes. He likes them so much that he defines some numbers to be <b>beautiful numbers</b> based on these digit strings. </p>
<p>
Beautiful numbers are those numbers whose decimal representation contains <b>at least one</b> of chef's favorite digit strings as a substring.<br />
Your task is to calculate the <b>K<sup>th</sup></b> smallest number amongst the beautiful numbers in the range from <b>L</b> to <b>R</b> (both inclusive).<br />
If the number of beautiful numbers between <b>L</b> and <b>R</b> is less than <b>K</b>, then output "<b>no such number</b>".</p>
<h3>Input</h3>
<p>In the first line of input there will be integers <b>L</b>, <b>R</b>, <b>K</b> and <b>N</b>.<br />
Then <b>N</b> lines follow. Each line will contain a single string of decimal digits.</p>
<h3>Output</h3>
<p>Output one integer - the solution to the problem described above or a string "<b>no such number</b>" if there is no such number.</p>
<h3>Constraints</h3>
<p>
<ul>
<li>1&lt;=<b>L</b>&lt;=<b>R</b>&lt;=10^18</li>
<li>1&lt;=<b>K</b>&lt;=<b>R-L+1</b></li>
<li>1&lt;=<b>N</b>&lt;=62<br /></li>
<li>1&lt;=<b>The length of any Chef's favourite digit string</b>&lt;=18. Each string begins with a nonzero digit.</li>
</ul>
</p><p><br /></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1 1000000000 4 2
62
63

<b>Output:</b>
163
</pre><p><br /></p>
<pre>
<b>Input:</b>
1 1 1 1
2

<b>Output:</b>
no such number
</pre><p><br /></p>
<pre>
<b>Input:</b>
1 1000 15 2
6
22

<b>Output:</b>
67
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-12-2011</td>
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