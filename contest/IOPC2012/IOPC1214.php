<?php require("../../includes/header.php"); ?><h1>Celebrities of Pretendia</h1><div class="content">

<p align="justify">The celebrities of Pretendia are just as snobbish as those anywhere else. If celebrity x admires celebrity y, Then y thinks too high of him/herself and does not admire x back. Also, if x admires y, x also admires everyone that y admires.</p>
<p align="justify">All celebrities of Pretendia are going to be present at the premiere of <i>Chapangg 2</i>. True to their snobbish nature, the celebrities want to make sure that they do not wear dress made by the same designer who makes dress for someone who admires them. Given who admires whom in Pretendia, find out the minimum number of designers required to make dresses for all celebrities.</p>
<h3>Input</h3>
<p align="justify">The first line of the input contains T, the number of test cases (T ≤ 10). Following this are the descriptions of the test cases. Each starts with two space separated integers N &amp; M (1 ≤ N ≤ 1000;0 ≤ M ≤ 40000). N is the number of celebrities in Pretendia and celebrities are numbered from 0 to N-1. Following this are M lines of the form i j (0 ≤ i,j &lt; N) and tells you that celebrity i admires celebrity j. Taken together, these M lines  will satisfy the conditions in the problem statement.</p>
<h3>Output</h3>
<p align="justify">For each test case, output the minimum number of designers required so that every celebrity can wear a dress made by someone who does not design dresses for any of his admirers.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5 6
0 2
1 2
2 3
0 3
1 4
2 4

<b>Output:</b>
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-01-2012</td>
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