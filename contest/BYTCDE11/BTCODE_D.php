<?php require("../../includes/header.php"); ?><h1>Maximum Profit</h1><div class="content">

<p>Chakra is a young and dynamic entrepreneur, who is developing rapidly as a successful hotelier. He owns the Quickbyte chain of restaurants, 'M' of which are fully functional now. He divides each day into 'N' time slots. For each time slot 'j', in every restaurant 'i', there are A<sub>ij</sub> waiters and B<sub>ij</sub> customers. Being a quality conscious person, he wants each waiter to handle atmost one customer in a given time slot. Since he is really busy, in a day each restaurant is open only during one of the time slots. Since the hunger and demand for food varies during the day, the price which the customer is willing to pay varies, and is given by C<sub>ij</sub> for a restaurant 'i' during a time slot 'j'.</p>
<p>Given the values of A<sub>ij</sub>, B<sub>ij</sub> and C<sub>ij</sub>, find the maximum profit which Chakra can make in a day.</p>
<h3>Input</h3>
<p>The first line of input contains an integer 't', denoting the number of test cases.</p>
<p><br/>For each testcase, the first line contains 2 space separated integers 'M' and 'N'.</br/></p>
<p><br/>Each of the next 'M' lines contains 'N' integers. The i<sup>th</sup> integer on the j<sup>th</sup> line denotes the value of A<sub>ij</sub></br/></p>
<p><br/>Each of the next 'M' lines contains 'N' integers. The i<sup>th</sup> integer on the j<sup>th</sup> line denotes the value of B<sub>ij</sub></br/></p>
<p><br/>Each of the next 'M' lines contains 'N' integers. The i<sup>th</sup> integer on the j<sup>th</sup> line denotes the value of C<sub>ij</sub></br/></p>
<h3>Output</h3>
<p>For each test case output one value, denoting the maximum profit which Chakra can make in a day.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2 3
1 2 3
3 2 1
3 2 1
1 2 3
4 5 2
3 1 6

<b>Output:</b>
16

<b>Constraints:</b>
t &lt;= 50
1 &lt;= M,N &lt;= 100
1 &lt;= A<sub>ij</sub>, B<sub>ij</sub> &lt;= 5000
0 &lt;= C<sub>ij</sub> &lt;= 10^9

</pre><p><b>Explanation:</b></p>
<p>Test case 1: By opening the first restaurant at time slot 2 and second restaurant at time slot 3, Chakra makes a profit = 2*5 + 1*6 = 16. Note that although there are 3 customers for the second restaurant at time slot 3, since there is only 1 waiter, only 1 customer can be served.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suh_ash2008">suh_ash2008</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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