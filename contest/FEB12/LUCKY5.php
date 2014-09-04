<?php require("../../includes/header.php"); ?><h1>Lucky Long</h1><div class="content">

<p> Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky and <b>5</b>, <b>17</b>, <b>467</b> are not.</p>
<p> Chef has a positive integer <b>N</b>. He can apply any of the following operations as many times as he want in any order:</p>
<ul>
<li> Add <b>1</b> to the number <b>N</b>.
</li>
<li> Take some digit of <b>N</b> and replace it by any non-zero digit.
</li>
<li> Add any non-zero leading digit to <b>N</b>.
</li>
</ul>

<p> Find the minimum number of operations that is needed for changing <b>N</b> to the lucky number.</p>
<h3>Input</h3>

<p>The first line contains a single positive integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a positive integer <b>N</b> without leading zeros. </p>
<h3>Output</h3>

<p>For each <b>T</b> test cases print one integer, the minimum number of operations that is needed for changing <b>N</b> to the lucky number.</p>
<h3>Constraints</h3>

<p>
1 ≤ <b>T</b> ≤ 10
</p>
<p>
1 ≤ <b>N</b> &lt; 10<sup>100000</sup></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
25
46
99

<b>Output:</b>
2
1
2

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-12-2011</td>
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