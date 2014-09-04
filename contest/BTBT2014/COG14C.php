<?php require("../../includes/header.php"); ?><h1>The Best Actor</h1><div class="content">
<p> </p>
<p>
The Oscar Committee wants to decide which person should get the best actor award among the given <b>N</b> actors.For that they decided to use a random function <b>random_bit()</b> which returns either <b>0</b> or <b>1</b> with equal probablity. For the results to be fair,the committee was asked to generate a random number between <b>1</b> to <b>N</b> (inclusive) , such that all<br />
actors have equal probability of being chosen (which in this case should always be equal to <b>1 / N</b>.</p>
<p>First of all Committee wants to know the expected number of times they will need to call <b>random_bit()</b> function to generate a random number between <b>1</b> to <b>N</b>.Also, while calling the function, they should follow the optimal strategy (i.e. the strategy that minimizes the expected number of function calls)</p>
<p> </p>
<h3>Input</h3>
<p>First line contains <b>T</b> (Number of test cases).<br /><br />
Next<b> T</b> lines contain a single integer<b> N</b>.
</p>
<p> </p>
<h3>Output</h3>
<p>For each testcase print the minimum number of expected function calls of random_bit() function required to generate a random number between <b>1</b> to <b>N</b> such that every number should be generated with equal probability.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
3

<b>Output:</b>
1.000000
2.666667
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/purvi2">purvi2</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-03-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>