<?php require("../../includes/header.php"); ?><h1>Snaky Numbers</h1><div class="content">

<p> Sanky is a school kid and is very fond of numbers. His teacher gave his class a home work, asking each of them to invent a new series of numbers, with a large collection of numbers in them. His friend Evan has already invented one, which starts from 0 and picks every alternate number : {0, 2, 4 ,...} and he named them 'Evan' numbers :). Sanky is not happy because he couldn't invent that first and thinks picking every alternate number starting from 1 : {1, 3, 5, ... } would not be very odd ;). </p>
<table border="0">
<tbody>
<tr>
<td>
<p align="justify">After refreshing at home, he comes up with a new series of numbers in which the digits alternate between increasing and decreasing when compared with the digit before it, in a zig-zag fashion. To make it clear, if the number is abcde, either a &lt; b > c &lt; d > e or a > b &lt; c > d &lt; e. He cleverly named them 'Snaky Numbers' :). Eg: 8, 90, 243516 and 31524 are Snaky while 44, 123 and 4235 are not. He is now wondering if his Snaky series is large enough. Particularly, he wants to know how many 'Snaky Numbers' are there of length <i>at most</i> <b>N</b>. Count only non-negative integers, without leading zeros.</p>
</td>
<td>
<p><img border="0" src="http://farm5.static.flickr.com/4076/5434599401_63cd906d64_m.jpg" /></p>
</td>
</tr>
</tbody>
</table>
<p><br/><br />
The answer may get very big and not fit in Sanky's book, so please just tell him the ( answer modulo <b>M</b> )</br/></p>
<h3>Input</h3>
<p>First line contains T [ number of test cases, around 60 ].</p>
<p>Each of the next T lines contains two integers N M [ 1 &lt;= N &lt;= 500,000 &amp; 2 &lt;= M &lt;= 500,000 ]</p>
<h3>Output</h3>
<p>For each test case, output  ( Number of Snaky numbers of length at most N ) % M, in a separate line</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 101
2 107
3 1001

<b>Output:</b>
10
91
616
</pre><p>
<i>* There are multiple test sets, and the judge shows the <b>sum</b> of the time taken over all test sets of your submission, if Accepted.</i></p>
    </div><table border="0">
<tbody>
<tr>
<td>
<p align="justify">After refreshing at home, he comes up with a new series of numbers in which the digits alternate between increasing and decreasing when compared with the digit before it, in a zig-zag fashion. To make it clear, if the number is abcde, either a &lt; b > c &lt; d > e or a > b &lt; c > d &lt; e. He cleverly named them 'Snaky Numbers' :). Eg: 8, 90, 243516 and 31524 are Snaky while 44, 123 and 4235 are not. He is now wondering if his Snaky series is large enough. Particularly, he wants to know how many 'Snaky Numbers' are there of length <i>at most</i> <b>N</b>. Count only non-negative integers, without leading zeros.</p>
</td>
<td>
<p><img border="0" src="http://farm5.static.flickr.com/4076/5434599401_63cd906d64_m.jpg" /></p>
</td>
</tr>
</tbody>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rosyish">rosyish</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-02-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>