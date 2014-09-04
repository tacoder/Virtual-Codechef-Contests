<?php require("../../includes/header.php"); ?><h1>Chef And The Polynomial</h1><div class="content">

<p> </p>
<p> The Chef is fond of polynomials so he decides to fix the rate of the food items in the form of a polynomial equation for his hotel.</p>
<p>
He decides to put the rate of the items in the form of coefficients of the polynomial where, if the  rate of tea is "a1" and rate of sandwich is "a2”  and so on, then the rate list will be in the form of a0 *x^0+ a1 *x^1.......aN-1 *x^(N-1).</p>
<p>But his competitor Ciel copies this policy .In the same way, Ciel also designs a polynomial rate list for his hotel. But this makes the condition miserable for both of them as the profit gets divided in an unbalanced form. So both of them decide to multiply the coefficient of their polynomial and get a resultant polynomial. They put the resultant list on their rate boards. But they are weak in mathematics so help them to do this task!!
</p>
<p> </p>
<h3>Input</h3>
<p>First line of the Input contains T, the number of test cases.</p>
<p>Each test case is given as follows:<br />
Two space separated integers ,  N1 and N2 which denote the degree of polynomials of Chef and Ciel respectively.</p>
<p>The second line contains N1+1 coefficients in the order of a0 a1 .......aN1.  These coefficients denote the coefficients of Chef’s polynomial .</p>
<p>
The second line contains N2+1 coefficients in the order of a0 a1 .......aN2.  These coefficients denote the coefficients of Ciel’s  polynomial .
</p>
<h3>Output</h3>
<p>First line of the output should have the degree of the resultant polynomial, N.<br />
Second line of the output should have the resultant polynomial coefficients for their hotels in the order of a0 a1 ....... aN   all separated by a space.Since the coefficients can be large print their value <b>mod 2^32</b>
</p>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>0</b> ≤ <b>N1,N2</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>value of the coefficients (a0, a1 ,..)&lt;=</b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 1
1 2
2 3
2 0
1 2 3
4<br />

<b>Output:</b>
2
2 7 6 
2
4 8 12
</pre><p> </p>
<p>NOTE :<b> Use fast Input Output. </b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tussharsingh13">tussharsingh13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-03-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>