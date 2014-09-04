<?php require("../../includes/header.php"); ?><h1>Bulbs</h1><div class="content">

<p>There are n bulbs in a row lighted during a marriage ceremony. A mischievous boy was passing from nearby when he had a naughty idea of breaking the bulbs. To make it interesting he does so in a pattern. He decides to smash every second lighted bulb on his first traversal, every third lighted bulb on his second traversal and so on. Getting exhausted at end he found that some of the bulbs remain lucky, not to be broken even during his indefinite process.</p>
<p>
Your aim is to design a program which takes the input n i.e. number of bulbs and finds the position number of the still lighted bulbs.</p>
<h3>Input</h3>
<p>First line contains number of test cases t such that  0 &lt; t &lt; 15 </p>
<p>The next t lines contain a single integer (n) each, such that  0 &lt; n &lt; 10000.</p>
<h3>Output</h3>
<p>The output should consist of t lines. Each line containing a single space separated positions of the lighted bulbs after the process.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
10
20
50

<b>Output:</b>
1 3 7
1 3 7 13 19
1 3 7 13 19 27 39 49
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivendra14">shivendra14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
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