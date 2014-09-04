<?php require("../../includes/header.php"); ?><h1>Gurup and his Sweet Heart</h1><div class="content">
<p>Guru Prakash has recently discovered his sweet heart's (let's call her SH) secret affairs. He was amazed by the number of people one could have an affair with simultaneously. But after delving deeper into the issue he found out that SH has a pattern in her number of affairs she maintains at any point of time. Guru conjectures that at any point in time, the number of affairs SH has is always of the form "a power b"(suprising!). This conjecture is further strengthened by the fact that SH stalks a lot and is always bound to have lots of affairs.</p>
<p>Your task is simple. You have to verify if Guru's conjecture is true. In other words, whenever Guru reports the current number of boyfriends SH is having, you have to report if its of the form a^b(both a,b &gt;=2)</p>

<h3>Input</h3>
<p>Input description.</p>
<p>
Every input contains a single integer n (2&lt;=n&lt;=10^16)
</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>Each test case contains a single integer <b>N</b> denoting the number of boyfriends SH currently has an affair with.</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<p>For each test case, output a single line containing "YES" if its of the form a^b. "NO" otherwise. Quotes given for clarity. Note that a,b &gt;=2</p>
<p> </p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10^16</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
2
3
4
5
6

<b>Output:</b>
NO
NO
YES
NO
NO

</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> 2 is not of the form a^b</p>
<p><b>Example case 3.</b> 4 is of the form 2^2</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/karthikabinav">karthikabinav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-12-2013</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>