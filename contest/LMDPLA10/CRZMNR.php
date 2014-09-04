<?php require("../../includes/header.php"); ?><h1>Crazy Miner</h1><div class="content">

<p style="text-align:justify;">
Bruce the miner works as a slave in a diamond mine, and now the mine is starting to fall apart. After helping his friends evacuate the mine, he thinks it is the perfect time to make some profit and escape from his oppressive masters.</p>
<p style="text-align:justify;">
His plan is to re-enter the mine with the excuse of helping more people, take as much diamonds as he can and exit the mine before it falls apart without being seen. Then, he will escape far away and live peacefully in a Caribbean island with all his diamonds. However, the mine will fall apart in L minutes, so he needs help in determining the maximum number of diamonds he can take and return to the entrance before the mine falls apart.</p>
<p style="text-align:justify;">
The mine is structured as N chambers connected by N-1 corridors. Each corridor connects two different chambers and takes a specific number of minutes to be traversed. Also, it is known that there is exactly one path between each pair of chambers in the mine. The chamber 0 represents the entrance to the mine. Miner Bruce can take as much diamonds as he wants from the chamber where he is instantly.</p>
<h3>Input</h3>
<p style="text-align:justify;">
The first line contains an integer T, which specifies the number of test cases. Then, T test case descriptions will follow.</p>
<p style="text-align:justify;">
Each test case will start with a line with two positive integers, N and L, whose meanings were described previously. The next line will contain N integers D<sub>i</sub>, specifying the number of diamonds on each chamber. The next N - 1 lines will contain three integers A<sub>i</sub>, B<sub>i</sub> and C<sub>i</sub> each, which indicates that the chambers A<sub>i</sub> and B<sub>i</sub> are connected by a corridor that takes C<sub>i</sub> minutes to be traversed.</p>
<h3>Output</h3>
<p style="text-align:justify;">
For each input case you must print the string "Case #i: ", where i is the test case number, starting from 1, followed by the maximum number that Bruce the miner can recover without being trapped inside the mine.
</p>
<h3>Example</h3>
<pre>
<b>Input</b>
2
5 7
7 3 7 8 6
0 1 1
0 2 1
0 3 1
0 4 1
6 25
5 8 3 3 10 7
0 1 4
3 0 3
2 3 2
5 2 3
4 5 4

<b>Output</b>
Case #1: 28
Case #2: 28
</pre><h3>Constraints</h3>
<ul>
<li> 1 &lt;= T &lt;=100 </li>
<li> 2 &lt;= N &lt;=100 </li>
<li> 1 &lt;= L &lt;=200 </li>
<li>C<sub>i</sub> will be between 1 and 100, inclusive, for each i between 1 and N-1, inclusive.</li>
<li>D<sub>i</sub> will be between 0 and 1000, inclusive, for each i between 1 and N, inclusive A<sub>i</sub> will be between 0 and N-1, inclusive, for each i between 1 and N-1, inclusive.</li>
<li>B<sub>i</sub> will be between 0 and N-1, inclusive, for each i between 1 and N-1, inclusive.</li>
<li>There will be exactly one path between each pair of different chambers.</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divij">divij</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-09-2010</td>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>