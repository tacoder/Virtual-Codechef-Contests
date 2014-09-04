<?php require("../../includes/header.php"); ?><h1>Decreasing Strings</h1><div class="content">

<p>You need to find a string which has exactly K positions in it such that the character at that position comes alphabetically later than the character immediately after it. If there are many such strings, print the one which has the shortest length. If there is still a tie, print the string which comes the lexicographically earliest (would occur earlier in a dictionary).
</p>
<h3>Input</h3>
<p>The first line contains the number of test cases T. Each test case contains an integer K (&lt;= 100)
</p>
<h3>Output</h3>
<p>Output T lines, one for each test case, containing the required string.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1
2

<b>Output:</b>
ba
cba

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/technovanza10">technovanza10</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-01-2010</td>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>