<?php require("../../includes/header.php"); ?><h1>Birthday Candles</h1><div class="content">

<p>The chef is preparing a birthday cake for one of his guests,<br />
and his decided to write the age of the guest in candles on the cake.<br />
There are 10 types of candles, one for each of the digits '0' through '9'.<br />
The chef has forgotten the age of the guest, however, so doesn't know whether he has enough candles of the right types.<br />
For example, if the guest were 101 years old, the chef would need two '1' candles and one '0' candle.<br />
Given the candles the chef has, your task is to determine the smallest positive integer that cannot be represented with those candles.</p>
<h3>Input:</h3>
<p>Input will begin with an integer T≤100, the number of test cases.<br />
Each test case consists of a single line with exactly 10 integers, each between 0 and 8, inclusive.<br />
The first integer of each test case represents the number of '0' candles the chef has,<br />
the second integer represents the number of '1' candles the chef has, and so on.</p>
<h3>Output:</h3>
<p>For each test case, output on a single line the smallest positive integer that cannot be expressed with the given candles.</p>
<h3>Sample input:</h3>
<pre>3
2 1 1 4 0 6 3 2 2 2
0 1 1 1 1 1 1 1 1 1
2 2 1 2 1 1 3 1 1 1
 </pre><h3>Sample output:</h3>
<pre>4
10
22
 </pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/maksflow">maksflow</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-09-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>