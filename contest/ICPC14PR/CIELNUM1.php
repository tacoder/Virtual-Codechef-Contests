<?php require("../../includes/header.php"); ?><h1>Ciel Numbers I</h1><div class="content">

<p>
Recently, chef Ciel often hears about <i>lucky numbers</i>.
</p>
<hr />
<div align="center">
<i><br />
Everybody knows that lucky numbers are positive integers<br />
whose decimal representation contains only the lucky digits 4 and 7.<br />
For example, numbers 47, 744, 4 are lucky and 5, 17, 467 are not.<br />
</i>
</div>
<hr />
<p>
Ciel decides to make <i>Ciel numbers</i>.<br />
As you know, Ciel likes the digit 8 very much.<br />
And then, Ciel likes the digits 5 and 3.<br />
So Ciel defines Ciel numbers as the positive integers <strong>k</strong> such that <strong>d</strong>(<strong>k</strong>, 8) ≥ <strong>d</strong>(<strong>k</strong>, 5) ≥ <strong>d</strong>(<strong>k</strong>, 3) and <strong>d</strong>(<strong>k</strong>, <strong>i</strong>) = 0 for all <strong>i</strong> = 0, 1, 2, 4, 6, 7, 9,<br />
where <strong>d</strong>(<strong>k</strong>, <strong>i</strong>) denotes the number of the digit <strong>i</strong> in the decimal representation of the integer <strong>k</strong>.<br />
For example, the first few Ciel numbers are 8, 58, 85, 88, 358, 385, 538, 583, 588, 835, 853, 858, 885, 888, ....
</p>
<p>
Ciel would like to know about Ciel numbers.<br />
Your task is to find the first 50000 Ciel numbers.
</p>
<h3>Input</h3>
<p>
This problem has no inputs.
</p>
<h3>Output</h3>
<p>
Print the first 50000 Ciel numbers in order of increasing.
</p>
<h3>Sample Output</h3>
<pre>8
58
85
88
... (49996 lines)</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2012</td>
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