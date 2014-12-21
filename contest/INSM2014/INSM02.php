<?php require("../../includes/header.php"); ?><h1>Who Gets Her</h1><div class="content">
<p> </p>
<p>Amogh decides to go to Delhi to meet someone, and starts off in a train from his city. Seeing this, Sameer decides to go too (for obvious reasons). But he doesn't like to travel by train. So he decides to do a bus-journey.
</p>
<p>Sameer lives in Nashik. There are N cities between Nashik and Delhi (including Delhi but excluding Nashik), and in each city there are M buses numbered 1 to M. Sameer needs to travel to Delhi following these conditions:<br />
<br /><br />
1. At every city, he needs to change the bus.<br />
2. At every city, he can switch to only those buses which have number either equal to, or 1 less than, or 1 greater than the previous.
</p>
<p>
Also, a bus takes him from the present city to the next city, not beyond that.<br />
You are given the time (T) required by Amogh to reach Delhi, and the time required by all buses to reach the next city from the current city.
</p>
<p>
Can Sameer reach Delhi before Amogh?
</p>
<p> </p>
<h3>Input</h3>
<p>First line contains k, the number of testcases. k testcases follow. Each testcase is described as:<br />
<br /><br />
Line 1: T<br /><br />
Line 2: N,M<br /><br />
The next N lines contain time taken by M buses to go to the next city. <br /><br />
<br />
</p>
<h3>Output</h3>
<p>Output a single line saying "YES" or "NO" (without quotes), indicating whether Sameer can reach Delhi before Amogh or not.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N,M</b> ≤ <b>500</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
14
5 5
1 3 1 2 6
10 2 5 4 15
10 9 6 7 1
2 7 1 5 3
8 2 6 1 9<br />
<b>Output:</b>
YES
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/prongs7">prongs7</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-09-2014</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, FORT, GO, HASK, JAVA, JS, LISP clisp, LISP sbcl, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, TEXT</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>