<?php require("../../includes/header.php"); ?><h1>Factorization</h1><div class="content">
<p> </p>
<p>Every integer can be expressed as a product of two factors in many ways. However, in this problem we will only consider those factors which are relatively prime to each other. </p>
<p>Let us define <strong>F(N)</strong>) = number of ways in which <strong>N</strong> can be expressed as the product of two factors which are relatively prime to each other.</p>
<p>Your task is to compute all the values for <strong>F(N)</strong> for <strong>2 &lt;= N &lt;= 10<sup>3<sup></sup></sup></strong></p>
<p> </p>
<h3>Input</h3>
<p>There is no input for this problem.</p>
<p> </p>
<h3>Output</h3>
<p>Print the value of F(N) in the specified format.</p>
<p>If <strong>x1, x2,x3,... </strong> are consecutive integers then the output should be of the form  <strong> x1:F(x1),x2:F(x2),x3:F(x2), ... </strong></p>
<h3>Constraints</h3>
<p>Solutions are only accepted in <a href="http://en.wikipedia.org/wiki/Brainfuck">Brainf*ck</a>, <a href="http://en.wikipedia.org/wiki/INTERCAL">Intercal</a> and  <a href="http://en.wikipedia.org/wiki/Whitespace_(programming_language)">Whitespace</a> </p>
<h3>Example</h3>
<pre><b>Input:</b>
*NOTHING*

<b>Output:</b>

2:1,3:1,4:1,5:1,6:2, ... , 997:1,998:2,999:2,1000:2

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Debanjan">Debanjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>60 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>BF, GO, ICK, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>