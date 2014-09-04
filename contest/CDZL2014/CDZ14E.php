<?php require("../../includes/header.php"); ?><h1>Final Battle</h1><div class="content">
<p>Now its time for the final battle between Eon and Codezilla. There are N weapons available numbered from 1 to N. The cost of weapon i is C[i] (1&lt;=i&lt;=N). There will be M attacks. In each attack Eon will choose K weapons from the range of weapons numbered between L and R (both inclusive). All weapons have the same damage power. Eon wants to spend the minimum amount possible for each attack .Tell Eon the amount that he will need to spend for each attack.</p>
<h3>Input</h3>
<p>First line of the input contains an integer <b>N</b>. The next line contains N space separated integers representing the array <b>C</b> representing the cost of the weapons. Next line contains an integer <b>M</b>. Each of the next M lines contains three integers <b>L</b>, <b>R</b> and <b>K</b>.</p>
<h3>Output</h3>
<p>Output should consists of M lines. The i'th line should contain the minimum amount that Eon needs to spend for the i'th attack. Since the answer can be large, output the answer modulo 10^9+7.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>20000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>20000</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>R-L+1</b></li>
<li><b>1</b> ≤ <b>C[i]</b> ≤ <b>10^9</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
9 3 5 3 1
2
1 3 2
2 5 3

<b>Output:</b>
8
7
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Eon will choose the weapons 2 and 3. So the answer is 3+5=8.</p>
<p><b>Example case 2.</b>  Eon will choose the weapons 2, 4 and 5. So the answer is 1+3+3=7</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tussharsingh13">tussharsingh13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-02-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>