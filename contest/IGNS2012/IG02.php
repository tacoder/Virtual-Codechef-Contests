<?php require("../../includes/header.php"); ?><h1>The Dilemma of The Lift Giver</h1><div class="content">

<p>A long way back I have taken $5000 from Golu when I used to live in Jodhpur. Now, time has passed and I am out of Jodhpur. While Golu still in Jodhpur, one day called me and asked about his money.<br />
 I thought of giving Golu a chance. I told him that he can still take his money back if he reaches my home anyhow just in 2 days but not after that.<br />
In excitement he made his way toward my hometown i.e. Gorakhpur. To cover up the petrol cost he started giving paid lift to whoever needs it throughout the way in order to earn some money. Help him to get the maximum profit.</p>
<p>His car has a capacity of k + 1 person, so in a certain moment he can transport k persons (and himself).<br />
From Jodhpur to Gorakhpur, there are l localities (cities, towns, villages), Jodhpur being the first and Gorakhpur being the lth.<br />
There are n groups of lift takers along the road. The ith<br />
group consists of pi persons, wants to travel from locality si  to locality di and will pay an amount of mi money.<br />
A group must be taken into the car as a whole. Assume that lift takers are found only in localities.</p>
<pre>
Restrictions
&bull; 1 &le; k &le; 7
&bull; 1 &le; l &le; 1000000
&bull; 1 &le; n &le; 50
&bull; 1 &le; pi &le; k
&bull; 1 &le; si &le; l &ndash; 1
&bull; 2 &le; di &le; l
&bull; si &lt; di
&bull; 1 &le; mi &le; 1000000
</pre><h3>Input</h3>
<p>The first line of the input contains the number of test cases.<br />
The first line of each test case contains the numbers n, l and k separated by a single space.<br />
 n lines follow, the ith line containing pi, si, di and mi separated by a single space.</p>
<h3>Output</h3>
<p>For each test case output a single line containing the maximum amount of money Golu can earn.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 5 4
2 1 5 50
1 2 4 20
2 3 4 40
2 4 5 50
3 4 5 80
10 10 5
2 5 10 17300
2 1 8 31300
5 4 10 27600
4 8 10 7000
5 9 10 95900
2 7 10 14000
3 6 10 63800
1 7 10 19300
3 8 10 21400
2 2 10 7000


<b>Output:</b>
140
127200

</pre><pre>
By:
Chintan, Asad, Ashayam, Akanksha
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/chint7392">chint7392</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2012</td>
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