<?php require("../../includes/header.php"); ?><h1>Ciel and A-B Problem</h1><div class="content">

<p>
In Ciel's restaurant, a waiter is training.<br />
Since the waiter isn't good at arithmetic, sometimes he gives guests wrong change.<br />
Ciel gives him a simple problem.<br />
What is <strong>A</strong>-<strong>B</strong> (<strong>A</strong> minus <strong>B</strong>) ?
</p>
<p>
Surprisingly, his answer is wrong.<br />
To be more precise, his answer has exactly one wrong digit.<br />
Can you imagine this?<br />
Can you make the same mistake in this problem?
</p>
<h3>Input</h3>
<p>
An input contains 2 integers <strong>A</strong> and <strong>B</strong>.
</p>
<h3>Output</h3>
<p>
Print a wrong answer of <strong>A</strong>-<strong>B</strong>.<br />
Your answer must be a <em>positive</em> integer containing the same number of digits as the correct answer, and exactly one digit must differ from the correct answer.<br />
Leading zeros are not allowed.<br />
If there are multiple answers satisfying the above conditions, anyone will do.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <strong>B</strong> &lt; <strong>A</strong> ≤ 10000
</p>
<h3>Sample Input</h3>
<pre>5858 1234</pre><h3>Sample Output</h3>
<pre>1624</pre><h3>Output details</h3>
<p>
The correct answer of 5858-1234 is 4624.<br />
So, for instance, 2624, 4324, 4623, 4604 and 4629 will be accepted, but 0624, 624, 5858, 4624 and 04624 will be rejected.
</p>
<h3>Notes</h3>
<p>
The problem setter is also not good at arithmetic.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Shangjingbo">Shangjingbo</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-11-2011</td>
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