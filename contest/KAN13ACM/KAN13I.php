<?php require("../../includes/header.php"); ?><h1>Rewarding the Priests</h1><div class="content">
<p>Emperor of the galaxy has a number of planets where His common citizens live and in each of which runs a different clock system. However, in each planet a clock has two hands- hour and minute. <b>H</b> hours make a day, <b>M</b> minutes make an hour and <b>M</b> seconds make a minute, where values of <b>H</b> and <b>M</b> can be different for different planets. The Emperor is a lazy person and doesn’t like a moving second hand in the clock. That’s why all the clocks in his empire have only two hands - hour and minute.
</p>
<p>
There is a priest in each of the planets. Each priest spends some time in Emperor’s Hall and gets a number of gold coins for his services, which equals the number of times swapping of hour and minute hands would represent valid time during his interval of stay in the Hall. Start and finish time of staying of a priest is given in hours, minutes and seconds expressed in minutes and fractions in lowest terms, and is provided in a row. You need to calculate number of gold coins each priest will get corresponding to the time expressed in each row.
</p>
<h3>Input</h3>
<p>The first line of input will be an integer <b>T</b>, denoting the number of test case. </p>
<p>For each test case, there will be 3 lines of input. The first line of each test case contains 2 integers <b>H</b> and <b>M</b>, separated by a space. The next line contains 5 integers, <b>h</b>, <b>m</b>, <b>s</b>, <b>sn</b>, <b>sd</b> respectively denoting hour, minute, integer second and numerator and denominator of the fractional parts of the second. These integers represent the start time. The next line contains 5 integers in the same format as previous line, representing the finish time. The start and finish time are inclusive.</p>
<h3>Output</h3>
<p>output for each case will be an integer representing the number of gold coins the priest will get from the Emperor for his service. The format will be following: “Case : ”. Please refer to the sample input and output for exact formatting.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 50</p>
<p>2 &lt;= <b>H</b>, <b>M</b> &lt;= 100</p>
<p>1 &lt;= <b>h</b> &lt;= <b>H</b></p>
<p>0 &lt;= <b>m</b> &lt; <b>M</b></p>
<p>0 &lt;= <b>s</b> &lt; <b>M</b></p>
<p>0 &lt;= <b>sn</b> &lt; <b>sd</b> &lt;= 10000</p>
<p>Stay of a priest will never exceed <b>H</b> hours.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
12 60
12 0 0 0 1
11 59 59 999 1000
12 60
12 5 2  14 143
12 10 4  28 143
84 87
10 25 17 10 21
73 18 28 3747 5038

<b>Output:</b>
Case 1: 143
Case 2: 2
Case 3: 5284

</pre>
<p><b>
<p>Problem Setter : Dr. M. Kaykobad</p>
<p></p></b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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