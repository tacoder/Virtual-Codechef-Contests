<?php require("../../includes/header.php"); ?><h1>Party Time</h1><div class="content">

<p>Gandalf’s secret mark on the door did its job. One by one, all the dwarves entered Bilbo’s house and Thorin and his band of dwarves took their places.</p>
<p>Bilbo, for one, was as confused as one could be as to what was going on. There were so many dwarves in his house, singing songs about reclaiming the lonely mountain and helping themselves with all the food in his house. Anyone else would probably have lost their cool and asked the uninvited guests to leave but not Bilbo. He had always been a brilliant host and it was going to stay that way.<br />
He decided to help but he’d be smart about it. Bilbo figured that he’d have to clean up on his own afterwards, so he came up with a scheme that would allow him to use very few glasses. Since everyone could not fit at the table at once, they had supper in turns and the once a dwarf completed his supper and went out, his glass was available to be used by a new dwarf entering the room.</p>
<p>Bilbo marked the time at which each person sat down to eat and got up. Now, assuming that there’s no time lag between a person getting up from the table another taking his place and assuming that the glass can also be used by the other person right away, what is the minimum number of glasses that Bilbo should set at the table so that everyone can have their supper.</p>
<p>Let ‘n’ be the total number of uninvited dwarfs and let ‘s’ and ‘t’ be the starting and finishing time respectively for each one of them, then output the minimum number of glasses at the table that would do the job.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer t denoting the number of testcases.</p>
<p>Every testcase consists of the following lines:<br />
The first line contains an integer n denoting the number of uninvited dwarfs.</p>
<p>The next n lines contain two space separated integers denoting the starting time s and finishing time f respectively.</p>
<p><b>NOTE: s will always be smaller than f</b></p>
<h3>Output</h3>
<p>For every testcase output a single line containing an integer denoting the minimum number of glasses required.</p>
<h3>Constraints</h3>
<p>1 &lt;= t &lt;= 5</p>
<p>1 &lt;= n &lt;= 1000000</p>
<p>1 &lt;= s, f &lt;= 10^18</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
7
1830 1925
1920 2000
1915 1950
1845 1930
1850 1855
1800 1900
1905 1945

<b>Output:</b>
5
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/troika_bytes13">troika_bytes13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-02-2013</td>
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