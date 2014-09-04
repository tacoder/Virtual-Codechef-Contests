<?php require("../../includes/header.php"); ?><h1>Lazy Puzzle</h1><div class="content">
<h2> Lazy Puzzle</h2>
<p>Aashish was sitting in a park with Chirag. Aashish wanted to prove Chirag about his </p>
<p>puzzle solving skills and asks Chirag to give him a puzzle.<br />
 Chirag being a lazy person gives Aashish a lazy puzzle to solve. He gives him a sequence of n digits and asks him </p>
<p>to make a number from these digits with each of the digit d used exactly once and all of </p>
<p>the digits in the sequence should be used. The number should be such that it should have the smallest number of </p>
<p>factors among all the numbers which can be generated using these digits.</p>
<p>Leading zeros can be skipped and should not be printed in the output.</p>
<p>If there is a tie among the numbers then give the smallest number among them. Help </p>
<p>Aashish solve the puzzle.</p>
<h3>CONSTRAINTS : </h3>
<ul>
<li> 1&lt;=n&lt;=5 </li>
<li> 0&lt;=d&lt;=9 </li>
<li> There will be at least one non zero digit in the sequence </li>
</ul>
<h3>SAMPLE TESTS:</h3>
<h5>INPUT1:<br />
<h5>
<p>
	2 4
	</p>
<h5>OUTPUT1:</h5>
<p>24</p>
<p> Note for INPUT1: Among 24 and 42, 24 has the least number of factors(1,2,3,4,6,8,12,24).</p>
<h5>INPUT2:<br />
<h5>
<p>
	0 5
	</p>
<h5>OUTPUT2:</h5>
<p>5</p>
<h5>INPUT3:<br />
<h5>
<p>
	8 1
	</p>
<h5>OUTPUT3:</h5>
<p>81</p>
<h5>INPUT4:<br />
<h5>
<p>
	1 1 2
	</p>
<h5>OUTPUT4:</h5>
<p>211</p>
<p>Note for INPUT4:- Although digit 1 is repeated but since it occurs twice, so it </p>
<p>should be used twice in the output</p>
</h5></h5></h5></h5></h5></h5></h5></h5>    </div><table cellspacing="0" cellpadding="0" align="left">
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