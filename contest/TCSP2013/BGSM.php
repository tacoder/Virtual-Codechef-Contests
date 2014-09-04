<?php require("../../includes/header.php"); ?><h1>Is Bigger Smarter</h1><div class="content">

<p>Some people think that the bigger an elephant is, the smarter it is. To disprove this,<br />
you want to analyze a collection of elephants and place as large a subset of elephants<br />
as possible into a sequence whose weights are increasing but IQ’s are decreasing.</p>
<h3>Input</h3>
<p>The input will consist of data for a bunch of elephants, at one elephant per line terminated<br />
by the end-of-file. The data for each particular elephant will consist of a pair of<br />
integers: the first representing its size in kilograms and the second representing its IQ<br />
in hundredths of IQ points. Both integers are between 1 and 10,000. The data contains<br />
information on at most 1,000 elephants. Two elephants may have the same weight, the<br />
same IQ, or even the same weight and IQ.</p>
<h3>Output</h3>
<p>The only output line should contain an integer n, the length of elephant sequence<br />
found.. If these sequence<br />
of n elephants are a[1], a[2],..., a[n] then it must be the case that weight's of 1,2,3...n must be in strictly increasing order and iq's of 1,2,3,..n must be in strictly decreasing order.<br />
In order for the answer to be correct, n must be as large as possible. All inequalities<br />
are strict: weights must be strictly increasing, and IQs must be strictly decreasing.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6008 1300
6000 2100
500 2000
1000 4000
1100 3000
6000 2000
8000 1400
6000 1200
2000 1900

<b>Output:</b>
4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/assasin143">assasin143</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-01-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>