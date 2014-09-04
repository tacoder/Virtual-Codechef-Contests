<?php require("../../includes/header.php"); ?><h1>Balancing nature</h1><div class="content">
<p> </p>
<p>There are three kinds of possibilities about temperature in cities around the world, one whose temperature remains negative, second whose temperature remains positive, and the rest that have temperatures varying from negative to positive values.</p>
<p>Now, our very own poster boy Divyam, decides to do a quick analysis of the temperature of cities. For a city, he records temperatures t(1), t(2) … t(n) for n days where t(i) is the temperature on the i-th day. Divyam’s hypothesis is justified if first the temperature is negative for some non-zero number of days and then positive for non zero number of days.</p>
<p>In particular the temperature should never be zero. and there must be a positive integer k lying between 1 and (n-1) (both inclusive) for which the temperature values are all negative and from k+1 to n the temperature values are all positive.</p>
<p>Divyam becomes happy only if his hypothesis is satisfied, and your task is to keep him happy. Thus making you to modify some temperature values to fit the conditions of his hypothesis. Find the minimum number of such values that are required to be modified</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains a single integer n - representing the number of days for which Divyam runs his hypothesis testing experiment.<br />
The second line contains n integers t(1), t(2), ..., t(n)  — which is  sequence of measured temperature values. Numbers ti are separated by single spaces.</p>
<p> </p>
<h3>Output</h3>
<p>Print a single integer — the answer to the given task.</p>
<p> </p>
<h3>Constraints</h3>
<p>2 ≤ n ≤ 10<sup>5</sup><br />
|t(i)| ≤ 10<sup>9</sup></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
0 -4 1 1 -3
<b>Output:</b>
2
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divyambansal">divyambansal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-10-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>