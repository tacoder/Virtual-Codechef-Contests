<?php require("../../includes/header.php"); ?><h1>Funky Numbers</h1><div class="content">
<h2>Funky Numbers</h2>
<p>Satishwar needs to impress his girlfriend by generating funky numbers. A funky number is a positive integer in which the absolute difference between each of  the adjacent digits is at least 2. For example,</p>
<p>NOT FUNKY: 283459, 1459, 333333, 97753, 1234</p>
<p>FUNKY: 2904264, 1317317313, 975839753, 5</p>
<p>You are given two integers low and high and you have to help Satishwar tell the number of all funky numbers between low and high (inclusive).</p>
<h3>CONSTRAINTS : </h3>
<ul>
<li> 1&lt;=low&lt;=2000,000,000</li>
<li> low&lt;=hi&lt;=2000,000,000</li>
</ul>
<h3>SAMPLE TESTS:</h3>
<h5>INPUT:</h5>
<p>
	1 10
	</p>
<h5>OUTPUT:</h5>
<p>9</p>
<h5>INPUT:</h5>
<p>
	9 23
	</p>
<h5>OUTPUT:</h5>
<p>9</p>
<h5>INPUT:</h5>
<p>
	2000000000 2000000000
	</p>
<h5>OUTPUT:</h5>
<p>0</p>
<h5>INPUT:</h5>
<p>
	8000 20934
	</p>
<h5>OUTPUT:</h5>
<p>3766</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arvchamp">arvchamp</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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