<?php require("../../includes/header.php"); ?><h1>Resistance</h1><div class="content">

<p align="justify">The electrical resistance is the opposition to the passage of electric current. If two resistors with resistance R1 and R2 are connected to each other, the resultant resistance R depends on how their ends are connected. If they are connected in Series, they simply add up to give R = R1 + R2. If they are connected in Parallel, its given by the equation 1/R = 1/R1 + 1/R2. This is shown below.</p>
<p><img src="http://www.codechef.com/download/RESIST_img_1.png" width="550" /></p>
<p align="justify">We have a long circuit of resistors of one unit resistance each ( Ri = 1 ) having N blocks. Each block has 2 resistors as shown in the figure below. For a circuit with only one block (N=1), the equivalent resistance at the ends on left-side is R = 1 ( note that the right-most horizontally aligned resistor has no influence, as its not part of any simple path between the two left ends ). For a circuit with two blocks (N=2), its 2/3 units. This is shown in the figure below.</p>
<p><img src="http://www.codechef.com/download/RESIST_img_2.png" width="550" /></p>
<p align="justify">Given N, find the resistance A/B at the left ends of the circuit having N blocks. The values can be huge, so reduce the fraction A/B to lowest terms P/Q, where greatest_common_divisor_of (P,Q) = 1 and print (P%M)/(Q%M) for a given modulo M.</p>
<h3>Input</h3>

<p align="justify">First line contains T ( number of test cases, 1 ≤ T ≤ 10 ). Each of the next T lines contains N M ( 1 &lt;= N &lt;= 10<sup>6</sup> and 2 &lt;=M &lt;= 2<sup>30</sup> )</p>
<h3>Output</h3>

<p align="justify">For each test case, output the equivalent resistance at the left ends, in the form (P%M)/(Q%M) as explained above, in a separate line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 10
2 12
100 10000

<b>Output:</b>
1/1
2/3
4301/9525
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/maksflow">maksflow</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-04-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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