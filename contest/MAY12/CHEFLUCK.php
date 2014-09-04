<?php require("../../includes/header.php"); ?><h1>Lucky lucky number</h1><div class="content">

<p><i>Every great chef knows that lucky numbers are positive integers whose decimal representations contain only the lucky digits 4 and 7. For example, numbers 47, 744, 4 are lucky and 5, 17, 467 are not. </i>  </p>
<p>Our chef has recently returned from the Lucky country. He observed that every restaurant in the Lucky country had a lucky number as its name.<br />
He believes that having a lucky number as a restaurant name can indeed turn out to be very lucky.   </p>
<p>Our chef believes that it is possible to make a lucky number having N digits even luckier. Any number following the rules below is called Lucky lucky number -   </p>
<p> 1. The number contains only digits 4 and 7. <br />
 2. Count of digit 4 in the number should be divisible by 7. <br />
 3. Count of digit 7 in the number should be divisible by 4.  </p>
<p>Help our chef to compute the count of digit 4 in the <b>smallest</b> Lucky lucky number having N digits. </p>
<h3>Input</h3>
<p>
First line contains T, number of test cases. Each of the next T lines contains a number N, the number of digits in the Lucky lucky number to be formed.  </p>
<p>1&lt;=T&lt;=1000 <br />
1&lt;=N&lt;=1000000000 (10^9) </p>
<h3>Output</h3>
<p>
If it is not possible to form a Lucky lucky number having N digits, output -1.<br />
Otherwise, output the count of digit 4 in the smallest Lucky lucky number having N digits.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
7
4
11
1
15

<b>Output:</b>
7
0
7
-1
7

<b>Explanation</b>
For the last test case, N = 15, the smallest lucky lucky number is
444444477777777. The count of digit 4 is 7.

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rosyish">rosyish</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-03-2012</td>
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