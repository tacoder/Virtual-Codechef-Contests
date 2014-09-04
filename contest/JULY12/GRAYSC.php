<?php require("../../includes/header.php"); ?><h1>The Gray-Similar Code</h1><div class="content">

<p>
The Gray code (see <a href="http://en.wikipedia.org/wiki/Gray_code">wikipedia</a> for more details) is a well-known concept.<br />
One of its important properties is that every two adjacent numbers have exactly one different digit in their binary representation.
</p>
<p>
In this problem, we will give you <b>n</b> non-negative integers in a sequence <b>A[1..n] (0&lt;=A[i]&lt;2^64)</b>, such that every two adjacent integers have exactly one different digit in their binary representation, similar to the Gray code.
</p>
<p>
Your task is to check whether there exist 4 numbers <b>A[i1], A[i2], A[i3], A[i4] (1 &lt;= i1 &lt; i2 &lt; i3 &lt; i4 &lt;= n)</b> out of the given <b>n</b> numbers such that <b>A[i1] xor A[i2] xor A[i3] xor A[i4] = 0</b>. Here <b>xor</b> is a <a href="http://en.wikipedia.org/wiki/Bitwise_operation#XOR">bitwise operation</a> which is same as <b>^</b> in C, C++, Java and <b>xor</b> in Pascal.
</p>
<h3>Input</h3>
<p>First line contains one integer <b>n (4&lt;=n&lt;=100000)</b>.<br />
Second line contains <b>n</b> space seperated non-negative integers denoting the sequence <b>A</b>.</p>
<h3>Output</h3>

<p>Output “Yes” (quotes exclusive) if there exist four distinct indices <b>i1, i2, i3, i4</b> such that <b>A[i1] xor A[i2] xor A[i3] xor A[i4] = 0</b>. Otherwise, output "No" (quotes exclusive) please.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

5
1 0 2 3 7


<b>Output:</b>

Yes
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-05-2012</td>
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