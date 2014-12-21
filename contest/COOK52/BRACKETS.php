<?php require("../../includes/header.php"); ?><h1>Brackets</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/BRACKETS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/BRACKETS.pdf">Russian</a> as well.</h3>
<p>
	A valid parentheses sequence is a non-empty string where each character is either '<b>(</b>' or '<b>)</b>', which satisfies the following constraint:
</p>
<p>
	<em>You can find a way to repeat erasing adjacent pairs of parentheses </em>'<b>()</b>'<em> until it becomes empty.</em>
</p>
<p>
	For example, '<b>(())</b>' and '<b>()((()()))</b>' are valid parentheses sequences, but '<b>)()(</b>' and '<b>(()</b>' are not.
</p>
<p>
	Mike has a valid parentheses sequence. He really likes everything about his sequence, except the fact that it is quite long. So Mike has recently decided that he will replace his parentheses sequence with a new one in the near future. But not every valid parentheses sequence will satisfy him. To help you understand his requirements we'll introduce the pseudocode of function <b>F(S)</b>:
</p>
<pre>
	FUNCTION F( S - a valid parentheses sequence )
	BEGIN
		balance = 0
		max_balance = 0
		FOR index FROM 1 TO LENGTH(S)
		BEGIN
			if S[index] == '(' then balance = balance + 1
			if S[index] == ')' then balance = balance - 1
			max_balance = max( max_balance, balance )
		END
		RETURN max_balance
	END
</pre><p>
	In other words, <b>F(S)</b> is equal to the maximal balance over all prefixes of <b>S</b>.
</p>
<p>
	Let's denote <b>A</b> as Mike's current parentheses sequence, and <b>B</b> as a candidate for a new one. Mike is willing to replace <b>A</b> with <b>B</b> if <b>F(A)</b> is equal to <b>F(B)</b>. He would also like to choose <b>B</b> with the minimal possible length amongst ones satisfying the previous condition. If there are several such strings with the minimal possible length, then Mike will choose the least one lexicographically, considering '<b>(</b>' to be less than '<b>)</b>'.
</p>
<p>
	Help Mike!
</p>
<h3>Input</h3>
<p>
	The first line of the input contains one integer <b>T</b> denoting the number of testcases to process.
</p>
<p>
	The only line of each testcase contains one string <b>A</b> denoting Mike's parentheses sequence. It is guaranteed that <b>A</b> only consists of the characters <b>'('</b> and <b>')'</b>. It is also guaranteed that <b>A</b> is a valid parentheses sequence.
</p>
<h3>Output</h3>
<p>
	The output should contain exactly <b>T</b> lines, one line per each testcase in the order of their appearance. The only line of each testcase should contain one string <b>B</b> denoting the valid parentheses sequence that should be chosen by Mike to replace <b>A</b>.
</p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 5;</p>
<p>1 ≤ <b>|A|</b> ≤ 100000(10<sup>5</sup>).</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
()((()()))

<b>Output:</b>
((()))

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-10-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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