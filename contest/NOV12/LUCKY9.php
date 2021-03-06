<?php require("../../includes/header.php"); ?><h1>Lucky Balance</h1><div class="content">

<p>
Chef has the string <b>s</b> of length <b>n</b> consisted of digits <b>4</b> and <b>7</b>.<br />
The string <b>s</b> is called balanced<br />
if there exits such integer <b>x</b> (<b>1</b> ≤ <b>x</b> ≤ <b>n</b>) that the number of digits <b>4</b> in substring <b>s[1; x)</b> is equal to the number of digits <b>7</b> in substring <b>s(x; n]</b>,<br />
where <b>s[1; x)</b> is the substring from the <b>1</b>st digit to (<b>x-1</b>)th digit of <b>s</b>, and <b>s(x; n]</b> is the substring from the (<b>x+1</b>)th digit to <b>n</b>th digit of <b>s</b>.<br />
For example, <b>s = 747474</b> is a balanced string, because <b>s[1; 4) = 747</b> has one <b>4</b> and <b>s(4; 6] = 74</b> has one <b>7</b>.<br />
Note that <b>x</b> can be <b>1</b> or <b>n</b> and <b>s[1; 1)</b> and <b>s(n; n]</b> denote an empty string.</p>
<p>
In one turn Chef can choose any pair of consecutive digits and swap them.<br />
Find for Chef the total number of different balanced string that can be obtained from string <b>s</b> using any (even 0) number of turns.<br />
Print the result modulo <b>1000000007</b>.</p>
<h3>Input</h3>

<p>
The first line of the input contains one integer <b>T</b>, the number of test cases.<br />
Then <b>T</b> lines follow, each of which contains string <b>s</b> for the corresponding test.</p>
<h3>Output</h3>

<p><b>T</b> lines, each of which contains single integer - the answer for the corresponding test modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>

<p>
1 ≤ <b>T</b> ≤ 10
</p>
<p>
1 ≤ <b>n</b> ≤ 5000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
47
4477

<b>Output:</b>
1
4
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2012</td>
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