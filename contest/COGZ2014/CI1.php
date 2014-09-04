<?php require("../../includes/header.php"); ?><h1>BTNUMBER</h1><div class="content">
<p> </p>
<p>Problem description:</p>
<p>Ternary computing is commonly implemented in terms of balanced ternary,which uses the three digits -1,0,+1.The negative value of any balanced ternary digit can be obtained by replacing every '+' with a '-' and vice versa.<br />
Balanced ternary can express negative values as a positive ones,without the need for a leading negative sign as with decimal numbers.The balanced ternary number is created by balancing ternary(Base 3) Numbers around the center of a number line,0.A balanced ternary number is a combination of negative and positive ternary numbers.Because you could represent any number simply using three symbols:|,- and 0 placed in values of 3^0,3^1,3^2 and so on.<br />
<br /></p>
<p>N is the integer that should be converted into balanced ternary number.</p>
<h3>Input</h3>
<ul>
<li>The only line of the input to the problem contains integer N.
</li></ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>Output a single line containing the answer to the corresponding test case in the form of |,-and 0 corresponding to the power of three places.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>-100000</b> ≤ <b>N</b> ≤ <b>100000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
89

<b>Output:</b>
|0|0-
</pre><p> </p>
<h3>Explanation:</h3>
<p><b>Example case 1:</b> The answer is +81+9-1=+3^4+3^2-3^0=|0|0-</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/dineshreddy36">dineshreddy36</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-03-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>