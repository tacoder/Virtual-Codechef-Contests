<?php require("../../includes/header.php"); ?><h1>The Key</h1><div class="content">

<p>Please read  <b>The Beginning</b> of  <b>Problem A001</b> to get a description of the galaxy .</p>
<h3>The Key</h3>
<p>
On reaching the final frontier of the Galaxy , Sector 64 , the crew found themselves in a situation they had not anticipated .</p>
<p>The base they were supposed to land on was completely destroyed without any trace .<br />
All they found on the base was a Teleport channel , an encrypted key and some encrypted data , apparently left behind by mistake .<br />
The captain decided to investigate and find out where the Teleport channel leads to and what information were left behind .<br />
To do this , he has to decrypt the key and find a code to decode the information and unlock the Teleport channel .</p>
<p>The key had been encrypted using an ancient encryption algorithm .<br />
In this algorithm , a digit is preceded as well as succeeded by a certain number of characters which decides the position<br />
of the digit in the unencrypted code .</p>
<p>The encrypted key has the following characters and their relative weight-age :</p>
<p>Z      the basic charcacter ( may be considered of unit value )<br />
Q      equivalent to 3 Z <br />
E      equivalent to 5 Z<br />
T      equivalent to 7 Z<br />
U      equivalent to 9 Z</p>
<p>The characters which precede a digit add to its weight-age and which succeed a digit subtract from its weigh-age .<br />
The position of a digit in the unencrypted code is decided on the basis of its weight-age , the digit with the least weight-age is the left most and the digit with the most weight-age is the right most .<br />
In case of same weight-age for two digits , the digit that appears later in the encrypted key appears earlier in the unencrypted code .</p>
<p><b>Example : </b></p>
<p><b>ZZZE5UU7QQZZ7T3QQQQ4EEZ</b> </p>
<p>weight-age of 5 : (3x1) + (1x5) - (2x9) = -10 <br />
weight-age of 7 : (2x9) - (2x3) - (2x1) = 10 <br />
weight-age of second 7 : (2x3)+(2x1) - (1x7) = 1<br />
weight-age of 3 : (1x7) - (4x3) = - 5<br />
weight-age of 4 : (4x3) - (2x5) - (1x1) = 1</p>
<p>Implying the unencrypted code is :</p>
<p><b>53477</b></p>
<h3>Input</h3>
<p>
n<br />
N1 N2 N3 N4 .................N200<br />
N1 N2 N3 N4 .................N200<br />
............<br />
............<br />
n times </p>
<p><b>Where :</b></p>
<p>n : Number of test cases .<br />
0 &lt; n &lt; 32000 .</p>
<p>N1 , N2 , N3 , N4 .............. N200 : Sequence of 200 characters consisting of  digits ( 0 to 9 ) and characters ( A through Z ) .</p>
<h3>Output</h3>
<p></p>
<p>
n1 n2 n3 n4 n5......<br />
n1 n2 n3 ..........<br />
n1 n2 n3 n4 ............<br />
.........<br />
.........<br />
n cases </p>
<p><b>Where :</b></p>
<p> n1 n2 n3 n4 ........ nx : Sequence of digits representing the unencrypted code , one sequence per line . </p>
<h3>Example</h3>
<p><b>Input:</b><br />
1<br />
E5QQT25Q48757UTZ2032E2611U37E477U4Q7Q6T45ET1U712T500603UTE385Q7Z706TTZ4Q5Z26TE43T5ZU8E6T5EZT73UT2T64Q46324862T117QUUZ5Q543832Z1Q2Q1U0723QZUQ1271136E8Q02U3T1U0T10T8225TE5886Z17Q4U8TQ0QETTE</p>
<p><b>Output:</b><br />
73073365652715023241567267455511686288223117227238344168423608060017716305781270385705414842481165402735447212535</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/roy">roy</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-02-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>