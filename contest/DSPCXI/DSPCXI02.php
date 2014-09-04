<?php require("../../includes/header.php"); ?><h1>Can You Multiply</h1><div class="content">

<p> If a positional numeral system is used, a natural way of multiplying numbers is taught in schools as long multiplication, sometimes called grade-school </p>
<p>multiplication: multiply the multiplicand by each digit of the multiplier and then add up all the properly shifted results. It requires memorization of the </p>
<p>multiplication table for single digits. </p>
<p> This is the usual algorithm for multiplying by hand in base 10. Computers normally use a very similar shift and add algorithm in base 2. A person doing long </p>
<p>multiplication on paper will write down all the products and then add them together; an abacus-user will sum the products as soon as each one is computed.</p>
<p> Your task is to write a program that multiplies two arbitrary precision signed integers.  Note that for this particular problem the only allowed languages are C &amp; </p>
<p>C++. </p>
<p>Problem Setter: <a href= " http://www.facebook.com/Aasthik" >Vishal Gupta</a></p>
<h3>Input</h3>
<p>First line contains number of test cases, integer n &lt; 20.Each test contains two signed integers on two lines of arbitrary length. Number of digits of the arbitrary </p>
<p>precision integers may extend upto 1000000.</p>
<h3>Output: </h3>
<p>You need to print the sum of the two arbitrary precision signed numbers. </p>
<pre>

<b>Sample Input:</b>
3
-123456789987654
-9876543210
-7894561230123
1234567890
42134134710293471092734
812374198273491872435034

<b>Sample Output:</b>
1219326320880960097529340
-9746371800348756550470
34228683905221964318944087115419517161404442956

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ganesha">ganesha</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-02-2011</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>