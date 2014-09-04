<?php require("../../includes/header.php"); ?><h1>Fun with decimal number system</h1><div class="content">

<p>
Pratyush, a six year old kid has just learnt how to write 1 through 1000 in decimal number system(DNS). Being a very curious kid, he made some modifications in <i>DNS</i> and removed the digits 0 through 3 and 7 through 9. So the only digits remaining to be used are 4, 5 and 6. He started enumerating numbers with these digits in increasing order viz. 4, 5, 6, 44, 45, 46, 54, 55, 56, 64, 65, 66, 444 ... and so on. Ecstatic with his discovery he named it Pratyush Number System(PNS). Then he had an idea. He called his 10 year old brother Keshav and put forward a problem for him. Given a number <i>n</i> in <i>DNS</i>, give the <i>n</i>th number that appears in <i>PNS</i>. For example for n=3, answer is 6. For n=13, answer is 444.
</p>
<h3>Input</h3>
<p>
First line of input is a single integer <i>T</i>, after which <i>T</i> test cases follow. Each test case is a line with a single integer <i>n</i> in decimal number system.
</p>
<h3>Output</h3>
<p>
For each test case output the corresponding number in PNS followed by a new line character.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1&lt;= t &lt;= 200</b></li>
<li><b>1 &lt;= n &lt;= 10^25</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
3
13
45
64
1000000000

<b>Output:</b>
6
444
4456
4664
5446456455646565564
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/prabhakar97">prabhakar97</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2013</td>
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
            <td>ASM, BASH, C, C99 strict, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, ERL, GO, HASK, JAVA, JS, LISP clisp, LISP sbcl, LUA, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>