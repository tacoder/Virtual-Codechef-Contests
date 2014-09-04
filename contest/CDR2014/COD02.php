<?php require("../../includes/header.php"); ?><h1>Jaime and his numbers</h1><div class="content">
<h2>Jaime and his numbers</h2>
<p>Jaime Lannister is an intelligent guy .He likes to play with numbers . He made an interesting sequence of numbers in which the first two numbers are 1 and 2 and the other numbers are generated according to following rule :
   </p>
<p>"If A[i] is the i<sup>th</sup> (for i&gt;2) element in the sequence then ' i ' occurs A[i] times in the sequence and A[1]=1 and A[2]=2" .</p>
<p>First few terms in sequence are {1, 2, 2, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6, 6, 7...}. Note that 3 occurs 2 times in the sequence, (because A[3] = 2).</p>
<p>You have to find the n<sup>th</sup> number in the sequence.</p>
<h3>INPUT:</h3>
<p><br /></p>
<p>First line contains t, the number of test cases. Each of the next t lines contains a number n.</p>
<h3>CONSTRAINTS:</h3>
<p><br /></p>
<ul>
<li>0 &lt; <b> n </b> &lt;= 10<sup>13</sup>
</li><li>  1&lt;= <b> t </b> &lt;100
     </li></ul>
<h3>OUTPUT:</h3>
<p><br /></p>
<p>For every case, print the n<sup>th</sup> term of the sequence.</p>
<h3>SAMPLE TEST CASES:</h3>
<p><br /></p>
<h5>Input:</h5>
<p> </p>
<pre>
       2
       6
       16    
    </pre><h5>Output:</h5>
<p><br /></p>
<pre>
       4
       7
    </pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arvchamp">arvchamp</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-03-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>