<?php require("../../includes/header.php"); ?><h1>The numbers game</h1><div class="content">

<p align="justify">There is a new prodigy in town and he has challenged people to a game. They have to give him an integer N and he will immediately respond with a number which has more than N factors.</p>
<p align="justify">What the prodigy really does is to do some complex calculations in his head to find out the smallest integer with more than N factors. However, he has a weakness - he knows to do those calculation only on numbers up to 10<sup>19</sup>, so if the answer to be reported is more than 10<sup>19</sup>, he will not be able to come up with his solution and will lose the game.</p>
<p align="justify">Given the integer the people give to the prodigy, you need to report whether he wins the game or not. If he wins, also output his answer.</p>
<h3>Input</h3>
<p align="justify">The first line of input contains T (T ≤ 25), the number of test cases. Following this are T lines, each containing an integer N (1 ≤ N ≤ 10<sup>9</sup>) - the number which is given to the prodigy.</p>
<p><h3>Output</h3>
</p>
<p align="justify">Output one line per test case. If the smallest integer X with more than N factors is bigger than 10<sup>19</sup> so that the prodigy does not win, print "lose". Otherwise print "win X" (quotes for clarity).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3
5
12345678

<b>Output:</b>
win 6
win 12
lose

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>