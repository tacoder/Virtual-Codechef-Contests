<?php require("../../includes/header.php"); ?><h1>Xoxo and Airtime</h1><div class="content">
<p>
Long time ago, Mr. Xoxo opened a Mobile Company, "AIRTIME". He worked day and night to take his <br />company to the next step of success. Due to his great efforts, the company opened many branches<br /> across the world in few years. But after <b>N</b> days, Mr. Xoxo died in an air crash while he was returning after <br />meeting his grandson Xuxu who was pursuing his Masters degree in India. </p>
<p>After the death of Mr. Xoxo, the governing committee of "AIRTIME" decided to appoint Xuxu as the CEO of <br />the company. Xuxu agreed to join but before that he wanted to analyse the data of the company from its <br />very first day to the N<sup>th</sup> day <b>[1,N]</b> so that he could work efficiently.</p>
<p>Initially, Xuxu has no information about the Mobile units sold on each day.He was given <b>M</b> updates from<br /> the different branches across the world which provides the three values <b>X Y V</b>. It means that the particular<br /> branch sold V mobile units on each day from<b> X<sup>th</sup></b> day to <b>Y<sup>th</sup> </b>day (Both Inclusive).</p>
<p>The total mobile units sold by the company on <b>i<sup>th</sup></b> day can be found by adding all the values <b>V<sub>i</sub></b> of updates <b>M<sub>i</sub></b> which contains <b>i<sup>th</sup></b> day in its range <b>[X<sub>i</sub>,Y<sub>i</sub>]</b>.</p>
<p>It is assumed that <b>M</b> updates are sufficient to get the required data for N days.</p>
<p>Xuxu appoints you as a data analyst and asks you to answer his <b>Q</b> queries. For each query, he provides <br />you a value <b>D</b> and asks you to find the total number of pairs for which the difference between the total <br />mobile units sold on any two distinct days is <b>D</b>. </p>
<p><b>Note</b>: <br /><br />
For each pair of days there exists only one pair, i.e. <b>( i , j )</b> is similar to <b>( j , i )</b> and should be counted <br />exactly once where <b>i</b> and <b>j</b> are the total units sold on that pair of days.<br /><br /></p>
<pre>
<b>Warning:</b>
Large I/O, Use scanf and printf instead of cin and cout in C++.<br />
</pre>
<h3>Input</h3>
<p></p><p>
The first line of the input contains a single integer <b>T</b>, the number of test cases. Then <b>T</b> test cases follow.<br />
The first line of each test case contains two space separated integers <b>N</b> and <b>M</b>.<br />
Each of the following <b>M</b> lines contains space separated three integers  <b>X Y V</b> .<br />
The next line contains <b>Q</b>.<br />
Each of the following <b>Q</b> lines contains an integer <b>D</b>.
</p>

<h3>Output</h3>
<p>For each Test Case, output <b>Q</b> lines, each contains a single integer containing the total number of pairs for the corresponding query.
</p>
<h3>Constraints</h3>
<p>
<b>1</b> ≤ <b>T</b> ≤ <b>2</b><br />
<b>1</b> ≤ <b>N,M</b> ≤ <b>10^5</b><br />
<b>1</b> ≤ <b>X,Y</b> ≤ <b>N</b><br />
<b>0</b> ≤ <b>V</b> ≤ <b>10^13</b><br />
<b>1</b> ≤ <b>Q</b> ≤ <b>10</b><br />
<b>0</b> ≤ <b>D</b> ≤ <b>10^18</b>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5 5
2 4 1
3 5 2
1 2 5
3 5 4
4 5 1
3
0
1
2

<b>Output:</b>
1
5
3
</pre><h3>Explanation</h3>
<p>The total mobile units sold on</p>
<pre>
day 1:  5
day 2:  6
day 3:  7
day 4:  8
day 5:  7
for D=0,  pairs are (7,7)
for D=1,  pairs are (5,6),(6,7),(6,7),(7,8),(7,8)
for D=2,  pairs are (7,5),(7,5),(8,6)
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aichemzee">aichemzee</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.444 sec</td>
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