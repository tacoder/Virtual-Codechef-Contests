<?php require("../../includes/header.php"); ?><h1>Opening The Ballot Box</h1><div class="content">
<p><b>Problem Description</b></p>
<p>Now that the votes have been casted, its time to count them. The ballot box has been locked with a secret code and has been handled to the Election Commission for </p>
<p>counting. The ballot box is very secure. It has 5 digits on its lock and only a particular combination of the digits can unlock it. The digits on the lock can be </p>
<p>changed only with the help of a laser machine.</p>
<p>The laser machine is very unique. It has <i>K</i> keys (with a number on each key) on it. In each step, it </p>
<p>multiplies the 5 digit number on the ballot box with any of its keys and then takes the remainder with 10<sup>5</sup> so as to make the number back to 5 digits. Note </p>
<p>that numbers are have leading 0's in case it is less than 5 digits. But using the laser machine is very expensive. Each step costs <i>C</i> Rupees. So the election </p>
<p>commission wants to know the minimum cost to unlock the ballot box.</p>
<p>Given the initial code, the final code (which unlocks the box), the <i>K</i> Keys and the cost per operation <i>C</i>, your job is to help find the minimum cost to </p>
<p>unlock the box, or report that the box cannot be opened.</p>
<p><br /> <br />
<b>Input</b></p>
<p>The first line of the input consists of the number of cases (T). T test cases follows. Each test case begins with a line containing 4 numbers <code>K C I F</code>, </p>
<p>where K is the number of Keys on the laser, C is the cost of using laser once, I is a 5 digit initial code and F is a 5 digit final code to unlock. Next line contains </p>
<p>K numbers, <i>keys[]</i> which are the keys on the laser machine.</p>
<p><b>Output</b></p>
<p>For each test case, output a line with one number which is the minimum cost to open the box. If the box can never be opened output -1 instead.</p>
<p><b>Constraints</b></p>
<pre>
T ≤ 50<br />
1 ≤ K ≤ 10 <br />
1 ≤ C ≤ 10<sup>7</sup><br />
I, F are 5 digit numbers and can have leading zero's.
0 ≤ Keys[] ≤ 10<sup>5</sup>  
</pre><p><b>Sample Cases</b></p>
<pre>
2
2 10 00002 00016
2 4
2 10 00002 00001
2 4
</pre><p><b>Output</b></p>
<pre>
20
-1
</pre><p><b>Explanations</b></p>
<ul>
<li>In the first case, you can use the key with number 2 to first reach to 4 and then use key 4 to reach 16. So laser was used two times.</li>
<li>In the second case, whatever you multiply, you will never be able to reach an odd number.</li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/phantom11">phantom11</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>